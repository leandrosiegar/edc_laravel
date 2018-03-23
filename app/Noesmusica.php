<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noesmusica extends Model
{
    protected $table = "videos_musica";

    public $timestamps = false;

    protected $fillable = ['nom_video_musica', 'foto_video_musica', 'id_compositor', 'id_pelicula', 'urlCorta'];
}
