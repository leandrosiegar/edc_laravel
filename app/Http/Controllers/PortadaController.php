<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cineasta;
use App\Pelicula;
use App\Sliders;

class PortadaController extends Controller
{
    public function index()
    {
        $fecha = getdate();
        $fecha["seconds"] = 25;
        if (($fecha["seconds"] >= 0) && ($fecha["seconds"] < 20)) {
            $sliders = Sliders::orderByRaw('RAND()')->limit(3)->get();
            return view('portada.list_slider', compact('sliders'));
        }
        if (($fecha["seconds"] >= 20) && ($fecha["seconds"] < 30)) {
            $cineastas = Cineasta::orderByRaw('RAND()')->limit(6)->get();
            return view('portada.list_cineastas', compact('cineastas'));
        }
        if (($fecha["seconds"] >= 30) && ($fecha["seconds"] < 40)) {

        }
        return "noooo";
    }
}
