<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRegister;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(PostRegister $request)
    {
        User::create($request->validated());
    }
}
