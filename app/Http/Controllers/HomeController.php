<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\CountValidator\AtLeast;

class HomeController extends Controller
{

    public function __invoke()
    {
        
        $user = Auth::user();
        // dd($user);

        $banner = Banner::all('id','img_background','img_banner','title','description');
        // dd($banner);

        return view('home', ['user' => $user], ['banners' => $banner]);
    }

   
}
