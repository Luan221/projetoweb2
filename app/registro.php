<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $guard = 'prof';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'data',
        'id_disciplina',
        'conteudo',
        'assuntos_min',

    ];

    protected $table = 'registro';

    public function disciplina()
    {
        return $this->hasOne(disciplina::class, 'id', 'id_disciplina');
    }

}
