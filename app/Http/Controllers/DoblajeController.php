<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;
use App\artYoutube;
use App\Doblaje;
use Illuminate\Support\Facades\Auth;

class DoblajeController extends Controller
{
    public function index() {
        $arrDoblaje = Doblaje::select('nom_pel_youtube','pel_doblaje.*')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'pel_doblaje.id_pelicula')
            ->orderby('nom_pel_youtube')
            ->paginate();

        foreach ($arrDoblaje as $clave=>$valor) {
            if ($valor->id_actor_orig1 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_orig1)->get();
                $arrDoblaje[$clave]->nom_actor_orig1 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_doblaje1 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_doblaje1)->get();
                $arrDoblaje[$clave]->nom_actor_doblaje1 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_orig2 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_orig2)->get();
                $arrDoblaje[$clave]->nom_actor_orig2 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_doblaje2 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_doblaje2)->get();
                $arrDoblaje[$clave]->nom_actor_doblaje2 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_orig3 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_orig3)->get();
                $arrDoblaje[$clave]->nom_actor_orig3 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_doblaje3 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_doblaje3)->get();
                $arrDoblaje[$clave]->nom_actor_doblaje3 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_orig4 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_orig4)->get();
                $arrDoblaje[$clave]->nom_actor_orig4 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor_doblaje4 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor_doblaje4)->get();
                $arrDoblaje[$clave]->nom_actor_doblaje4 = $arrAux[0]->nom_art_youtube;
            }
        }
        return view('doblaje.list',compact('arrDoblaje'));
    }

    public function create() {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('doblaje/create', compact('peliculas', 'cineastas'));
    }

    public function store(Request $request) {
        $arrAux = Youtube::where('id', $request->id_pelicula)->get();
        $nomPel = $arrAux[0]->nom_pel_youtube;

        $urlCorta = "doblaje-".str_slug($nomPel)."-".$request->anno.".html";

        Doblaje::create([
            'foto_pel_doblaje' => $request->foto_pel_doblaje,
            'anno' => $request->anno,
            'id_pelicula' => $request->id_pelicula,
            'id_actor_orig1' => $request->id_actor_orig1,
            'id_actor_doblaje1' => $request->id_actor_doblaje1,
            'id_actor_orig2' => $request->id_actor_orig2,
            'id_actor_doblaje2' => $request->id_actor_doblaje2,
            'id_actor_orig3' => $request->id_actor_orig3,
            'id_actor_doblaje3' => $request->id_actor_doblaje3,
            'id_actor_orig4' => $request->id_actor_orig4,
            'id_actor_doblaje4' => $request->id_actor_doblaje4,
            'urlCorta' => $urlCorta
        ]);


        return redirect()->route('doblaje.index')
            ->with('success','Se ha insertado correctamente el doblaje');
    }

    public function show() {

    }

    public function edit($id) {
        $doblaje = Doblaje::find($id);
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('doblaje.edit',compact('doblaje', 'peliculas', 'cineastas'));
    }

    public function borrarDoblaje($id) {
        Doblaje::find($id)->delete();
        return redirect()->route('doblaje.index')
            ->with('success','El vídeo del Doblaje se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Doblaje::find($id)->update([
            'foto_pel_doblaje' => request()->foto_pel_doblaje,
            'anno' => request()->anno,
            'id_actor_orig1' => request()->id_actor_orig1,
            'id_actor_doblaje1' => request()->id_actor_doblaje1,
            'id_actor_orig2' => request()->id_actor_orig2,
            'id_actor_doblaje2' => request()->id_actor_doblaje2,
            'id_actor_orig3' => request()->id_actor_orig3,
            'id_actor_doblaje3' => request()->id_actor_doblaje3,
            'id_actor_orig4' => request()->id_actor_orig4,
            'id_actor_doblaje4' => request()->id_actor_doblaje4,
            'urlCorta' => request()->urlCorta
        ]);

        return redirect()->route('doblaje.index')
            ->with('success','Se ha modificado correctamente el doblaje');
    }

    public function frontDoblajeList() {
        $doblaje = Doblaje::orderByRaw('RAND()')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'pel_doblaje.id_pelicula')
            ->limit(6)
            ->get();
        return view('front/doblaje_list', compact('doblaje'));
    }
}
