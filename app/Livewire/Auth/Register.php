<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\CreateNewUser;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|min:3|string')]
    public $first_name;

    #[Validate('required|min:3|string')]
    public $last_name;

    #[Validate('required|email|string|unique:App\Models\User,email')]
    public $email;

    #[Validate('required|min:8|string')]
    public $password;

    #[Validate('required|string|same:password')]
    public $password_confirmation;

    #[Validate('prohibited')]
    public $name;

    /**
     * @var CreateNewUser
     */
    protected $createNewUserAction;

    /**
     * Register constructor.
     *
     * @param CreateNewUser|null $createNewUserAction
     */
    public function __construct(CreateNewUser $createNewUserAction = null)
    {
        $this->createNewUserAction = $createNewUserAction?: app(CreateNewUser::class);
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->validate();

        app()->call([$this->createNewUserAction, 'create'], [
            'input' => [
                'first_name'            => $this->first_name,
                'last_name'             => $this->last_name,
                'email'                 => $this->email,
                'password'              => $this->password,
                'password_confirmation' => $this->password_confirmation
            ],
        ]);

        $this->redirect('login', navigate: true);
    }


    /**
     * @return mixed
     */
    public function render(): mixed
    {
        return view('livewire.auth.register')->extends('layout.layout')->section('content');
    }
}
