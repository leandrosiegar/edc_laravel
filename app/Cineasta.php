<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cineasta extends Model
{
    protected $table = "cineastas";

    protected $fillable = ['nombre', 'fotoCineasta', 'es_oscar_winner', 'decada_oscar'];
}
