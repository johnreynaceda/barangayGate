<?php

namespace App\Http\Livewire\Admin;

use App\Models\Certificate;
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

class CertificateList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
    public function render()
    {
        return view('livewire.admin.certificate-list');
    }

    protected function getTableQuery(): Builder
    {
        return Certificate::query();
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('new_residents')->label('Add Certificate')->button()->icon('heroicon-o-plus')->size('md')->action(
                function ($record, $data) {
                    Certificate::create([
                        'name' => $data['name'],
                    ]);
                    sweetalert()->addSuccess('Certificate Added');
                }
            )->form(
                    [
                        Fieldset::make('CERTIFICATE INFORMATION')
                            ->schema([
                                TextInput::make('name')->required(),
                            ])
                            ->columns(1)
                    ]
                )->modalWidth('3xl')
        ];
    }

    protected function getTableColumns(): array
    {
        return [

            TextColumn::make('name')->label('NAME')->searchable(),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->color('success')->icon('heroicon-o-pencil-alt')->action(
                function ($record, $data) {
                    $record->update([
                        'name' => $data['name'],
                    ]);
                    sweetalert()->addSuccess('Certificate Updated');
                }
            )->form(
                    [
                        Fieldset::make('CERTIFICATE INFORMATION')
                            ->schema([
                                TextInput::make('name')->required(),
                            ])
                            ->columns(1),
                    ]
                )->modalWidth('3xl')->modalHeading('Update Certificate Information'),
            Tables\Actions\DeleteAction::make(),
        ];
    }
}