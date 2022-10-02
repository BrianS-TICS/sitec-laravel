<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("registro");
    }

    public function store(Request $request){
        $this->validate($request,[
            'numero_control' => 'required|min:8|max:10',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5'
        ]);


    }
}
