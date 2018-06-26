@extends('layouts.rodape')
@extends('layouts.bar2')
@extends('layouts.app')

@section('content')



<main>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ADMIN</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-5">
                <form action="{{url("/admin/1/instituition")}}">
                    <button  class="btn btn-outline-secondary nav-item"> <a class="nav-item">Informações
                            Institucionais</a></button>
                </form>
                <form action="{{url("")}}">
                    <button class="btn btn-outline-secondary nav-item"><a>Grade</a></button>
                </form>
                <form action="{{url("/admin/disciplina")}}">
                <button class="btn btn-outline-secondary">Disciplinas</button>
                </form>
                <form action="{{url("/admin/projeto")}}">
                <button class="btn btn-outline-secondary">Projetos</button>
                </form>
                <form action="{{url("/admin/evento")}}">
                    <button class="btn btn-outline-secondary">Eventos</button>
                </form>
                <form action="{{url("/admin/account")}}">
                <button  class="btn btn-outline-secondary nav-item"> <a class="nav-item">Usuários</a></button>
                </form>
            </div>
        </div>
    </div>


</main>

    <h2>Seja bem-vindo(a)</h2>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

@endsection







@section('rodape')
@endsection




