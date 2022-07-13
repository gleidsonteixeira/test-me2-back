<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ModCarro;

class CarroController extends Controller
{

    public function index()
    {}

    public function show($id)
    {
        $carro = ModCarro::find($id);
        if($carro) {
            return response()->json([$carro], 200);
        }else{
            return response()->json(["message" => "Registro não encontrado"], 200);
        }
    }

    public function list()
    {
        $carros = ModCarro::with("motorista")->get();
        if(count($carros) > 0) {
            return response()->json([$carros], 200);
        }else{
            return response()->json(["message" => "Nenhum registro encontrado"], 200);
        }
    }

    public function store(Request $request)
    {
        $carro = new ModCarro();
        $carro->fill($request->all());
        if($carro->save()){
            return response()->json([$carro], 200);
        }else{
            return response()->json(["message" => "Falha em criar registro"], 200);
        }
    }

    public function update(Request $request, $id)
    {
        $carro = ModCarro::find($id);
        $carro->fill($request->all());
        $carro->save();
        if($carro->save()){
            return response()->json([$carro], 200);
        }else{
            return response()->json(["message" => "Falha em atualizar o registro"], 200);
        }
    }

    public function destroy($id)
    {
        $carro = ModCarro::find($id);
        if($carro){
            ModCarro::destroy($id);
            return response()->json(["message" => "Registro removido"], 200);
        }else{
            return response()->json(["message" => "Registro não encontrado"], 200);
        }
    }

}
