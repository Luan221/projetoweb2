
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/update/aluno") }}">
        @foreach($accounts as $account)
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$account->id}}">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" value="{{$account->name}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" value="{{$account->sobrenome}}">
            </div>

        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Periodo</label>
                    <input type="number" name="periodo" class="form-control" value="{{$account->periodo}}">
                </div>

            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{$account->email}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" name="password"  class="form-control" value="{{$account->password}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" value="{{$account->telefone}}">
            </div>
        </div>
            <div class="form-row">
                <select name="materiaone" class="custom-select form-group col-md-6">
                    <option selected>Selecione uma materia</option>
                    @foreach($disciplinas as $disciplina)
                        <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <select name="materiatwo" class="custom-select form-group col-md-6">
                    <option selected>Selecione uma materia</option>
                    @foreach($disciplinas as $disciplina)
                        <option  value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <select name="materiatree" class="custom-select form-group col-md-6">
                    <option selected>Selecione uma materia</option>
                    @foreach($disciplinas as $disciplina)
                        <option  value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <select name="materiafour" class="custom-select form-group col-md-6">
                    <option selected>Selecione uma materia</option>
                    @foreach($disciplinas as $disciplina)
                        <option  value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <select name="materiafive"  class="custom-select form-group col-md-6">
                    <option selected>Selecione uma materia</option>
                    @foreach($disciplinas as $disciplina)
                        <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                    @endforeach
                </select>
            </div>



        @endforeach
        <button type="submit" class="btn btn-primary">Aplicar</button>
    </form>
</div>

@endsection



