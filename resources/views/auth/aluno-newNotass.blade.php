@extends('layouts.app')

@section('content')
    @foreach($alunos as $aluno)
            <form class="form-control justify-content-center" method="POST" action="{{url("/prof/newNota/aluno")}}">

                    {{ csrf_field() }}

                    <input type="hidden" name="disciplina_id" value="{{$disciplinaID}}">
                    <input type="hidden" name="aluno_id" value="{{$aluno->id}}">

                        <div class="card-header">
                            <h4>Aluno:{{$aluno->name}} {{$aluno->sobrenome}}</h4>
                            <h5>Matricula:{{$aluno->id}}</h5>
                        </div>
                        <div class="card-body">


                                    <label>Primeira Nota:</label>
                                    <input type="number" name="notaone" class="form-control">

                                    <label>Segunda Nota: </label>
                            <input type="number" name="notatwo" class="form-control">




                            <button type="submit" class="btn btn-primary justify-content-end">Aplicar</button>
                        </div>+
            </form>
@endforeach


@endsection
