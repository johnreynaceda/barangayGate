<?php

namespace App\Http\Livewire\Admin;

use Filament\Tables\Columns\BadgeColumn;
use Livewire\Component;
use App\Models\RequestCertificate;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use App\Models\User;
use Filament\Tables;

class Dashboard extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    public $cardModal = false;
    public $indigency_modal = false;
    public $business_modal = false;
    public $requestor_data = [];

    protected function getTableQuery(): Builder
    {
        return RequestCertificate::query()->where('status', '!=', 'archived')->orderBy('created_at', 'DESC');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('user.name')->label('CERTIFICATE')->searchable()->formatStateUsing(
                function ($record) {
                    return strtoupper($record->user->name);
                }
            ),
            TextColumn::make('certificate.name')->label('CERTIFICATE')->searchable(),
            TextColumn::make('purpose')->label('PURPOSE')->searchable(),
            TextColumn::make('created_at')->label('REQUEST DATE')->date()->searchable(),
            BadgeColumn::make('status')->label('STATUS')->searchable()
                ->enum([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'declined' => 'Declined',
                ])->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'declined'
                    ])
        ];
    }
    protected function getTableActions(): array
    {
        return [
            Action::make('approved')->button()->color('success')->icon('heroicon-o-thumb-up')->visible(
                function ($record) {
                    return $record->status == 'pending';
                }
            )->action(
                    function ($record) {
                        $record->update([
                            'status' => 'approved',
                        ]);
                    }
                ),
            Action::make('disapproved')->button()->color('danger')->icon('heroicon-o-thumb-down')->visible(
                function ($record) {
                    return $record->status == 'pending';
                }
            )->action(
                    function ($record) {
                        $record->update([
                            'status' => 'approved',
                        ]);
                    }
                ),
            Action::make('view')->button()->color('warning')->icon('heroicon-o-eye')->visible(
                function ($record) {
                    return $record->status != 'pending';
                }
            )->action(function ($record) {
                if ($record->certificate->name == 'Barangay Clearance') {
                    return $this->cardModal = true;
                } elseif ($record->certificate->name == 'Certificate of Indigency') {
                    return $this->indigency_modal = true;
                } else {
                    return $this->business_modal = true;
                }
                // $this->requestor_data = $record;
                // if ($record->certificate_id == 1) {
                //     return $this->cardModal = true;
                // } else {
                //     return $this->indigency_modal = true;
                // }
            }),

            Action::make('archive')->button()->color('gray')->icon('heroicon-o-archive')->action(
                function ($record) {
                    $record->update([
                        'status' => 'archived',
                    ]);
                    sweetalert()->addSuccess('Moved to Archive');
                }
            ),

        ];
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
