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
Route::prefix('admin')->group(function(){
    // ADMIN
    Route::get('/', [AdminController::class, 'index']);
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

/* ROTAS DO DASHBOARD */
Route::middleware(['auth'])->group(function(){
    Route::prefix('dashboard')->group(function(){
        // DASHBOARD
        Route::get('/', [DashboardController::class, 'index'])->name("dashboard");
        Route::get('/tutorial-completo', [DashboardController::class, 'tutorial']);
        //MODULOS
        //- ORDEM
        Route::get('/ordem/carregar', [OrdemController::class, 'load']);
        Route::post('/ordem/{id}', [OrdemController::class, 'update']);
        //- PERFIL
        Route::get('/perfis/carregar', [PerfilController::class, 'load']);
        Route::get('/perfis/{id}', [PerfilController::class, 'show']);
        Route::post('/perfis', [PerfilController::class, 'store']);
        Route::post('/perfis/{id}', [PerfilController::class, 'update']);
        //- LINK
        Route::get('/links/{id}', [LinkController::class, 'show']);
        Route::post('/links', [LinkController::class, 'store']);
        Route::post('/links/{id}', [LinkController::class, 'update']);
        Route::delete('/links/{id}', [LinkController::class, 'destroy']);
        //- FAQ
        Route::get('/faqs/{id}', [FaqController::class, 'show']);
        Route::post('/faqs', [FaqController::class, 'store']);
        Route::post('/faqs/{id}', [FaqController::class, 'update']);
        Route::delete('/faqs/{id}', [FaqController::class, 'destroy']);
        //- VÍDEO
        Route::get('/videos/{id}', [VideoController::class, 'show']);
        Route::post('/videos', [VideoController::class, 'store']);
        Route::post('/videos/{id}', [VideoController::class, 'update']);
        Route::delete('/videos/{id}', [VideoController::class, 'destroy']);
        //- REDE
        Route::get('/rede/{id}', [RedeController::class, 'show']);
        Route::post('/rede', [RedeController::class, 'store']);
        Route::post('/rede/{id}', [RedeController::class, 'update']);

    });
});

require __DIR__.'/auth.php';
