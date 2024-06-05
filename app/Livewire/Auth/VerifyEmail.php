<?php

namespace App\Livewire\Auth;

use App\Events\MembershipEvent;
use App\Events\ResendVerificationCodeEvent;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class VerifyEmail extends Component
{
    #[Validate('required|numeric|min:6')]
    public $verification_code;

    /**
     * @return void
     */
    public function nextStep(): void
    {
        if ((!auth()->user()->email_verified_at) && (Carbon::now() <= auth()->user()->verification_code_expire)) {
            if (auth()->user()->verification_code === $this->verification_code) {
                auth()->user()->update([
                    'email_verified_at' => Carbon::now()
                ]);
                MembershipEvent::dispatch(auth()->user());
            }
            $this->redirect('login', navigate: true);
        }else{
            $this->resendCode();
            $this->addError('Code Expire', 'Your Verification code has been expired, so a new code has been just sent to you. Please check your email');
        }

    }

    /**
     * @return void
     */
    public function resendCode(): void
    {
        if (!auth()->user()->email_verified_at){
            auth()->user()->update([
                "verification_code" =>  rand(100000, 999999)
            ]);
            ResendVerificationCodeEvent::dispatch(auth()->user());
        }else{
            $this->addError('Email Verified', 'Your email has been verified');
        }
    }

    /**
     * @return mixed
     */
    public function render(): mixed
    {
        return view('livewire.auth.verify-email')->extends('layout.layout')->section('content');
    }
}
