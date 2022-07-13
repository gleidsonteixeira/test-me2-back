<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;

class UsuarioController extends Controller
{

    public function index()
    {

    }

    public function show($id)
    {
        $usuario = User::find($id)->perfil;
        if(!$usuario) {
            return null;
        }else{
            return response()->json($usuario);
        }
    }

}
