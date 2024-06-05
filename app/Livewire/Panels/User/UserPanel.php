<?php

namespace App\Livewire\Panels\User;

use Livewire\Component;

class UserPanel extends Component
{
    public function render()
    {
        return view('livewire.panels.user.user-panel')->extends('layout.layout-panel')->section('content');
    }
}
