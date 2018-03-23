<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = "sliders";

    protected $fillable = ['dc_slider', 'texto_slider', 'link_slider'];
}
