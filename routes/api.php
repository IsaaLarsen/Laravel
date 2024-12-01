<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfissaoController;

Route::post('/profissoes', [ProfissaoController::class, 'store']);

