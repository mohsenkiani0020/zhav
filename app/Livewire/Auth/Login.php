<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email|exists:App\Models\User,email')]
    public $email;

    #[Validate('required', new Password)]
    public $password;

    /**
     * @return void
     */
    public function login(): void
    {
        $this->validate();

        $response = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if ($response) {
            $this->redirect('login', navigate: true);
        } else {
            $this->addError('email', __('auth.failed'));
        }
    }

    /**
     * @return mixed
     */
    public function render(): mixed
    {
        return view('livewire.auth.login')->extends('layout.layout')->section('content');
    }
}
