<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resident;
use Livewire\Component;
use App\Models\User;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ResidentList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Resident::query();
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('new_residents')->label('Add Residents')->button()->icon('heroicon-o-plus')->size('md')->action(
                function ($record, $data) {
                    Resident::create([
                        'firstname' => $data['firstname'],
                        'middlename' => $data['middlename'],
                        'lastname' => $data['lastname'],
                        'age' => $data['age'],
                        'purok' => $data['purok'],
                        'gender' => $data['gender'],
                        'status' => $data['status'],
                    ]);
                    sweetalert()->addSuccess('Residents Added');
                }
            )->form(
                    [
                        Fieldset::make('RESIDENTS INFORMATION')
                            ->schema([
                                TextInput::make('firstname')->required(),
                                TextInput::make('middlename')->required(),
                                TextInput::make('lastname')->required(),
                                TextInput::make('purok')->required(),
                                Select::make('gender')->required()
                                    ->options([
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                    ]),
                                TextInput::make('age')->required(),
                                TextInput::make('status')->required(),
                            ])
                            ->columns(3)
                    ]
                )->modalWidth('3xl')
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('fullname')->label('FULLNAME')->formatStateUsing(function ($record) {
                return $record->firstname . ' ' . $record->lastname;
            })->searchable(['firstname', 'lastname']),
            TextColumn::make('purok')->label('PUROK')->searchable(),
            TextColumn::make('gender')->label('GENDER')->searchable(),
            TextColumn::make('age')->label('AGE')->searchable(),
            TextColumn::make('status')->label('STATUS')->searchable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->color('success')->icon('heroicon-o-pencil-alt')->action(
                function ($record, $data) {
                    $record->update([
                        'firstname' => $data['firstname'],
                        'middlename' => $data['middlename'],
                        'lastname' => $data['lastname'],
                        'age' => $data['age'],
                        'purok' => $data['purok'],
                        'gender' => $data['gender'],
                        'status' => $data['status'],
                    ]);
                    sweetalert()->addSuccess('Resident Updated');
                }
            )->form(
                    [
                        Fieldset::make('RESIDENTS INFORMATION')
                            ->schema([
                                TextInput::make('firstname')->required(),
                                TextInput::make('middlename')->required(),
                                TextInput::make('lastname')->required(),
                                TextInput::make('purok')->required(),
                                Select::make('gender')->required()
                                    ->options([
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                    ]),
                                TextInput::make('age')->required(),
                                TextInput::make('status')->required(),
                            ])
                            ->columns(3)
                    ]
                )->modalWidth('3xl')->modalHeading('Update Resident'),
            Tables\Actions\DeleteAction::make(),
        ];
    }
    public function render()
    {
        return view('livewire.admin.resident-list');
    }
}