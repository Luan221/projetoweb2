@extends('layouts.app')

@section('content')

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="aluno" role="tabpanel" aria-labelledby="home-tab">


            <div class="container-fluid">
                <h2>Disciplina</h2>
                <div class="table-responsive-xl">
                    <table class="table">

                        <thead class="thead-dark">
                        <tr>
                            <th>Disciplina</th>
                            <th>Alunos matriculados</th>
                            <th>Cadastrar Notas/Alterar Notas</th>
                            <th>Lançar de faltas/Alterar Faltas</th>
                            <th>Registro de aula</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($disciplinas as $disciplina)
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$disciplina->id}}">
                            <tr>
                                <td>{{$disciplina->nome}}</td>
                                <td><a class="btn btn-primary" href="{{url("/prof/$disciplina->periodo/listAlunos")}}">Lista</a></td>
                                <td><a class="btn btn-primary" href="{{url("/prof/$disciplina->periodo/$disciplina->id/newNotas")}}">Lançar Notas</a></td>
                                <td><a class="btn btn-primary" href="{{url("/prof/$disciplina->periodo/alterNotas")}}">Alterar Notas</a></td>
                                <td><a class="btn btn-primary" href="{{url("/prof/$disciplina->periodo/newFaltas")}}">Lançar Faltas</a></td>
                                <td><a class="btn btn-primary" href="{{url("/prof/$disciplina->periodo/newRegistros")}}">Registro de Aula</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>



@endsection



