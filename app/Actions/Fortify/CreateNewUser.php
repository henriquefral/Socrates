<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'cpf' =>['required','string','max:14','min:11'], 
            'birthday' =>  ['required','date','max:10','min:10'],
            'occupation' => ['required','string'],
        ])->validate();

        return User::create([
            'experience' => 1,
            'level_id' => 1,
            'name' => $input['name'],
            'cpf' => $input['cpf'],
            'birth_date' => $input['birthday'],
            'occupation' => $input['occupation'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
