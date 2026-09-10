<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epi;

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
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'ca' => 'required|string|max:6',
            'fabricante' => 'required|string|max:100',
            'quantidade' => 'required|integer|min:0',
            'validade' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        Epi::create($request->all());

        return redirect()
            ->route('epis.index')
            ->with('success', 'EPI cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
