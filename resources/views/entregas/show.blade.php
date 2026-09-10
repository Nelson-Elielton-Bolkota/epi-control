@extends('layouts.app')

@section('title', 'Detalhes da Entrega')

@section('content')

    <h1>Detalhes da Entrega</h1>

    <div class="card">

        <div class="card-body">

            <h5 class="card-title">
                Entrega #{{ $entrega->id }}
            </h5>

            <p>
                <strong>Funcionário:</strong>
                {{ $entrega->funcionario->nome }}
            </p>

            <p>
                <strong>EPI:</strong>
                {{ $entrega->epi->nome }}
            </p>

            <p>
                <strong>Tipo:</strong>
                {{ $entrega->epi->tipo }}
            </p>

            <p>
                <strong>Quantidade:</strong>
                {{ $entrega->quantidade }}
            </p>

            <p>
                <strong>Data da entrega:</strong>
                {{ $entrega->data_entrega }}
            </p>

            <p>
                <strong>Data da devolução:</strong>
                {{ $entrega->data_devolucao ?? 'Não devolvido' }}
            </p>

            <p>
                <strong>Observação:</strong>
                {{ $entrega->observacao ?? 'Nenhuma' }}
            </p>

            <a href="{{ route('entregas.index') }}"
               class="btn btn-secondary">
                Voltar
            </a>

            <a href="{{ route('entregas.edit', $entrega->id) }}"
               class="btn btn-warning">
                Editar
            </a>

        </div>

    </div>

@endsection