<?php

namespace App\Http\Controllers;

use App\Models\UserImage;
use App\Http\Requests\StoreUserImageRequest;
use App\Http\Requests\UpdateUserImageRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;

class UserImageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserImage $userImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editImage(UserImage $userImage, User $user)
    {
        
        $img_user = $userImage::find($user->id);
        $user = User::find($user->id);
        // dd($user);

        return view('user.edit-image',['img_user' => $img_user, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateImage(UpdateUserImageRequest $request, UserImage $userImage)
    {
        $request->validated();

        $data = $request->all();

        // try {

        //     $old_data = User::find($request->id);

        //     $directory  = 'images/users/' . $old_data->id;

        //     if (!file_exists($directory) && (!is_dir($directory))) {

        //         mkdir($directory);

        //         if (!file_exists($directory) && (!is_dir($directory))) {

        //             return back()->with('error', 'Falha ao criar diretório!');
        //         }
        //     }

        //     if (file_exists($directory . '/' . $old_data['img_user'])) {

        //         unlink($directory . '/' . $old_data['img_user']);
        //     }

        //     if ($request->hasFile('img_user') && ($request->file('img_user')->isValid())) {
        //         $img_user = $request->file('img_user')->hashName();
        //     } else {
        //         $img_user = $old_data['img_user'];
        //     }

        //     $data['img_user'] = $img_user;

        //     $user = User::findOrFail($request->id)->update($data);

        //     move_uploaded_file($request->img_user, $directory . '/' . $data['img_user']);

        //     return redirect()->route('user.show', ['user' => $user])->with('success', 'Usuário atualizado com sucesso!');
        // } catch (Exception $err) {
        //     Log::info(['error' => $err->getMessage()]);

        //     return back()->with('error', 'Não foi possível atualizar!');
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserImage $userImage)
    {
        //
    }
}
