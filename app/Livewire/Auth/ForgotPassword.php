<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\ResetPassword;
use Illuminate\Support\Facades\Http;
use Laravel\Fortify\Fortify;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Validate('required|email|exists:App\Models\User,email')]
    public $email;

    public function verify()
    {
        $this->validate();

        // Get the CSRF token
        $token = csrf_token();
        // Make a request to the PasswordResetLinkController@store endpoint
        $response = Http::withHeaders([
            'X-CSRF-TOKEN' => $token,
        ])->post(route('password.email'), [
            'email' => $this->email,
        ]);
        dd($response);
        // Check if the response is successful and contains the expected keys
        if ($response->successful() && isset($response['status'])) {
            session()->flash('status', $response['status']);
        } elseif (!$response->successful() && isset($response['message'])) {
            $this->addError('email', $response['message']);
        } else {
            // Handle unexpected response format or missing keys
            $this->addError('email', 'Unexpected response format or missing keys.');
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->extends('layout.layout')->section('content');
    }
}
