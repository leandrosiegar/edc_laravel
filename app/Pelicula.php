<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cineasta;

class Pelicula extends Model
{
    protected $fillable = ['titulo', 'anno', 'id_director', 'id_actor1', 'id_actor2', 'fotoPelicula'];

    public function getNombreCineasta($id_cineasta) {
        $cineasta = Cineasta::find($id_cineasta);
        return $cineasta->nombre;
    }

    public function getDirector() {
        return 1;
        return $this->belongsTo(Cineasta::class, "id_director");
    }

    public function getActor1() {
        return 2;
        return $this->belongsTo(Cineasta::class, "id_actor1");
    }

    public function getActor2() {
        return 3;
        return $this->belongsTo(Cineasta::class, "id_actor2");
    }
}
