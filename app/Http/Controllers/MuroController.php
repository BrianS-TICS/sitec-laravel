<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuroController extends Controller
{
    public function index(){
        return view("muro");
    }
}
