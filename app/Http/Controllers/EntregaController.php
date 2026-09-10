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
        //
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
