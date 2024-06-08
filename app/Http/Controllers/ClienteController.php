<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Recupera todos os clientes
        $clientes = Cliente::all();
        
        // Retorna a view com os clientes
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        // Retorna a view para criar um novo cliente
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            // defina suas regras de validação aqui
        ]);

        // Cria um novo cliente com base nos dados do formulário
        Cliente::create($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente criado com sucesso!');
    }

    public function show(Cliente $cliente)
    {
        // Retorna a view para exibir um cliente específico
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        // Retorna a view para editar um cliente específico
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        // Valida os dados do formulário
        $request->validate([
            // defina suas regras de validação aqui
        ]);

        // Atualiza os dados do cliente com base nos dados do formulário
        $cliente->update($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Cliente $cliente)
    {
        // Exclui o cliente
        $cliente->delete();

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente excluído com sucesso!');
    }
}