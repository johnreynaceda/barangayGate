<?php

namespace App\Http\Livewire\Resident;

use App\Http\Livewire\Admin\ResidentList;
use App\Models\Certificate;
use Livewire\Component;
use App\Models\User;
use Filament\Tables;
use App\Models\RequestCertificate as requestModel;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;


class RequestCertificate extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return requestModel::query()->where('user_id', auth()->user()->id);
    }
    protected function getTableHeaderActions()
    {
        return [
            Action::make('new_residents')->label('Add Request')->button()->icon('heroicon-o-plus')->size('md')->action(
                function ($record, $data) {
                    requestModel::create([
                        'certificate_id' => $data['certificate_id'],
                        'purpose' => $data['purpose'],
                        'user_id' => auth()->user()->id,
                    ]);
                    sweetalert()->addSuccess('Request Added');
                }
            )->form(
                    [
                        Fieldset::make('REQUEST FORM')
                            ->schema([
                                Select::make('certificate_id')->label('Select Certificate')->options(Certificate::pluck('name', 'id')),
                                TextInput::make('purpose')->required(),
                            ])

                            ->columns(1)
                    ]
                )->modalWidth('2xl')
        ];
    }

    protected function getTableColumns(): array
    {
        return [

            TextColumn::make('certificate.name')->label('CERTIFICATE')->searchable(),
            TextColumn::make('purpose')->label('PURPOSE')->searchable(),
            TextColumn::make('created_at')->label('REQUEST DATE')->date()->searchable(),


        ];
    }


    public function render()
    {
        return view('livewire.resident.request-certificate');
    }
}