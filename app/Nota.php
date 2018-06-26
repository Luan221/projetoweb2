<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Nota extends Model
{


    protected $guard = 'prof';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nota1', 'nota2','id_aluno', 'id_disciplina', 'teste'
    ];

    protected $table = 'notas';

}
