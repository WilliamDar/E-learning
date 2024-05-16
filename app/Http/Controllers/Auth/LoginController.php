<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(PostLogin $request){
        if(Auth::attempt([$request->only(['email', 'password'])])){
            return redirect()->route('dashboard')->with('success', 'Successfully login');
        }else{
            return redirect()->back()->with('error', 'Invalid input ');
        }
    }
}
