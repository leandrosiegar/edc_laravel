<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = "colaborador";

    public $timestamps = false;

    protected $fillable = ['nom_colaborador', 'pw', 'email', 'slug'];
}
