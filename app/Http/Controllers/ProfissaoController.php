<?php

namespace App\Http\Controllers;

use App\Models\Profissao;
use Illuminate\Http\Request;

class ProfissaoController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'salario' => 'required|numeric',
        'empresa' => 'required|string|max:255',
    ]);

    $profissao = Profissao::create($validated);

    return response()->json(['message' => 'Profissão cadastrada com sucesso!', 'data' => $profissao], 201);
}
}
