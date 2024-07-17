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
use Illuminate\Support\Facades\Storage;
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

        try {
            $user = User::create($userAttributes);
            if ($user) {

                Auth::login($user);
                if (Auth::user()->id) {

                    if ($request->hasFile('img_user') && ($request->file('img_user')->isValid())) {
                        $img_user = $request->file('img_user')->hashName();
                    }

                    $user->userImage()->create([
                        'img_user' => $img_user,
                    ]);

                    $directory =  'images/users/' . Auth::user()->id;

                    if (!file_exists($directory) && (!is_dir($directory))) {
                        mkdir($directory);
                        if (!file_exists($directory) && (!is_dir($directory))) {
                            return back()->with('error', 'Não foi possível criar o diretório"');
                        }
                    }
                    move_uploaded_file($request->img_user, $directory . '/' . $img_user);

                    event(new Registered($user));
                    return redirect('/email/verify');
                }
            } else {
                return back()->with(['error' => 'Não foi possivel fazer a conexão!']);
            }
        } catch (Exception $err) {

            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Não foi possível efetuar o cadastro!!');
        }
    }
}
