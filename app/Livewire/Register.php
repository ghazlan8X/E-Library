<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function register(){
        $this->validate([
            'name'      => 'required|string|min:5',
            'email'     => 'required|email|min:8|max:50|unique:users',
            'password'  => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.register');
    }
}
