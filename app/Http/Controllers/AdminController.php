<?php
namespace App\Http\Controllers;
use App\Admin;
use App\alunodisci;
use App\disciplina;
use App\evento;
use App\Instituition;
use App\Nota;
use App\Professor;
use App\Projeto;
use App\User;
use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PhpParser\filesInDir;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $Instituition;
    private $Account;


    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->Instituition = new Instituition();
        $this->Account = new User();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pessoas = Admin::all();


        return view('admin', ['admins' =>$list_pessoas]);
    }
    public function notas(){
        return $this->hasMany (Nota::class, 'id_disciplina');
    }

    public function showInstituitionForm()
    {
        //$instituition = DB::table('instituition')->value('descricao');
        $list_institu = Instituition::all();
        return view('auth.form-instituition', ['instituitions' =>$list_institu]);
    }
    public function updateInstituition(Request $request)
    {
        $institution = DB::table('instituition')
            ->where('id', 1)
            ->update(['descricao' => $request->descricao]);



        return redirect()->intended(route('admin.dashboard'));

    }

    public function editInstituitionView ($id ){
        return view ('auth.form-instituition', ['instituition' => $this->getInstituition($id)]);

    }

    protected  function  getInstituition($id){
        return $this->Instituition->find($id);
    }


    //**        ACCOUNTS           */ --------------------- **

    public function Account (){
        $list_professores = Professor::all();
        $list_alunos = User::all();
        $list_disciplinas = disciplina::all();
        return view('auth.account', ['professores' =>$list_professores, 'alunos' =>$list_alunos]);
    }

    public function EditAccount($id){
        $list_account = DB::table('users')->where('id', $id)->get();
        $list_disciplinas = disciplina::all();
        return view ('auth.form-Account', ['accounts' => $list_account, 'disciplinas'=>$list_disciplinas]);
    }

    protected  function  getAccount($id){
        return $this->Account->find($id);
    }

    public function createAluno (Request $request){
        User::create(
            [   'name' => $request->name,
                'sobrenome' => $request->sobrenome,
                'email' => $request->email,
                'password'=>Hash::make($request->password),
                'telefone' => $request->telefone,
                'id_grade' => $request->id_grade,
                'periodo' => $request->periodo,

            ]);
        return redirect()->intended(route('admin.dashboard'));
    }

    public function updateAluno(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'telefone' => 'required|string|max:255'
        ]);
        if ($aluno = User::find($request->id)) {
            $aluno->update($request->all());
            $aluno->update(['password'=>Hash::make($request->password)]);
        }
        return redirect()->intended(route('admin.dashboard'));
    }

    public function DeleteAluno(Request $request){
        $aluno = User::find($request->id)->delete();
        return redirect()->intended(route('admin.dashboard'));
    }

    //-------------------PROFESSOR------------------------------

    public function EditAccountProf($id){
        Auth::
        $list_account = DB::table('professors')->where('id', $id)->get();
        return view ('auth.form-AccountProf', ['accounts' => $list_account]);
    }



    public function updateProf(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'telefone' => 'required|string|max:255'
        ]);
        if ($aluno = Professor::find($request->id)) {
            $aluno->update($request->all());
            $aluno->update(['password'=>Hash::make($request->password)]);
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->intended(route('admin.dashboard'));
    }

    public function DeleteProf(Request $request){
        $aluno = Professor::find($request->id)->delete();
        return redirect()->intended(route('admin.dashboard'));
    }

    public function createProfessor (Request $request){
        Professor::create(
            [   'name' => $request->name,
                'sobrenome' => $request->sobrenome,
                'email' => $request->email,
                'password'=>Hash::make($request->password),
                'telefone' => $request->telefone
            ]);
        return redirect()->intended(route('admin.dashboard'));
    }


    //--------------------Disciplina -------------------

    public function Disciplina (){
        $list_disciplina = disciplina::all();
        $list_professores = Professor::all();
        return view('auth.disciplina', ['disciplinas' =>$list_disciplina], ['professores' =>$list_professores]);
    }

    public function createDisciplina (Request $request){
        disciplina::create(
        [   'nome' => $request->nome,
            'carga_horaria' => $request->carga_horaria,
            'descricaoEmenta' => $request->descricaoEmenta,
            'id_pre' => $request->id_pre,
            'id_professor' => $request->id_professor,
            'periodo' => $request->periodo
        ]);
        return redirect()->intended(route('admin.dashboard'));


    }



    public function EditDisciplina($id){
        $list_disciplina = DB::table('disciplina')->where('id', $id)->get();
        return view ('auth.form-disciplina', ['disciplinas' => $list_disciplina]);
    }

    public function formDisciplina(){
        return view ('auth.form-disciplina-create');
    }


    public function updateDisciplina(Request $request)
    {

        if ($disciplina = disciplina::find($request->id)) {
            $disciplina->update($request->all());
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->intended(route('admin.dashboard'));
    }

    public function DeleteDisciplina(Request $request){
        $disciplina = disciplina::find($request->id)->delete();
        return redirect()->intended(route('admin.dashboard'));
    }

    //--------------------Eventos -------------------

    public function Eventos (){
        $list_eventos = evento::all();
        return view('auth.eventos', ['eventos' =>$list_eventos]);
    }

    public function createEvento (Request $request){
        evento::create(
            [   'nome' => $request->nome,
                'data' => $request->data,
                'descricao' => $request->descricao
            ]);
        return redirect()->intended(route('admin.dashboard'));


    }

    public function EditEvento($id){
        $list_evento = DB::table('evento')->where('id', $id)->get();
        return view ('auth.form-evento', ['eventos' => $list_evento]);
    }

    public function formEvento(){
        return view ('auth.form-evento-create');
    }


    public function updateEvento(Request $request)
    {

        if ($evento = evento::find($request->id)) {
            $evento->update($request->all());
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->intended(route('admin.dashboard'));
    }

    public function DeleteEvento(Request $request){
        $evento= evento::find($request->id)->delete();
        return redirect()->intended(route('admin.dashboard'));
    }

    //--------------------Eventos -------------------

    public function Projeto (){
        $list_projeto = Projeto::all();
        return view('auth.projetos', ['projetos' =>$list_projeto]);
    }

    public function createProjeto (Request $request){
        Projeto::create(
            [   'nome' => $request->nome,
                'data' => $request->data,
                'descricao' => $request->descricao
            ]);
        return redirect()->intended(route('admin.dashboard'));
    }

    public function EditProjeto($id){
        $list_projeto = DB::table('pro_extensao')->where('id', $id)->get();
        return view ('auth.form-projeto', ['projetos' => $list_projeto]);
    }

    public function formProjeto(){
        return view ('auth.form-projeto-create');
    }


    public function updateProjeto(Request $request)
    {

        if ($projeto = Projeto::find($request->id)) {
            $projeto->update($request->all());
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->intended(route('admin.dashboard'));
    }

    public function DeleteProjeto(Request $request){
        $projeto= Projeto::find($request->id)->delete();
        return redirect()->intended(route('admin.dashboard'));
    }


}
