@extends('layouts.app')

@section('title', 'Editar EPI')

@section('content')

    <h1>Editar EPI</h1>

    <form action="{{ route('epis.update', $epi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control"
                   value="{{ old('nome', $epi->nome) }}">
        </div>

        <div class="mb-3">
            <label for="ca" class="form-label">CA</label>
            <input type="text" name="ca" id="ca" class="form-control"
                   value="{{ old('ca', $epi->ca) }}">
        </div>

        <div class="mb-3">
            <label for="fabricante" class="form-label">Fabricante</label>
            <input type="text" name="fabricante" id="fabricante" class="form-control"
                   value="{{ old('fabricante', $epi->fabricante) }}">
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control"
                   value="{{ old('quantidade', $epi->quantidade) }}">
        </div>

        <div class="mb-3">
            <label for="validade" class="form-label">Validade</label>
            <input type="date" name="validade" id="validade" class="form-control"
                   value="{{ old('validade', $epi->validade) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="Ativo" {{ $epi->status == 'Ativo' ? 'selected' : '' }}>
                    Ativo
                </option>

                <option value="Inativo" {{ $epi->status == 'Inativo' ? 'selected' : '' }}>
                    Inativo
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Salvar alterações
        </button>

        <a href="{{ route('epis.index') }}" class="btn btn-secondary">
            Voltar
        </a>

    </form>

@endsection