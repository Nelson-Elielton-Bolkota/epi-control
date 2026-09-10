@extends('layouts.app')

@section('title', 'Registrar Entrega')

@section('content')

    <h1>Registrar Entrega</h1>

    <form action="{{ route('entregas.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label for="funcionario_id" class="form-label">
                Funcionário
            </label>

            <select name="funcionario_id"
                    id="funcionario_id"
                    class="form-select">

                <option value="">
                    Selecione um funcionário
                </option>

                @foreach ($funcionarios as $funcionario)

                    <option value="{{ $funcionario->id }}"
                        {{ old('funcionario_id') == $funcionario->id ? 'selected' : '' }}>

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

                <option value="">
                    Selecione um EPI
                </option>

                @foreach ($epis as $epi)

                    <option value="{{ $epi->id }}"
                        {{ old('epi_id') == $epi->id ? 'selected' : '' }}>

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
                   value="{{ old('quantidade') }}">

        </div>


        <div class="mb-3">

            <label for="data_entrega" class="form-label">
                Data da entrega
            </label>

            <input type="date"
                   name="data_entrega"
                   id="data_entrega"
                   class="form-control"
                   value="{{ old('data_entrega', date('Y-m-d')) }}">

        </div>


        <div class="mb-3">

            <label for="data_devolucao" class="form-label">
                Data da devolução
            </label>

            <input type="date"
                   name="data_devolucao"
                   id="data_devolucao"
                   class="form-control"
                   value="{{ old('data_devolucao') }}">

        </div>


        <div class="mb-3">

            <label for="observacao" class="form-label">
                Observação
            </label>

            <textarea name="observacao"
                      id="observacao"
                      class="form-control"
                      rows="3">{{ old('observacao') }}</textarea>

        </div>


        <button type="submit" class="btn btn-success">
            Registrar entrega
        </button>

        <a href="{{ route('entregas.index') }}"
           class="btn btn-secondary">
            Voltar
        </a>

    </form>

@endsection