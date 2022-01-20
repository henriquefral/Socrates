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
    public function login () {
        return Inertia::render('Login');
    }
    public function home () {
        return Inertia::render('Home');
    }    
}
