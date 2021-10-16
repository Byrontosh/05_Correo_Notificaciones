<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\SugerenciasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sugerencias', [SugerenciasController::class, 'sendMails'])->name('sugerencias');

Route::post('/sugerencias', [SugerenciasController::class, 'sendMailsProcessing'])->name('sugerencias.form');

Route::get('/mensaje', [MessageController::class,'index'])->name('mensaje')->middleware('auth');

Route::post('/mensaje', [MessageController::class,'store'])->name('mensaje.store')->middleware('auth');

Route::get('/notificaciones', [NotificacionController::class,'index'])->name('notificacion.all')->middleware('auth');

Route::get('/notificaciones/{id}', [NotificacionController::class,'show'])->name('notificacion.detalle')->middleware('auth');

Route::patch('/notificaciones/{id}', [NotificacionController::class,'update'])->name('notificacion.realizada')->middleware('auth');

Route::delete('/notificaciones/{id}', [NotificacionController::class,'destroy'])->name('notificacion.terminada')->middleware('auth');