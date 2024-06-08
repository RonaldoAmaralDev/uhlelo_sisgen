<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        // Recupera todos os colaboradores
        $colaboradores = Colaborador::all();
        
        // Retorna a view com os colaboradores
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        // Retorna a view para criar um novo colaborador
        return view('colaboradores.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            // Defina suas regras de validação aqui
        ]);

        // Cria um novo colaborador com base nos dados do formulário
        Colaborador::create($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('colaboradores.index')
            ->with('success', 'Colaborador criado com sucesso!');
    }

    public function show(Colaborador $colaborador)
    {
        // Retorna a view para exibir um colaborador específico
        return view('colaboradores.show', compact('colaborador'));
    }

    public function edit(Colaborador $colaborador)
    {
        // Retorna a view para editar um colaborador específico
        return view('colaboradores.edit', compact('colaborador'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        // Valida os dados do formulário
        $request->validate([
            // Defina suas regras de validação aqui
        ]);

        // Atualiza os dados do colaborador com base nos dados do formulário
        $colaborador->update($request->all());

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('colaboradores.index')
            ->with('success', 'Colaborador atualizado com sucesso!');
    }

    public function destroy(Colaborador $colaborador)
    {
        // Exclui o colaborador
        $colaborador->delete();

        // Redireciona de volta à página inicial ou para outra rota
        return redirect()->route('colaboradores.index')
            ->with('success', 'Colaborador excluído com sucesso!');
    }
}