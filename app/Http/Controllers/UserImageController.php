<?php

namespace App\Http\Controllers;

use App\Models\UserImage;
use App\Http\Requests\StoreUserImageRequest;
use App\Http\Requests\UpdateUserImageRequest;

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
    public function editImage(UserImage $userImage)
    {
        return view('user.edit-image');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserImageRequest $request, UserImage $userImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserImage $userImage)
    {
        //
    }
}
