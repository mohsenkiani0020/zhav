<?php

namespace App\Livewire\Panels\Manager;

use Livewire\Component;

class ManagerPanel extends Component
{
    public function render()
    {
        return view('livewire.panels.manager.manager-panel')->extends('layout.layout-panel')->section('content');
    }
}
