<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $banner = Banner::all('id','img_background','img_banner','title','description');

        // dd($banner);

        return view('home', ['banners' => $banner] );
    }
}
