<?php

namespace App\Http\Controllers;

use App\artYoutube;
use Illuminate\Http\Request;
use App\Criticas;
use App\Youtube;

class BuscarController extends Controller
{
    public function buscar($item) {
        $arrBusq = Criticas::select('*')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'Criticas.id_pel_youtube')
            ->where('urlCorta', $item)
            ->get();

        $arrAux = artYoutube::select('nom_art_youtube')->where('id', $arrBusq[0]["id_director"])->get();
        dd($arrAux[0]->nom_art_youtube);
        
        exit;
        // return view('buscar/show_resultados', compact('arrBusq'));
    }
}
