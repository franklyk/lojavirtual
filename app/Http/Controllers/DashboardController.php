<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // dd('Carregou!');
        return view('dashboard');
        
    }
}
