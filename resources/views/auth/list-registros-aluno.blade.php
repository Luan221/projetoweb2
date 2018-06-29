
@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#disciplina" role="tab" aria-controls="home" aria-selected="true">Registros de aulas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addDisciplina" role="tab" aria-controls="profile" aria-selected="false">Adicionar Registro</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="disciplina" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <h2>Registros de aula</h2>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Nº de Registro</th>
                        <th>Data</th>
                        <th>Contéudo Programado</th>
                        <th>Assuntos Ministrados</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($disciplinas as $disciplina)
                        {{ csrf_field() }}
                        <tr>

                            <td>{{$disciplina->id}}</td>
                            <td>{{$disciplina->data}}</td>
                            <td>{{$disciplina->conteudo}}</td>
                            <td>{{$disciplina->assuntos_min}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection



