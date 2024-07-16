<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(['id', 'name', 'email']);
        // dd($users);

        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileUserRequest $request, User $user)
    {
        $request->validated();

        $data = $request->all();

        try {

            $old_data = User::find($request->id);

            // dd($old_data->img_user);

            $directory  = 'images/users/' . $old_data->id;

            if (!file_exists($directory) && (!is_dir($directory))) {

                mkdir($directory);

                if (!file_exists($directory) && (!is_dir($directory))) {

                    return back()->with('error', 'Falha ao criar diretório!');
                }
            }

            if (file_exists($directory . '/' . $old_data['img_user'])) {

                unlink($directory . '/' . $old_data['img_user']);
            }

            if ($request->hasFile('img_user') && ($request->file('img_user')->isValid())) {
                $img_user = $request->file('img_user')->hashName();
            } else {
                $img_user = $old_data['img_user'];
            }

            $data['img_user'] = $img_user;

            $user = User::findOrFail($request->id)->update($data);

            move_uploaded_file($request->img_user, $directory . '/' . $data['img_user']);

            return redirect()->route('user.show', ['user' => $user])->with('success', 'Usuário atualizado com sucesso!');
        } catch (Exception $err) {
            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Não foi possível atualizar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
