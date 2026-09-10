@extends('layouts.app')

@section('title', 'Entregas')

@section('content')

    <h2>Lista de Entregas</h2>

    <a href="{{ route('entregas.create') }}" class="btn btn-primary mb-3">
        Registrar nova entrega
    </a>

    @if ($entregas->isEmpty())

        <div class="alert alert-info">
            Nenhuma entrega registrada.
        </div>

    @else

        @foreach ($entregas as $entrega)

            <div class="card mb-3">

                <div class="card-body">

                    <h5 class="card-title">
                        {{ $entrega->funcionario->nome }}
                    </h5>

                    <p>
                        <strong>EPI:</strong>
                        {{ $entrega->epi->nome }}
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
                        <strong>Devolução:</strong>
                        {{ $entrega->data_devolucao ?? 'Não devolvido' }}
                    </p>

                    <a href="{{ route('entregas.show', $entrega->id) }}"
                       class="btn btn-primary">
                        Ver
                    </a>

                    <a href="{{ route('entregas.edit', $entrega->id) }}"
                       class="btn btn-warning">
                        Editar
                    </a>

                    <form action="{{ route('entregas.destroy', $entrega->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Tem certeza que deseja excluir esta entrega?')">
                            Excluir
                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    @endif

@endsection