<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntregaRequest;
use Illuminate\Http\Request;
use App\Models\Entrega;
use App\Models\Epi;
use App\Models\Funcionario;


class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entregas = Entrega::latest()->get();
        return view('entregas.index', compact('entregas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $funcionarios = Funcionario::where('status', 'Ativo')->get();
    $epis = Epi::where('status', 'Ativo')->get();

    return view('entregas.create', compact('funcionarios', 'epis'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntregaRequest $request)
    {
        Entrega::create($request->validated());

        return redirect()
            ->route('entregas.index')
            ->with('success', 'Entrega efetuada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrega $entrega)
    {
        $entrega->load(['funcionario', 'epi']);

        return view('entregas.show', compact('entrega'));
    }
    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Entrega $entrega)
    {
        $funcionarios = Funcionario::where('status', 'Ativo')->get();
        $epis = Epi::where('status', 'Ativo')->get();

        return view(
            'entregas.edit',
            compact('entrega', 'funcionarios', 'epis')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntregaRequest $request, Entrega $entrega)
    {
        $entrega->update($request->validated());

    return redirect()
        ->route('entregas.index')
        ->with('success', 'Entrega atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        $entrega->delete();

        return redirect()
            ->route('entregas.index')
            ->with('success', 'Entrega excluída com sucesso!');
    }
}
