@extends('layouts.app')

@section('title', 'EPIs')

@section('content')

    <h2>Lista de Funcionarios</h2>

	@foreach ( $funcionarios as $funcionario)
		<p>Nome: {{ $funcionario->nome }}</p>
        <p>CPF: {{ $funcionario->cpf }}</p>
        <p>Cargo: {{ $funcionario->cargo}}</p> 
		<p>Setor: {{ $funcionario->setor}}</p> 
		<p>Data_Adm {{ $funcionario->data_admissao}}</p>
		<p>Status: {{ $funcionario->status}}</p> 
		
	</a>

	<hr>

@endsection