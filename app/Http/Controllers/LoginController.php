<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_control' => 'required|min:8|max:10',
            'password' => 'required|min:5'
        ]);

        if (!auth()->attempt($request->only('numero_control', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('muro.index', auth()->user()->numero_control);
    }

    public function index()
    {
        if (!auth()->user()) {
            return view("inicio");
        } else {
            return redirect()->route('muro.index', auth()->user()->numero_control);
        }
    }
}
