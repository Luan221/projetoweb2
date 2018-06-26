
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/update/projeto") }}">
            @foreach($projetos as $projeto)
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$projeto->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome do projeto</label>
                        <input type="text" name="nome" class="form-control" value="{{$projeto->nome}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control" value="{{$projeto->data}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Descrição</label>
                        <textarea type="textarea" name="descricao" class="form-control col-xs-12"  id="exampleFormControlTextarea1" rows="20">{{$projeto->descricao}}</textarea>
                    </div>

                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Aplicar</button>
        </form>
    </div>



@endsection



