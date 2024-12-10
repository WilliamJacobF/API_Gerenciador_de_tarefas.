<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/tarefas', [TarefaController::class, 'index']);
Route::post('/tarefas', [TarefaController::class, 'store']);
Route::get('/tarefas/{tarefa}', [TarefaController::class, 'show']);
Route::put('/tarefas/{tarefa}', [TarefaController::class, 'update']);
Route::delete('/tarefas/{Tarefa}', [TarefaController::class, 'destroy']);
