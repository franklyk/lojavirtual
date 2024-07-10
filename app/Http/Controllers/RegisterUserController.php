<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\EmailConfirmation;


class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
        
    }
    public function store(Request $request)
    {
        $user = $request->email;

        $user->notify(new EmailConfirmation());
    }
}