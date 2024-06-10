<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abastecimento;

class AbastecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abastecimentos = Abastecimento::all();
        return view('abastecimento.index', compact('abastecimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abastecimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Abastecimento::create($request->all());
        return redirect()->route('abastecimento.index')->with('success', 'Abastecimento criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function show(Abastecimento $abastecimento)
    {
        return view('abastecimento.show', compact('abastecimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Abastecimento $abastecimento)
    {
        return view('abastecimento.edit', compact('abastecimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abastecimento $abastecimento)
    {
        $abastecimento->update($request->all());
        return redirect()->route('abastecimento.index')->with('success', 'Abastecimento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abastecimento $abastecimento)
    {
        $abastecimento->delete();
        return redirect()->route('abastecimento.index')->with('success', 'Abastecimento excluído com sucesso.');
    }
}
