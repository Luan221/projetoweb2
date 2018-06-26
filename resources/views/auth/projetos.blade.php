
@extends('layouts.app')

@section('content')


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#projeto" role="tab" aria-controls="home" aria-selected="true">Projetos De Extensão</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addProjeto" role="tab" aria-controls="profile" aria-selected="false">Adicionar Projetos De Extensão</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="projeto" role="tabpanel" aria-labelledby="home-tab">


            <div class="container-fluid">
                <h2>Projetos</h2>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Projeto</th>
                        <th>Data</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projetos as $projeto)
                        {{ csrf_field() }}
                    <tr>
                        <td>{{$projeto->nome}}</td>
                        <td>{{$projeto->data}}</td>

                        <td><a class="btn btn-primary" href="{{url("/admin/projeto/$projeto->id/editForm")}}">Editar</a></td>

                        <td>
                            <form action="{{url("/admin/projeto/delete")}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$projeto->id}}">
                                <button class="btn btn-danger" type="submit">remover</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="addProjeto" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/create/projeto") }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nome do Projeto</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Data de incio do Projeto</label>
                            <input type="date" name="data" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Descrição</label>
                            <textarea type="textarea" name="descricao" class="form-control col-xs-12" rows="20"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Aplicar</button>
                </form>
            </div>
        </div>

    </div>







@endsection



