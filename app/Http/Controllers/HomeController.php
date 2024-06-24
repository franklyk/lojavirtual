<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\AtLeast;

class HomeController extends Controller
{

    public function index()
    {

        $user = Auth::user();
        // dd($user);
        $banner = Banner::all('id','img_background','img_banner','title','description');


        return view('home', ['banners' => $banner], ['user' => $user]);
    }

    public function layout()
    {
        $user = Auth::user();
        // dd($user);
        return view('components.layout', ['user' => $user]);
    }
}
