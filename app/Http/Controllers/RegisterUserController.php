<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUserRegister;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestUserRegister $request)
    {
        $request->validated();

        // dd($request);
        try {

            $directory =  'images/users';

            if (!file_exists($directory) && (!is_dir($directory))) {

                mkdir($directory);

                if (!file_exists($directory) && (!is_dir($directory))) {

                    return back()->with('error', 'Falha ao criar diretório!');
                }
            }

            if ($request->hasFile('img_user') && ($request->file('img_user')->isValid())) {

                $img_user = $request->file('img_user')->hashName();

            }

            $user = User::create([
                'img_user' => $img_user,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => $request->password,
            ]);

            move_uploaded_file($request->img_user, $directory . '/' . $img_user);

            Auth::login($user);

            return redirect('/')->with('success', 'Cadastrado Com Sucesso!');

        } catch (Exception $err) {
            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Cadastro Falhou!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
