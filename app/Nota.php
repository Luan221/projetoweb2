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
        'id', 'nota1', 'nota2','id_aluno', 'id_disciplina', 'id_professor', 'teste', 'falta'
    ];

    protected $table = 'notas';

    public function disci()
    {
        return $this->hasOne(disciplina::class, 'id', 'id_disciplina');
    }
    public function aluno()
    {
        return $this->hasOne(User::class, 'id', 'id_aluno');
    }
    public function professor()
    {
        return $this->hasOne('App\Professor', 'id_professor', 'id');
    }

}
