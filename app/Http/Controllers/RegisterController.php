<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view("registro");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_control' => 'required|min:8|max:10',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5'
        ]);

        User::create([
            "numero_control" => $request->numero_control,
            "password" => Hash::make($request->password)
        ]);

        auth()->attempt($request->only("numero_control", "password"));

        return redirect()->route("muro.index", auth()->user()->numero_control);
    }
}
