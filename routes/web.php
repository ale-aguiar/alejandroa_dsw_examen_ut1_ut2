<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formularioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});

Route::get('/editar-mensaje/{id}', [formularioController::class,'mensajeEditable'])->name('mensajeEditable');

Route::post('/editar-mensaje/{id}', [formularioController::class, 'editarMensaje'])->name('editarMensaje');