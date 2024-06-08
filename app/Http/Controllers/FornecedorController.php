<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        // Recupera todos os fornecedores
        $fornecedores = Fornecedor::all();
        
        // Retorna a view com os fornecedores
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        // Retorna a view para criar um novo fornecedor
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            // Defina suas regras de validação aqui
        ]);

        // Cria um novo fornecedor com base nos dados do formulário
        Fornecedor::create($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor criado com sucesso!');
    }

    public function show(Fornecedor $fornecedor)
    {
        // Retorna a view para exibir um fornecedor específico
        return view('fornecedores.show', compact('fornecedor'));
    }

    public function edit(Fornecedor $fornecedor)
    {
        // Retorna a view para editar um fornecedor específico
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        // Valida os dados do formulário
        $request->validate([
            // Defina suas regras de validação aqui
        ]);

        // Atualiza os dados do fornecedor com base nos dados do formulário
        $fornecedor->update($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        // Exclui o fornecedor
        $fornecedor->delete();

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor excluído com sucesso!');
    }
}