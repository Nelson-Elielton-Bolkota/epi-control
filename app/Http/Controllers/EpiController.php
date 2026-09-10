<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epi;
use App\Http\Requests\StoreEpiRequest;

class EpiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $epis = Epi::latest()->get();
        return view('epis.index', compact('epis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('epis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEpiRequest $request)
    {
        
        Epi::create($request->validated());

        return redirect()
            ->route('epis.index')
            ->with('success', 'EPI cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Epi $epi)
    {
        
        return view('epis.show', compact('epi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Epi $epi)
    {
        
        return view('epis.edit', compact('epi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEpiRequest $request, Epi $epi)
    {

        $epi->update($request->all());

        return redirect()
            ->route('epis.index')
            ->with('success', 'EPI atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    
        public function destroy(Epi $epi)
    {
        $epi->delete();

        return redirect()
            ->route('epis.index')
            ->with('success', 'EPI excluído com sucesso!');
    
    }
}
