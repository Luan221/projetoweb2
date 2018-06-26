
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h2>Lista de Alunos</h2>
        <table class="table">

            <thead class="thead-dark">
            <tr>
                <th>Nº de Matricula</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Telefone</th>

            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                {{ csrf_field() }}
                <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->name}}</td>
                    <td>{{$aluno->sobrenome}}</td>
                    <td>{{$aluno->email}}</td>
                    <td>{{$aluno->telefone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection



