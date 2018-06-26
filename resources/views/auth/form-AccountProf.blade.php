
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/update/prof") }}">
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
        @endforeach
        <button type="submit" class="btn btn-primary">Aplicar</button>
    </form>
</div>

@endsection



