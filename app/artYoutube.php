<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artYoutube extends Model
{
    protected $table = "art_youtube";

    public $timestamps = false;

    protected $fillable = ['nom_art_youtube', 'surname', 'num_referencias', 'nom_foto'];
}
