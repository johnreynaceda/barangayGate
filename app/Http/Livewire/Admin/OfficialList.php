<?php

namespace App\Http\Livewire\Admin;

use App\Models\Official;
use App\Models\User;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class OfficialList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Official::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('fullname')->label('FULLNAME')->formatStateUsing(function ($record) {
                return $record->firstname . ' ' . $record->lastname;
            })->searchable(['firstname', 'lastname']),
            TextColumn::make('purok')->label('PUROK')->searchable(),
            TextColumn::make('position')->label('POSITION')->searchable(),

        ];
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('new_official')->label('Add Officials')->button()->icon('heroicon-o-plus')->size('md')->action(
                function ($record, $data) {
                    Official::create([
                        'firstname' => $data['firstname'],
                        'middlename' => $data['middlename'],
                        'lastname' => $data['lastname'],
                        'purok' => $data['purok'],
                        'position' => $data['position'],
                    ]);
                    sweetalert()->addSuccess('Department Added');
                }
            )->form(
                    [
                        Fieldset::make('OFFICIAL INFORMATION')
                            ->schema([
                                TextInput::make('firstname')->required(),
                                TextInput::make('middlename')->required(),
                                TextInput::make('lastname')->required(),
                                TextInput::make('purok')->required(),
                                Select::make('position')
                                    ->options([
                                        'Punong Barangay' => 'Punong Barangay',
                                        'Sangguniang Barangay Members' => 'Sangguniang Barangay Members',
                                        'Chairman of the Sangguniang Kabataan' => 'Chairman of the Sangguniang Kabataan',
                                    ])

                            ])
                            ->columns(3)
                    ]
                )->modalWidth('3xl')
        ];
    }
    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->color('success')->icon('heroicon-o-pencil-alt')->action(
                function ($record, $data) {
                    $record->update([
                        'name' => $data['name'],
                        'description' => $data['description'],
                    ]);
                    sweetalert()->addSuccess('Department Updated');
                }
            )->form(
                    [
                        Fieldset::make('OFFICIAL INFORMATION')
                            ->schema([
                                TextInput::make('firstname')->required(),
                                TextInput::make('middlename')->required(),
                                TextInput::make('lastname')->required(),
                                TextInput::make('purok')->required(),
                                Select::make('position')
                                    ->options([
                                        'Punong Barangay' => 'Punong Barangay',
                                        'Sangguniang Barangay Members' => 'Sangguniang Barangay Members',
                                        'Chairman of the Sangguniang Kabataan' => 'Chairman of the Sangguniang Kabataan',
                                    ])

                            ])
                            ->columns(3)
                    ]
                )->modalWidth('2xl'),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.official-list');
    }
}