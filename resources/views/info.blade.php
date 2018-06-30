@extends('layouts.app')

@section('content')
    <main>
        <!-- EVENTOS -->
        <br>
        <div class="c-title">
            <h2>Informações</h2>
        </div>
        <!-- Evento 1 -->
        <div class="jumbotron bg-light">

            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-sobre-tab" data-toggle="tab" href="#nav-sobre" role="tab" aria-controls="nav-sobre" aria-selected="true">Sobre o Curso</a>
            </div>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active bg-white" id="nav-sobre" role="tabpanel" aria-labelledby="nav-sobre-tab">

                    <div class="jumbotron-container">
                        <h4>Informações institucionais</h4>
                        <hr>
                        <div>
                            @foreach($eventos as $evento)
                            <p>{{$evento->descricao}}
                            </p>
                                @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </main>

@endsection

