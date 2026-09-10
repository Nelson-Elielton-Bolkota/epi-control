@extends('layouts.app')

@section('title', 'Editar Entrega')

@section('content')

    <h1>Editar Entrega</h1>

    <form action="{{ route('entregas.update', $entrega->id) }}" method="POST">

        @csrf
        @method('PUT')


        <div class="mb-3">

            <label for="funcionario_id" class="form-label">
                Funcionário
            </label>

            <select name="funcionario_id"
                    id="funcionario_id"
                    class="form-select">

                @foreach ($funcionarios as $funcionario)

                    <option value="{{ $funcionario->id }}"
                        {{ old('funcionario_id', $entrega->funcionario_id) == $funcionario->id ? 'selected' : '' }}>

                        {{ $funcionario->nome }}

                    </option>

                @endforeach

            </select>

        </div>


        <div class="mb-3">

            <label for="epi_id" class="form-label">
                EPI
            </label>

            <select name="epi_id"
                    id="epi_id"
                    class="form-select">

                @foreach ($epis as $epi)

                    <option value="{{ $epi->id }}"
                        {{ old('epi_id', $entrega->epi_id) == $epi->id ? 'selected' : '' }}>

                        {{ $epi->nome }} - Estoque: {{ $epi->quantidade }}

                    </option>

                @endforeach

            </select>

        </div>


        <div class="mb-3">

            <label for="quantidade" class="form-label">
                Quantidade
            </label>

            <input type="number"
                   name="quantidade"
                   id="quantidade"
                   class="form-control"
                   min="1"
                   value="{{ old('quantidade', $entrega->quantidade) }}">

        </div>


        <div class="mb-3">

            <label for="data_entrega" class="form-label">
                Data da entrega
            </label>

            <input type="date"
                   name="data_entrega"
                   id="data_entrega"
                   class="form-control"
                   value="{{ old('data_entrega', $entrega->data_entrega) }}">

        </div>


        <div class="mb-3">

            <label for="data_devolucao" class="form-label">
                Data da devolução
            </label>

            <input type="date"
                   name="data_devolucao"
                   id="data_devolucao"
                   class="form-control"
                   value="{{ old('data_devolucao', $entrega->data_devolucao) }}">

        </div>


        <div class="mb-3">

            <label for="observacao" class="form-label">
                Observação
            </label>

            <textarea name="observacao"
                      id="observacao"
                      class="form-control"
                      rows="3">{{ old('observacao', $entrega->observacao) }}</textarea>

        </div>


        <button type="submit" class="btn btn-success">
            Salvar alterações
        </button>

        <a href="{{ route('entregas.index') }}"
           class="btn btn-secondary">
            Voltar
        </a>

    </form>

@endsection