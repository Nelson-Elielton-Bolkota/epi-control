@extends('layouts.app')

@section('title', 'EPIs')

@section('content')

    <h2>Lista de EPIs</h2>

    <a href="{{ route('epis.create') }}"> Adicionar novo EPI</a>
	@foreach ( $epis as $epi)
		<p>Nome: {{ $epi->nome }}</p>
        <p>Tipo: {{ $epi->tipo }}</p>
        <p>Ca: {{ $epi->ca}}</p>  
		<p>Ca: {{ $epi->ca}}</p> 
		<p>Fabricante: {{ $epi->fabricante}}</p> 
		<p>Quantidade: {{ $epi->quantidade}}</p> 
		<p>Validade: {{ $epi->validade}}</p> 
		<p>Status: {{ $epi->status}}</p>  
        <hr>
	@endforeach

@endsection