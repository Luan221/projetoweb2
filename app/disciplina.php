<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disciplina extends Model
{
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'descricao',
        'descricaoEmenta',
        'carga_horaria',
        'id_pre',
        'periodo',
        'id_professor',
        'nome'
    ];

    protected $table = 'disciplina';


}
