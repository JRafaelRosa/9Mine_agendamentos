<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ListagemUsuarioController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/login', [LoginController::class, 'formLogin'])->name('site.login');
Route::post('/login', [LoginController::class, 'logar'])->name('site.login');
Route::get('/cadastro', [CadastroUserController::class, 'formCadastro'])->name('site.formCadastro');
Route::post('/cadastro', [CadastroUserController::class, 'salvarCadastro'])->name('site.formCadastro');
Route::get('/contato', [ContatoController::class, 'viewContato'])->name('site.contato');
Route::get('/agenda', [AgendaController::class, 'viewAgenda'])->name('site.agenda');
Route::get('/sobre-nos', [SobreNosController::class, 'viewSobreNos'])->name('site.sobreNos');
Route::get('/loja', [LojaController::class, 'viewLoja'])->name('site.loja');

Route::middleware([UserMiddleware::class])->prefix('/app')->group(function () {

    Route::get('/perfil', function () {
        return view('app.perfil');
    })->name('app.perfil');

    Route::get('/logout', [LoginController::class, 'logout'])->name('site.logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('site.logout');

    Route::get('listar-usuarios', [ListagemUsuarioController::class, 'viewListagemUsuario'])->name('app.listarUsuarios');

    Route::get('/editar-usuario/{id}', [UsuarioController::class, 'editar'])->name('app.editarUsuario');
    Route::post('/editar-usuario/{id}', [UsuarioController::class, 'atualizarPermissao'])->name('app.atualizarUsuario');

    Route::get('/excluir-usuario/{id}', [UsuarioController::class, 'excluir'])->name('app.excluir');
    Route::delete('/excluir-usuario/{id}', [UsuarioController::class, 'excluirUsuario'])->name('app.excluirUsuario');
});
