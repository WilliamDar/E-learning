<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRegister;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(PostRegister $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'about' =>'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'about' => $request->about,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, log the user in immediately after registration
        auth()->login($user);

        return redirect()->route('welcome')->with('success', 'Registration successful.');
    }
}
