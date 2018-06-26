
@extends('layouts.app')

@section('content')


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#disciplina" role="tab" aria-controls="home" aria-selected="true">Disciplinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addDisciplina" role="tab" aria-controls="profile" aria-selected="false">Adicionar Disciplina</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="disciplina" role="tabpanel" aria-labelledby="home-tab">


            <div class="container-fluid">
                <h2>Disciplinas</h2>
                <p>Disciplinas cadastrados</p>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Disciplina</th>
                        <th>Ementa</th>
                        <th>Carga Horaria</th>
                        <th>Pré-Requisito</th>
                        <th>Periodo</th>
                        <th>Matricula do Professor</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($disciplinas as $disciplina)
                        {{ csrf_field() }}
                    <tr>
                        <td>{{$disciplina->nome}}</td>
                        <td>{{$disciplina->descricaoEmenta}}</td>
                        <td>{{$disciplina->carga_horaria}}</td>
                        <td>{{$disciplina->id_pre}}</td>
                        <td>{{$disciplina->periodo}}</td>
                        <td>{{$disciplina->id_professor}}</td>
                        <td><a class="btn btn-primary" href="{{url("/admin/disciplina/$disciplina->id/editForm")}}">Editar</a></td>

                        <td>
                            <form action="{{url("/admin/disciplina/delete")}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$disciplina->id}}">
                                <button class="btn btn-danger" type="submit">remover</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="addDisciplina" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/create/disciplina") }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nome da disciplina</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Carga Horaria</label>
                            <input type="number" name="carga_horaria" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Ementa</label>
                            <textarea type="textarea" name="descricaoEmenta" class="form-control col-xs-12"  id="exampleFormControlTextarea1" rows="20"></textarea>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Periodo</label>
                            <input type="number" name="periodo" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nº da materia Pré-requisito</label>
                            <input type="number" name="id_pre"  class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Matricula do Professor</label>
                            <input type="number" name="id_professor" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Aplicar</button>
                </form>
            </div>
        </div>

    </div>







@endsection



