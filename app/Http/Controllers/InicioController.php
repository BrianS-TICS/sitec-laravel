<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        if(auth()->user()){
            return view('muro');
        }
        else{
            return view('inicio');
        }

    }
}
