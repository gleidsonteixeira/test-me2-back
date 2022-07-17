<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ModMotorista;

class MotoristaController extends Controller
{

    public function index()
    {}

    public function show($id)
    {
        $motorista = ModMotorista::find($id);
        if($motorista) {
            return response()->json([
                "motorista" => $motorista
            ], 200);
        }else{
            return response()->json(["message" => "Registro não encontrado"], 200);
        }
    }

    public function list()
    {
        $motoristas = ModMotorista::with("carro")->get();
        if(count($motoristas) > 0) {
            return response()->json($motoristas, 200);
        }else{
            return response()->json(["message" => "Nenhum registro encontrado"], 200);
        }
    }

    public function store(Request $request)
    {
        $motorista = new ModMotorista();
        $motorista->fill($request->all());
        if($motorista->save()){
            return response()->json($motorista, 200);
        }else{
            return response()->json(["message" => "Falha em criar registro"], 200);
        }
    }

    public function update(Request $request, $id)
    {
        $motorista = ModMotorista::find($id);
        $motorista->fill($request->all());
        $motorista->save();
        if($motorista->save()){
            return response()->json($motorista, 200);
        }else{
            return response()->json(["message" => "Falha em atualizar o registro"], 200);
        }
    }

    public function destroy($id)
    {
        $motorista = ModMotorista::find($id);
        if($motorista){
            ModMotorista::destroy($id);
            return response()->json(["message" => "Registro removido"], 200);
        }else{
            return response()->json(["message" => "Registro não encontrado"], 200);
        }
    }

}
