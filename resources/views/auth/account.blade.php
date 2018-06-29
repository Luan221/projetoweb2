
@extends('layouts.app')

@section('content')







    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#aluno" role="tab" aria-controls="home" aria-selected="true">Aluno</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#prof" role="tab" aria-controls="profile" aria-selected="false">Professor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addAluno" role="tab" aria-controls="contact" aria-selected="false">Adicionar Aluno</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addProfessor" role="tab" aria-controls="contact" aria-selected="false">Adicionar Professor</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="aluno" role="tabpanel" aria-labelledby="home-tab">


            <div class="container-fluid">
                <h2>Alunos</h2>
                <p>Alunos cadastrados</p>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Nº Grade</th>
                        <th>Periodo</th>
                        <th>Telefone</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alunos as $aluno)
                        {{ csrf_field() }}
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->sobrenome}}</td>
                        <td>{{$aluno->email}}</td>
                        <td>{{$aluno->id_grade}}</td>
                        <td>{{$aluno->periodo}}</td>
                        <td>{{$aluno->telefone}}</td>
                        <td><a class="btn btn-primary" href="{{url("/admin/account/$aluno->id/editForm")}}">Editar</a></td>

                        <td>
                            <form action="{{url("/admin/account/delete")}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$aluno->id}}">
                                <button class="btn btn-danger" type="submit">remover</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="prof" role="tabpanel" aria-labelledby="profile-tab">


            <div class="container-fluid">
                <h2>Professores</h2>
                <p>Professores cadastrados</p>
                <table class="table">

                    <thead class="thead-dark">
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($professores as $professor)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{$professor->id}}</td>
                            <td>{{$professor->nome}}</td>
                            <td>{{$professor->sobrenome}}</td>
                            <td>{{$professor->email}}</td>
                            <td>{{$professor->telefone}}</td>
                            <td><a class="btn btn-primary" href="{{url("/admin/account/$professor->id/editFormProf")}}">Editar</a></td>

                            <td>
                                <form action="{{url("/admin/account/deleteProf")}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$professor->id}}">
                                    <button class="btn btn-danger" type="submit">remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="addAluno" role="tabpanel" aria-labelledby="profile-tab">
                <h2>Adicionar Aluno</h2>
            <div class="container-fluid">
                <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/account/create/aluno") }}">

                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nome</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Sobrenome</label>
                                <input type="text" name="sobrenome" class="form-control">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" name="password"  class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control">
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
                                <label>Nº da grade</label>
                                <input type="number" name="id_grade" class="form-control">
                            </div>
                        </div>


                    <button type="submit" class="btn btn-primary">Aplicar</button>
                    </div>

                </form>
            </div>
            <div class="tab-pane fade" id="addProfessor" role="tabpanel" aria-labelledby="profile-tab">

                    <h2>Adicionar Professor</h2>
                    <div class="container-fluid">
                        <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/account/create/professor") }}">

                            {{ csrf_field() }}

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nome</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Sobrenome</label>
                                    <input type="text" name="sobrenome" class="form-control">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Aplicar</button>
                    </div>

                    </form>

            </div>

    </div>







@endsection



