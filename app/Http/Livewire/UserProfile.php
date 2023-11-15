<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class UserProfile extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $attachment, $name, $email;

    protected function getFormSchema(): array
    {
        return [
            FileUpload::make('attachment')->label('Profile'),
            TextInput::make('name')->placeholder(auth()->user()->name),
            TextInput::make('email')->placeholder(auth()->user()->email)
        ];
    }

    public function render()
    {
        return view('livewire.user-profile');
    }

    public function save()
    {
        if ($this->attachment != null) {
            foreach ($this->attachment as $key => $value) {
                auth()->user()->update([
                    'name' => $this->name != null ? $this->name : auth()->user()->name,
                    'email' => $this->email != null ? $this->email : auth()->user()->email,
                    'profile_path' => $value->store('Profile', 'public'),
                ]);
            }
        } else {
            auth()->user()->update([
                'name' => $this->name != null ? $this->name : auth()->user()->name,
                'email' => $this->email != null ? $this->email : auth()->user()->email,
            ]);
        }
        sweetalert()->addSuccess('Profile Updated');
        return redirect()->route('dashboard');

    }
}
