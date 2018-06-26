
@extends('layouts.app')

@section('content')







    <div class="container lg">

        <form method="POST" action="{{ url("/update/aluno") }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$instituition->id}}">
            <div class="modal-body">
                <label for="exampleFormControlTextarea1">Informações
                    Institucionais</label>
                <textarea type="textarea" name="descricao" class="form-control col-xs-12"  id="exampleFormControlTextarea1" rows="20">{{$instituition->descricao}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right" name="editAgente.php" />Aplicar</button>
        </form>

    </div>



@endsection



