@extends('layouts.app')

@section('title', 'Funcionários')

@section('content')

    <h2>Lista de Funcionários</h2>

    @foreach ($funcionarios as $funcionario)

        <p>Nome: {{ $funcionario->nome }}</p>
        <p>CPF: {{ $funcionario->cpf }}</p>
        <p>Cargo: {{ $funcionario->cargo }}</p>
        <p>Setor: {{ $funcionario->setor }}</p>
        <p>Data de admissão: {{ $funcionario->data_admissao }}</p>
        <p>Status: {{ $funcionario->status }}</p>

        <hr>

    @endforeach

@endsection