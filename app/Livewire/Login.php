<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        // dd($this->all());
        if (Auth::attempt([
            'email'     => $this->email,
            'password'   => $this->password,
        ])) 
        {
            return redirect()->route('dashboard');
        }
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.login');
    }
}
