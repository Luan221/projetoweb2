<?php

namespace App\Http\Controllers;

use App\disciplina;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $Nota;

    public function __construct()
    {
        $this->middleware('auth');
        $this->Nota = new Nota();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UserId = Auth::id();
        $notas = Nota::with('disci')->where('id_aluno', $UserId)->get();

        return view('home', compact('notas'));
    }


}
