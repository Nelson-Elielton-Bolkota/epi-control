@extends('layouts.app')

@section('title', 'Detalhes do EPI')

@section('content')

    <h1>Detalhes do EPI</h1>

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">{{ $epi->nome }}</h5>

            <p><strong>CA:</strong> {{ $epi->ca }}</p>

            <p><strong>Fabricante:</strong> {{ $epi->fabricante }}</p>

            <p><strong>Quantidade:</strong> {{ $epi->quantidade }}</p>

            <p><strong>Validade:</strong> {{ $epi->validade }}</p>

            <p><strong>Status:</strong> {{ $epi->status }}</p>

            <a href="{{ route('epis.index') }}" class="btn btn-secondary">
                Voltar
            </a>

            <a href="{{ route('epis.edit', $epi->id) }}" class="btn btn-warning">
                Editar
            </a>

        </div>
    </div>

@endsection