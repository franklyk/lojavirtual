<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notifiable;

class RegisterUserController extends Controller
{
    use Notifiable;

    public function create()
    {
        return view('auth.register');
    }
    public function store(RegisterUserRequest $request)
    {
        $request->validated();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            
            event(new Registered($user));

            return redirect('/email/verify');
            
        } catch (Exception $err) {
            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Não foi possível efetuar o cadastro!!');
        }
    }
    
}
