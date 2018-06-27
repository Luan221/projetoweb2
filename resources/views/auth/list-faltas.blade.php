
    @extends('layouts.app')

    @section('content')
        <ul class="nav nav-tabs" id="mytab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#add" role="tab" aria-controls="home" aria-selected="true">lista de presença</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#view" role="tab" aria-controls="profile" aria-selected="false">ver lista de presença</a>
            </li>
        </ul>
        <div class="tab-content" id="mytabcontent">
                <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="home-tab">



                <div class="container-fluid">
                <h2>lista de alunos</h2>
                <table class="table">

                    <form class="form-control" method="post" action="{{url("/prof/lancarFalta")}}">
                        <thead class="thead-dark">
                        <tr>
                            <th>nº de matricula</th>
                            <th>nome</th>
                            <th>sobrenome</th>
                            <th>email</th>
                            <th>adicionar falta</th>
                            <th>aplicar</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alunos as $aluno)
                            {{ csrf_field() }}
                            <tr>
                                <input type="hidden" name="id_disciplina" value="{{$disciplina}}">

                                <input type="hidden" name="id_aluno" value="{{$aluno->id}}">
                                <input type="hidden" name="id_professor" value="{{$UserId}}">
                                <td>{{$aluno->id}}</td>
                                <td>{{$aluno->name}}</td>
                                <td>{{$aluno->sobrenome}}</td>
                                <td>{{$aluno->email}}</td>
                                <td><input class="form-control col-sm-2" type="number" name="falta" value="1"></td>
                                <td><button type="submit" class="btn btn-primary justify-content-end col-sm-10">aplicar</button></td>
                            </tr>

                    @endforeach
                    </tbody>
                    </form>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid">
                <h2>Lista de presença</h2>
                <p>Obs: só alunos que levaram falta vai aparecer na lista</p>
                <table class="table">


                    <form class="form-control" method="POST" action="{{url("/prof/lancarFalta2")}}">
                        <input type="number" name="numero" class="form-control">
                        <thead class="thead-dark">
                        <tr>
                            <th>nº de matricula</th>
                            <th>nome</th>
                            <th>sobrenome</th>
                            <th>email</th>
                            <th>Total de faltas</th>
                            <th>Alterar</th>
                            <th>Aplicar</th>

                        </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" value="{{$count =0}}">

                        @foreach($notas as $nota)

                            {{ csrf_field() }}
                            <input type="number" name="numero" class="form-control" placeholder="{{$nota->falta}}">
                            <tr>
                                <input type="hidden" name="id_nota" value="{{$nota->id}}">

                                <td>{{$alunos[$count]->id}}</td>
                                <td>{{$alunos[$count]->name}}</td>
                                <td>{{$alunos[$count]->sobrenome}}</td>
                                <td>{{$alunos[$count]->email}}</td>
                                <td>{{$nota->falta}}</td>

                                <button type="submit" class="btn btn-primary justify-content-end col-sm-10">aplicar</button>
                            </tr>
                            <input type="hidden" value="{{$count ++}}">
                    @endforeach
                    </tbody>
                    </form>
                </table>
            </div>


         </div>
        </div>



    @endsection



