<?php

namespace App\Livewire\Panels\Admin;

use Livewire\Component;

class AdminPanel extends Component
{
    public function render()
    {
        return view('livewire.panels.admin.admin-panel')->extends('layout.layout-panel')->section('content');
    }
}
