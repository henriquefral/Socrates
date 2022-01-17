<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function register () {
        return Inertia::render('Registration');
    }

    public function store (Request $user) 
    {
        $user->validate([
            'name' => ['required'],
            'cpf' => ['required', 'min:11', 'max:11'],
            'birthday' => ['required'],
            'occupation' => ['required'],
            'email' => ['required', 'min:5'],
            'password' => ['required','min:3'],

        ]);
        
        User::create([
            'experience' => 1,
            'name' => $user->name,
            'cpf' => $user->cpf,
            'birth_date' => $user->birthday,
            'occupation' => $user->occupation,
            'email'=> $user->email,
            'password'=> bcrypt($user->password),
            'level_id' => 1,
        ]);

        dd($user->all());
    }    
}
