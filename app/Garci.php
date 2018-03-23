<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garci extends Model
{
    protected $table = "videos_garci";

    public $timestamps = false;

    protected $fillable = ['foto_video_garci', 'foto_video_garci2', 'foto_video_garci3', 'foto_video_garci4', 'foto_video_garci5', 'foto_video_garci6', 'foto_video_garci7', 'anno', 'id_pelicula', 'id_director', 'id_actor1', 'id_actor2', 'id_actor3', 'urlCorta'];
}
