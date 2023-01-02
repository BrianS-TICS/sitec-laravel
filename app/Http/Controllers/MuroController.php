<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()) {
            return view('muro');
        } else {
            return redirect()->route('/');
        }
    }
}
