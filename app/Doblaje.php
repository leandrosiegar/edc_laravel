<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doblaje extends Model
{
    protected $table = "pel_doblaje";

    public $timestamps = false;

    protected $fillable = ['foto_pel_doblaje', 'id_pelicula', 'anno', 'id_actor_orig1', 'id_actor_doblaje1', 'id_actor_orig2', 'id_actor_doblaje2', 'id_actor_orig3', 'id_actor_doblaje3', 'id_actor_orig4', 'id_actor_doblaje4', 'urlCorta'];
}
