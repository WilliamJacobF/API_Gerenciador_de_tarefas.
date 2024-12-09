<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/users', [TarefaController::class, 'index']);
