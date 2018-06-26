<?php
namespace App\Http\Controllers;
use App\alunodisci;
use App\disciplina;
use App\Nota;
use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:prof');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('prof', ['disciplinas' => $this->disciplinaLecionada()]);
    }

    public function disciplinaLecionada (){
        $userID = Auth::id();
        return $list_disciplinas = DB::table('disciplina')->where('id_professor', $userID)->get();

    }

    public function ListAlunos($periodo){

        $list_alunos = DB::table('users')->where('periodo', $periodo)->get();
        $list_notas = DB::table('notas')->where('id_disciplina', $periodo)->get();
        return view('auth.list-alunos', ['alunos'=>$list_alunos]);
    }

    public function newNotas(Request $request)
    {

        $result = Nota::updateOrCreate(['id_aluno'=>$request->aluno_id, 'id_disciplina'=>$request->disciplina_id, 'teste'=>  0],
            ['nota1' => $request->notaone,
                'nota2' => $request->notatwo,
                'id_aluno' => $request->aluno_id,
                'id_disciplina' => $request->disciplina_id,

            ]);

        return redirect('prof');
    }

    public function Notas ($periodo, $id){
        $UserId = Auth::id();
        $notas = Nota::all();
        $list_alunos = DB::table('users')->where('periodo', $periodo)->get();
        return view('auth.aluno-newNotass', ['disciplinas' =>$this->disciplinaLecionada(), 'alunos'=>$list_alunos,'UserId'=> $UserId, 'disciplinaID' =>$id, 'notas'=>$notas]);
    }
}
