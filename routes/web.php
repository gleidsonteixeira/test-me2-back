<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SiteController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MotoristaController;
use App\Http\Controllers\Admin\CarroController;


Route::fallback(function () {
    return view("site.404");
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->to("entrar");
});

Route::get('/login', function(){ 
    return redirect()->to("entrar");
});

Route::get('/', function(){
    return redirect()->to("entrar");
});

Route::get('/entrar', [SiteController::class, 'entrar'])->name("entrar");
Route::post('/logar', [SiteController::class, 'logar']);

/* ROTAS DO ADMIN */
Route::middleware(['cors'])->group(function(){
    // MOTORISTA
    Route::get('/motoristas', [MotoristaController::class, 'list']);
    Route::get('/motorista/{id}', [MotoristaController::class, 'show']);
    Route::post('/motorista', [MotoristaController::class, 'store']);
    Route::post('/motorista/{id}', [MotoristaController::class, 'update']);
    Route::delete('/motorista/{id}', [MotoristaController::class, 'destroy']);
    // CARRO
    Route::get('/carros', [CarroController::class, 'list']);
    Route::get('/carro/{id}', [CarroController::class, 'show']);
    Route::post('/carro', [CarroController::class, 'store']);
    Route::post('/carro/{id}', [CarroController::class, 'update']);
    Route::delete('/carro/{id}', [CarroController::class, 'destroy']);
});

require __DIR__.'/auth.php';
