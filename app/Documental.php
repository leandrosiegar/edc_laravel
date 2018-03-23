<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documental extends Model
{
    protected $table = "documentales";

    public $timestamps = false;

    protected $fillable = ['nom_documental', 'foto_documental', 'id_cineasta', 'id_pelicula', 'urlCorta'];
}
