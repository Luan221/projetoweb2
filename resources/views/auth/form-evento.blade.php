
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/update/evento") }}">
            @foreach($eventos as $evento)
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$evento->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome do evento</label>
                        <input type="text" name="nome" class="form-control" value="{{$evento->nome}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control" value="{{$evento->data}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Descrição</label>
                        <textarea type="textarea" name="descricao" class="form-control col-xs-12"  id="exampleFormControlTextarea1" rows="20">{{$evento->descricao}}</textarea>
                    </div>

                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Aplicar</button>
        </form>
    </div>



@endsection



