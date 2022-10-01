<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'numero_control' => 'required|min:8|max:10',
            'password' => 'required|min:5'
        ]);

        // Autenticacion
        auth()->attempt([
            'numero_control' => $request->numero_control,
            'password' => $request->password
        ]);

        return redirect()->route('post.index');
    }

}
