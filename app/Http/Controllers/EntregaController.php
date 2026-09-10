<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntregaRequest;
use Illuminate\Http\Request;
use App\Models\Entrega;

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
        return view('entregas.create');
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
    public function show(EntregaRequest $entrega)
    {
        return view('entregas.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EntregaRequest $entrega)
    {
        return view('entregas.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntregaRequest $request, Entrega $entrega)
    {
        $entrega->update($request->all());

        return redirect()
            ->route('epis.index')
            ->with('success', 'EPI atualizado com sucesso!');
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
