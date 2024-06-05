<?php

namespace App\Actions\Fortify;

use App\Events\RegistrationEvent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Livewire\Livewire;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     */
    public function create(array $input): void
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password'   => $this->passwordRules(),
        ])->validate();

         $user = User::create([
            'first_name'               => $input['first_name'],
            'last_name'                => $input['last_name'],
            'email'                    => $input['email'],
            'password'                 => Hash::make($input['password']),
            'verification_code'        => rand(100000, 999999),
            'verification_code_expire' => Carbon::now()->addHour(3)
        ]);

        $user->addRole('user');
        auth()->login($user);

    }
}
