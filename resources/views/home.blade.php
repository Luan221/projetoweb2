@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seja bem-vindo {{ Auth::user()->name }}</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}

                    </div>
                @endif

                    <p>Matricula: <strong>{{ Auth::user()->id }}</strong></p>
                    <p>Email: <strong>{{ Auth::user()->email }}</strong></p>

                </div>
                <div class="card-header"> Materias</div>
            @foreach ($notas as $nota)
                <div class="card-body">
                    <p>Disciplina: <strong>{{ $nota->disci->nome }}</strong></p>
                    <p>Nota 1: <strong>{{ $nota->nota1 }} </strong>  Nota 2: <strong>{{ $nota->nota2 }}</strong></p>
                    <p>Faltas: <strong>{{ $nota->falta }} </strong></p>
                    <p class="btn btn-primary">Registros das aulas</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
