<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\UserMiddleware;
use \App\Http\Controllers\CadastroUserController;

Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/login', [LoginController::class, 'formLogin'])->name('site.login');
Route::post('/login', [LoginController::class, 'logar'])->name('site.login');

Route::get('/cadastro', [CadastroUserController::class, 'formCadastro'])->name('site.formCadastro');
Route::post('/cadastro', [CadastroUserController::class, 'salvarCadastro'])->name('site.formCadastro');

Route::middleware([UserMiddleware::class])->prefix('/app')->group(function () {

    Route::get('/perfil', function () {
        return view('app.perfil');
    })->name('app.perfil');

    Route::get('/logout', [LoginController::class, 'logout'])->name('site.logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('site.logout');
});
