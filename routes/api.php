<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Agregar el controlador EventoController
use App\Http\Controllers\AsistentesController;
// Agregar el controlador EventoController
use App\Http\Controllers\PonentesController;
// Agregar el controlador EventoController
use App\Http\Controllers\EventoController;
/**
* Rutas para el recurso Evento.
*/
// Recuperar todos los eventos
Route::get('/eventos', [EventoController::class, 'index']);
// Almacenar un evento nuevo
Route::post('/eventos', [EventoController::class, 'store']);
// Recuperar un evento específico
Route::get('/eventos/{id}', [EventoController::class, 'show']);
// Actualizar un evento específico
Route::put('/eventos/{evento}', [EventoController::class, 'update']);
// Eliminar un evento específico
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);
/**
* Rutas para el recurso Evento.
*/
// Recuperar todos los eventos
Route::get('/ponentes', [PonentesController::class, 'index']);
// Almacenar un evento nuevo
Route::post('/ponentes', [PonentesController::class, 'store']);
// Recuperar un evento específico
Route::get('/ponentes/{id}', [PonentesController::class, 'show']);
// Actualizar un evento específico
Route::put('/ponentes/{evento}', [PonentesController::class, 'update']);
// Eliminar un evento específico
Route::delete('/ponentes/{id}', [PonentesController::class, 'destroy']);
/**
* Rutas para el recurso Evento.
*/
// Recuperar todos los eventos
Route::get('/asistentes', [AsistentesController::class, 'index']);
// Almacenar un evento nuevo
Route::post('/asistentes', [AsistentesController::class, 'store']);
// Recuperar un evento específico
Route::get('/asistentes/{id}', [AsistentesController::class, 'show']);
// Actualizar un evento específico
Route::put('/asistentes', [AsistentesController::class, 'update']);
// Eliminar un evento específico
Route::delete('/asistentes/{id}', [AsistentesController::class, 'destroy']);
