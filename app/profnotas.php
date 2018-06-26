<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profnotas extends Model
{
    protected $guard = 'prof';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_prof', 'id_notas'
    ];

    protected $table = 'profnotas';
}
