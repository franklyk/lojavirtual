<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Directory;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
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
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {


        $request->validated();

        try {

            $directory =  'images/banners';

            if (!file_exists($directory) && (!is_dir($directory))) {

                mkdir($directory);

                if (!file_exists($directory) && (!is_dir($directory))) {

                    return back()->with('error', 'Falha ao criar diretório!');
                }
            }

            if ($request->hasFile('img_background') && ($request->file('img_background')->isValid())) {

                $img_background = $request->file('img_background')->hashName();

                move_uploaded_file($request->img_background, $directory . '/' . $img_background);

            }
            if ($request->hasFile('img_banner') && ($request->file('img_banner')->isValid())) {

                $img_banner = $request->file('img_banner')->hashName();

                move_uploaded_file($request->img_banner, $directory . '/' . $img_banner);

            }

            Banner::create([
                'img_background' => $img_background,
                'img_banner' => $img_banner,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect('/')->with('success', 'Cadastrado Com Sucesso!');
        } catch (Exception $err) {
            Log::info(['error' => $err->getMessage()]);

            return back()->with('error', 'Cadastrado Falhou!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        // $img_background = imagecreatefromjpeg('images/banners/'.$banner->img_background);

        // dd($banner);

        return view('banners.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $request->validated();

        $banner->update($request->all());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
