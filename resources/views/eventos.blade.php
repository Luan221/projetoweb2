@extends('layouts.app')

@section('content')
    <main>
        <!-- EVENTOS -->
        <br>
        <div class="c-title">
            <h2>Eventos</h2>
        </div>
        <!-- Evento 1 -->
        <div class="jumbotron bg-light">
            @foreach($eventos as $evento)

            <h2>{{$evento->nome}}</h2>

            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-sobre-tab" data-toggle="tab" href="#nav-sobre" role="tab" aria-controls="nav-sobre" aria-selected="true">Sobre</a>
                <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">Informações</a>
                <a class="nav-item nav-link" id="nav-insc-tab" data-toggle="tab" href="#nav-insc" role="tab" aria-controls="nav-insc" aria-selected="false">Inscreva-se</a>
            </div>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active bg-white" id="nav-sobre" role="tabpanel" aria-labelledby="nav-sobre-tab">

                    <div class="j-img-container">
                        <img src="img/Agenda-de-eventos.jpg" class="jumbotron-img" alt="">
                    </div>
                    <hr class="my-0">
                    <div class="jumbotron-txt-container">

                        <p>	{{$evento->descricao}}
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade bg-white" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">

                    <div class="j-img-container">
                        <img src="img/Agenda-de-eventos.jpg" class="jumbotron-img" alt="">
                    </div>
                    <hr class="my-0">
                    <div class="jumbotron-txt-container">

                        <p>	O evento acontecerá no dia {{$evento->data}}
                        </p>
                    </div>

                </div>
                <div class="tab-pane fade bg-white" id="nav-insc" role="tabpanel" aria-labelledby="nav-insc-tab">

                    <div class="j-img-container">
                        <img src="img/Agenda-de-eventos.jpg" class="jumbotron-img" alt="">
                    </div>
                    <hr class="my-0">
                    <div class="jumbotron-txt-container">

                        <p>	Local em obras
                        </p>
                        <a class="btn btn-primary btn-lg float-right mr-5 mb-2 mt-0" href="#" role="button">Inscrições</a>

                    </div>

                </div>
            </div>
            @endforeach
        </div>



    </main>

@endsection

