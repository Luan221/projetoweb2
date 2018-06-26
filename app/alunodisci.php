<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alunodisci extends Model
{
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_aluno', 'id_disciplina','idDisciplina2','idDisciplina3', 'idDisciplina4', 'idDisciplina5'
    ];

    protected $table = 'alunodisci';
}
