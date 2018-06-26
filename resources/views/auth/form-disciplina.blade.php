
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <form class="form-control justify-content-center" method="POST" action="{{ url("/admin/update/disciplina") }}">
            @foreach($disciplinas as $disciplina)
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$disciplina->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome da disciplina</label>
                        <input type="text" name="nome" class="form-control" value="{{$disciplina->nome}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Carga Horaria</label>
                        <input type="number" name="carga_horaria" class="form-control" value="{{$disciplina->carga_horaria}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Ementa</label>
                        <textarea type="textarea" name="descricaoEmenta" class="form-control col-xs-12"  id="exampleFormControlTextarea1" rows="20">{{$disciplina->descricaoEmenta}}</textarea>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Periodo</label>
                        <input type="number" name="periodo" class="form-control" value="{{$disciplina->periodo}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nº da materia Pré-requisito</label>
                        <input type="number" name="id_pre"  class="form-control" value="{{$disciplina->id_pre}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Matricula do Professor</label>
                        <input type="number" name="id_professor" class="form-control" value="{{$disciplina->id_professor}}">
                    </div>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Aplicar</button>
        </form>
    </div>



@endsection



