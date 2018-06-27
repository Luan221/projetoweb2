@extends('layouts.app')

@section('content')

    @foreach($notas as $nota)

            <form class="form-control justify-content-center" method="POST" action="{{url("/prof/newNota/aluno")}}">

                    {{ csrf_field() }}

                    <input type="hidden" name="disciplina_id" value="{{$disciplinaID}}">
                    <input type="hidden" name="aluno_id" value="{{$aluno->id}}">

                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </form>



    @endforeach

@endsection
