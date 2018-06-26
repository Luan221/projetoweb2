<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituition extends Model
{
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'descricao'
    ];

    protected $table = 'instituition';
}
