<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Spatie\FlareClient\Http\Client;

class ClienteController extends Controller
{
    public function index() // Retorna todos os dados
    {
        return Cliente::all();
    }

    public function store(Request $request) // Enviar os dados para o banco
    {
        $request->validate([
            'cliente' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
        ]);

        return Cliente::create($request->all());
    }

    public function show($id) // Pesquisa pelo Id do dado
    {
        return Cliente::findOrfail($id);
    }
}
