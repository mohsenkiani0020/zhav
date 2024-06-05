<?php

namespace App\Livewire\HomePage;

use App\Models\Article;
use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HomePage extends Component
{
    #[Validate('required|min:8')]
    public $email_phone;

    #[Validate('prohibited')]
    public $name;

    public $article=[];

    /**
     * @return void
     */
    public function mount():void
    {
        $this->article = Article::latest()->limit(4)->get();
    }

    /**
     * @return void
     */
    public function submitForm():void
    {
        $this->validate();
        Contact::create([
            'email_phone' => $this->email_phone
        ]);
        session()->flash('success', 'پیغام شما دریافت شد کارشناسان ما در اولین فرصت با شما تماس خواهند گرفت');
        $this->reset(['email_phone']);
    }

    /**
     * @return mixed
     */
    public function render(): mixed
    {
        return view('livewire.home-page.home-page')->extends('layout.layout')->section('content');
    }
}
