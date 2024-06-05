<?php

namespace App\Livewire\AboutUs;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.about-us.about-us')->extends("layout.layout")->section("content");
    }
}
