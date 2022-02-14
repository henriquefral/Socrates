<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function register () {
        return Inertia::render('Registration');
    }
    public function login () {
        return Inertia::render('Login');
    }
    public function dashboard () {
        return Inertia::render('Dashboard');
    }
    public function update (Request $request) 
    {
        $id = auth()->id();
        $user = User::find($id);
        $user->update($request->all());
        return response()->json("Nota atualizada.");
    }
    public function destroy () 
    {
        $id = auth()->id();
        $user = User::find($id);
        $user->delete();
        return response()->json("Nota deletada.");
    }
}
