<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.index');
    }

    public function entrar()
    {
        return view("site.entrar");
    }

    public function logar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $status = Auth::user()->status;
            if($status == 4){
                Auth::logout();
                return response()->json([
                    'message' => "Usuário inativo",
                    'status' => 202
                ]);
            }else{
                return response()->json([
                    'message' => 'Redirecionando...',
                    'status' => 200,
                    'usuario' => Auth::user()
                ]);
            }
        }else{
            return response()->json([
                'message' => "Email ou senha incorreta",
                'status' => 202
            ]);
        }
    }
    
}
