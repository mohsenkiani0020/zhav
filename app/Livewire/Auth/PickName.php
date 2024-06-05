<?php

namespace App\Livewire\Auth;

use App\Events\MembershipEvent;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PickName extends Component
{
    #[Validate('required|min:3|max:50|string')]
    public $first_name;

    #[Validate('required|min:3|max:50|string')]
    public $last_name;

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
    }

    /**
     * @return void
     */
    public function nextStep(): void
    {
        auth()->user()->update([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name
        ]);
        $this->redirect('verify-email', navigate: true);
        MembershipEvent::dispatch(auth()->user());
    }

    /**
     * @return mixed
     */
    public function render(): mixed
    {
        return view('livewire.auth.pick-name')->extends('layout.layout')->section('content');
    }
}
