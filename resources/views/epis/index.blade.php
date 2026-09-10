@extends('layouts.app')

@section('title', 'EPIs')

@section('content')

    <h2>Lista de EPIs</h2>

    <a href="{{ route('epis.create') }}"> Adicionar novo EPI</a>
	@foreach ( $epis as $epi)
		<p>Nome: {{ $epi->nome }}</p>
        <p>Tipo: {{ $epi->tipo }}</p>
        <p>Ca: {{ $epi->ca}}</p> 
		<p>Fabricante: {{ $epi->fabricante}}</p> 
		<p>Quantidade: {{ $epi->quantidade}}</p> 
		<p>Validade: {{ $epi->validade}}</p> 
		<p>Status: {{ $epi->status}}</p> 
		<a href="{{ route('epis.show', $epi->id) }}" class="btn btn-primary">
		Ver
	</a>

	<a href="{{ route('epis.edit', $epi->id) }}" class="btn btn-warning">
		Editar
	</a>

	<form action="{{ route('epis.destroy', $epi->id) }}" method="POST" style="display:inline">
		@csrf
		@method('DELETE')

		<button type="submit" class="btn btn-danger"
				onclick="return confirm('Tem certeza que deseja excluir este EPI?')">
			Excluir
		</button>
	</form> 
        <hr>
	@endforeach

@endsection