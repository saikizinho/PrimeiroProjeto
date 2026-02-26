<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Exerciciocontroller;

Route::get('/paginainicial', function () {
    return view('welcome');
});

//exercicio 1
Route::get('/exercicio', [ExercicioController::class, 'Exibirformulario']);
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

//rota exercicio 2 abrir > enviar > processar
Route::get('/exercicio2', [ExercicioController::class, 'Exibirformulario2']);
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

?>