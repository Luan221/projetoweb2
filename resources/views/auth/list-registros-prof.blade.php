
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
        <div class="tab-pane fade" id="addDisciplina" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <form class="form-control justify-content-center" method="POST" action="{{ url("/prof/create/registro") }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Data</label>
                            <input type="date" name="data" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Contéudo programado</label>
                            <input type="text" name="conteudo" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Assuntos ministrados</label>
                            <input type="text" name="assuntos_min" class="form-control">
                        </div>
                        <input type="hidden" name="id_disciplina" value="{{$disciID}}" class="form-control">
                    <button type="submit" class="btn btn-primary">Aplicar</button>
                </form>
            </div>
        </div>
    </div>



@endsection



