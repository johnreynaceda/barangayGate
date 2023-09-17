<?php

namespace App\Http\Livewire;

use App\Models\Resident;
use Livewire\Component;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ResidentForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $firstname, $middlename, $lastname, $purok, $gender, $age;
    protected function getFormSchema(): array
    {
        return [
            Fieldset::make('COMPLETE RESIDENTS INFORMATION')
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
                ])
                ->columns(3)
        ];
    }
    public function render()
    {
        return view('livewire.resident-form');
    }

    public function submitForm()
    {
        $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'purok' => 'required',
            'gender' => 'required',
            'age' => 'required',
        ]);

        Resident::create([
            'user_id' => auth()->user()->id,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'purok' => $this->purok,
            'gender' => $this->gender,
            'age' => $this->age,
            'status' => 'pending'
        ]);

        return redirect()->route('resident.dashboard');
    }
}