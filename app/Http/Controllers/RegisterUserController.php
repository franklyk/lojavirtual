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
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    use Notifiable;

    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        $userAttributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $imgAttributes = $request->validate([
            'img_user' => ['nullable', 'mimes:jpg,jpeg,png,bmp,gif,svg,webp'],
        ]);

        try {
            $user = User::create($userAttributes);

            Auth::login($user);

            if (!empty($imgAttributes)) {

                $img_user_path = $request->file('img_user')->storePublicly('user');
            } else {

                $img_user_path = 'user.png';
            }

            $user->userImage()->create(['img_user' => $img_user_path]);

            event(new Registered($user));

            return redirect('/email/verify');

        } catch (Exception $err) {

            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Encontrei o BUG!!');
        }
    }
}
