<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $table = "pel_youtube";

    public $timestamps = false;

    protected $fillable = ['nom_pel_youtube', 'url_pel_youtube', 'anno', 'urlCorta', 'fecha_alta_youtube', 'link_amazon'];
}
