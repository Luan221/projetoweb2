<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'data',
    ];

    protected $table = 'evento';
}
