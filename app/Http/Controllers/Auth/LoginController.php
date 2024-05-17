<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(PostLogin $request){
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();
            session()->flash('message', 'Bienvenue de retour, ' . $user->name);
            return redirect()->route('welcome');
        }
        return redirect()->back()->withErrors(['message' => 'Identifiants invalides. Veuillez réessayer']);
    }
}
