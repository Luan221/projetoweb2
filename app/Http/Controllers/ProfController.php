<?php
namespace App\Http\Controllers;
use App\alunodisci;
use App\disciplina;
use App\Nota;
use App\Professor;
use App\registro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Not;


class ProfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Nota;
    public function __construct()
    {
        $this->middleware('auth:prof');
        $this->Nota = new Nota();
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
        return $list_disciplinas = disciplina::with('registro')->where('id_professor', $userID)->get();

    }

    public function ListRegistros($id)
    {
        $userID = Auth::id();
        $disciplinas = registro::with('disciplina')->where('id_disciplina', $id)->get();
        return view('auth.list-registros-prof', compact('disciplinas'), ['disciID'=>$id]);
    }

    public function ListAlunos($periodo){

        $list_alunos = DB::table('users')->where('periodo', $periodo)->get();
        $list_notas = DB::table('notas')->where('id_disciplina', $periodo)->get();
        return view('auth.list-alunos', ['alunos'=>$list_alunos]);
    }

    public function newRegistro(Request $request)
    {

        $result = registro::create(
            ['id_disciplina' => $request->id_disciplina,
                'data' => $request->data,
                'conteudo' => $request->conteudo,
                'assuntos_min' => $request->assuntos_min,

            ]);

        return redirect('prof');
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

    //-------------------FALTAS ------------------------------------------

    public function determinarPeriodo($x , $y){
        $result = collect($x, $y)->sum();
        return $result;

    }
    public function LancarFalta(Request $request)
    {
        $UserId = Auth::id();
        $list_notas = DB::table('notas')->where(['id_professor'=> $UserId, 'id_disciplina'=>$request->id_disciplina])->get();
        $falta = $list_notas[0]->falta;
        $soma = collect(1, $falta)->sum();

        $result = Nota::updateOrCreate(['id_aluno'=>$request->id_aluno, 'id_disciplina'=>$request->id_disciplina],
            [   'id_aluno'=>$request->id_aluno,
                'falta' => $soma,
                'id_disciplina' => $request->id_disciplina,
                'id_professor' => $request->id_professor]

            );

        return redirect('prof');
    }

    public function LancarFalta2(Request $request)
    {
        $result = Nota::find($request->id_nota)
            ->update ([
                'falta'=>$request->numero]
            );

        return redirect('prof');
    }




    public function Faltas ($periodo, $id){
        $UserId = Auth::id();
        $notas = Nota::all();
        $list_alunos = DB::table('users')->where('periodo', $periodo)->get();
        return view('auth.aluno-newNotass', ['disciplinas' =>$this->disciplinaLecionada(), 'alunos'=>$list_alunos,'UserId'=> $UserId, 'disciplinaID' =>$id, 'notas'=>$notas]);
    }

    public function ListFaltas($id){
        $UserId = Auth::id();
        $list_notas = DB::table('notas')->where(['id_professor'=> $UserId, 'id_disciplina'=>$id])->get();
        $list_alunos = User::all();
        $teste_disciplina = $id;
        return view('auth.list-faltas', ['alunos'=>$list_alunos, 'disciplina' => $teste_disciplina, 'UserId' => $UserId, 'notas'=>$list_notas]);
    }

}
