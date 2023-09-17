<?php

namespace App\Http\Livewire\Admin;

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
    public $requestor_data = [];

    protected function getTableQuery(): Builder
    {
        return RequestCertificate::query()->orderBy('created_at', 'DESC');
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
            TextColumn::make('status')->label('STATUS')->searchable(),
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
                $this->requestor_data = $record;
                if ($record->certificate_id == 1) {
                    $this->cardModal = true;
                } else {
                    $this->indigency_modal = true;
                }
            }),

        ];
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}