<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    public function genera_url_corta($nombre)   {
        return str_slug($nombre);


    }
}
