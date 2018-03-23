<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criticas extends Model
{
    protected $table = "criticas";

    public $timestamps = false;

    protected $fillable = ['id_pel_youtube', 'id_director', 'id_colab', 'critica', 'fotoCritica', 'fecha', 'esArticulo', 'votos', 'totalPunt', 'youtube', 'hits'];
}
