<?php

namespace App\Http\Controllers;

use App\evento;
use App\Instituition;
use App\Projeto;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function eventos () {
        $eventos = evento::all();
        return view('eventos', ['eventos'=>$eventos]);
    }

    public function info () {
        $eventos = Instituition::all();
        return view('info', ['eventos'=>$eventos]);
    }
    public function projeto () {
        $eventos = Projeto::all();
        return view('projetos', ['eventos'=>$eventos]);
    }
}
