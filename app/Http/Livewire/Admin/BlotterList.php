<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blotter;
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

class BlotterList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Blotter::query();
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('new_residents')->label('Add Blotter')->button()->icon('heroicon-o-plus')->size('md')->action(
                function ($record, $data) {
                    Blotter::create([
                        'resident_id' => $data['resident_id'],
                        'case' => $data['case'],
                    ]);
                    sweetalert()->addSuccess('Blotter Added');
                }
            )->form(
                    [
                        Fieldset::make('BLOTTER INFORMATION')
                            ->schema([

                                Select::make('resident_id')->label('Resident')->required()
                                    ->options(Resident::all()->mapWithKeys(function ($record) {
                                        return [$record->id => $record->firstname . ' ' . $record->lastname];
                                    }))->searchable(),
                                TextInput::make('case')->required(),

                            ])
                            ->columns(1)
                    ]
                )->modalWidth('3xl')
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('fullname')->label('FULLNAME')->formatStateUsing(function ($record) {
                return $record->resident->firstname . ' ' . $record->resident->lastname;
            })->searchable(['firstname', 'lastname']),
            TextColumn::make('case')->label('CASE')->searchable(),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->color('success')->icon('heroicon-o-pencil-alt')->action(
                function ($record, $data) {
                    $record->update([
                        'resident_id' => $data['resident_id'],
                        'case' => $data['case'],
                    ]);
                    sweetalert()->addSuccess('Blotter Updated');
                }
            )->form(
                    [
                        Fieldset::make('BLOTTER INFORMATION')
                            ->schema([

                                Select::make('resident_id')->label('Resident')->required()
                                    ->options(Resident::all()->mapWithKeys(function ($record) {
                                        return [$record->id => $record->firstname . ' ' . $record->lastname];
                                    }))->searchable(),
                                TextInput::make('case')->required(),

                            ])
                            ->columns(1),
                    ]
                )->modalWidth('3xl')->modalHeading('Update Blotter Information'),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.blotter-list');
    }
}