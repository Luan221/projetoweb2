
@extends('layouts.app')

@section('content')


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#evento" role="tab" aria-controls="home" aria-selected="true">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addEvento" role="tab" aria-controls="profile" aria-selected="false">Adicionar Evento</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="evento" role="tabpanel" aria-labelledby="home-tab">


            <div class="container-fluid">
                <h2>Eventos</h2>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Evento</th>
                        <th>Data</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($eventos as $evento)
                        {{ csrf_field() }}
                    <tr>
                        <td>{{$evento->nome}}</td>
                        <td>{{$evento->data}}</td>

                        <td><a class="btn btn-primary" href="{{url("/admin/evento/$evento->id/editForm")}}">Editar</a></td>

                        <td>
                            <form action="{{url("/admin/evento/delete")}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$evento->id}}">
                                <button class="btn btn-danger" type="submit">remover</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="addEvento" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/create/evento") }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nome do evento</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Data do evento</label>
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



