<?php

use Illuminate\Support\Facades\Route;

//visualizar as páginas
Route::get('/', [EventosController::class, 'MostrarHome'])->name('home-adm');
Route::get('/cadastro-evento', [EventosController::class, 'MostrarCadastroEvento'])->name('mostrar-cadastra-evento');
Route::get('/lista-evento', [EventosController::class, 'MostrarEventoNome'])->name('lista-evento');
Route::get('/altera-evento', [EventosController::class, 'MostrarEventoCodigo'])->name('show-altera-evento');

//cadastrar
Route::post('/cadastro-evento', [EventosController::class, 'CadastrarEventos'])->name('cadastra-evento');

//deletar
Route::delete('/apaga-evento', [EventosController::class, 'Destroy'])->name('apaga-evento');

//alterar
Route::put('/altera-evento', [EventosController::class, 'Update'])->name('altera-evento');


