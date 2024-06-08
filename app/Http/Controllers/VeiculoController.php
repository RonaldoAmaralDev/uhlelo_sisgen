<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        // Recupera todos os veículos
        $veiculos = Veiculo::all();
        
        // Retorna a view com os veículos
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        // Retorna a view para criar um novo veículo
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            // defina suas regras de validação aqui
        ]);

        // Cria um novo veículo com base nos dados do formulário
        Veiculo::create($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo criado com sucesso!');
    }

    public function show(Veiculo $veiculo)
    {
        // Retorna a view para exibir um veículo específico
        return view('veiculos.show', compact('veiculo'));
    }

    public function edit(Veiculo $veiculo)
    {
        // Retorna a view para editar um veículo específico
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(Request $request, Veiculo $veiculo)
    {
        // Valida os dados do formulário
        $request->validate([
            // defina suas regras de validação aqui
        ]);

        // Atualiza os dados do veículo com base nos dados do formulário
        $veiculo->update($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy(Veiculo $veiculo)
    {
        // Exclui o veículo
        $veiculo->delete();

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo excluído com sucesso!');
    }
}