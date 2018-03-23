<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Youtube;
use App\artYoutube;
use App\Garci;

class GarciController extends Controller
{
    public function index() {
        $arrGarci = Garci::select('nom_pel_youtube','videos_garci.*')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'videos_garci.id_pelicula')
            ->orderby('nom_pel_youtube')
            ->paginate();


        foreach ($arrGarci as $clave=>$valor) {
            if ($valor->id_director !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_director)->get();
                $arrGarci[$clave]->nom_director = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor1 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor1)->get();
                $arrGarci[$clave]->nom_actor1 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor2 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor2)->get();
                $arrGarci[$clave]->nom_actor2 = $arrAux[0]->nom_art_youtube;
            }
            if ($valor->id_actor3 !=0) {
                $arrAux = artYoutube::select('nom_art_youtube')->where('id', $valor->id_actor3)->get();
                $arrGarci[$clave]->nom_actor3 = $arrAux[0]->nom_art_youtube;
            }
        }


        return view('garci.list',compact('arrGarci'));
    }

    public function create() {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('garci/create', compact('peliculas', 'cineastas'));
    }

    public function store(Request $request) {
        $arrAux = Youtube::where('id', $request->id_pelicula)->get();
        $nomPel = $arrAux[0]->nom_pel_youtube;

        $urlCorta = "que-grande-es-el-cine-".str_slug($nomPel)."-".$request->anno.".html";

        Garci::create([
            'foto_video_garci' => $request->foto_video_garci,
            'foto_video_garci2' => $request->foto_video_garci2,
            'foto_video_garci3' => $request->foto_video_garci3,
            'foto_video_garci4' => $request->foto_video_garci4,
            'foto_video_garci5' => $request->foto_video_garci5,
            'foto_video_garci6' => $request->foto_video_garci6,
            'foto_video_garci7' => $request->foto_video_garci7,
            'anno' => $request->anno,
            'id_pelicula' => $request->id_pelicula,
            'id_director' => $request->id_director,
            'id_actor1' => $request->id_actor1,
            'id_actor2' => $request->id_actor2,
            'id_actor3' => $request->id_actor3,
            'urlCorta' => $urlCorta
        ]);


        return redirect()->route('garci.index')
            ->with('success','Se ha insertado correctamente el vídeo de Garci');
    }

    public function show() {

    }

    public function edit($id) {
        $vidGarci = Garci::find($id);
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('garci.edit',compact('vidGarci', 'peliculas', 'cineastas'));
    }

    public function borrarVidGarci($id) {
        Garci::find($id)->delete();
        return redirect()->route('garci.index')
            ->with('success','El vídeo de Qué grande es el cine se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Garci::find($id)->update([
            'foto_video_garci' => request()->foto_video_garci,
            'foto_video_garci2' => request()->foto_video_garci2,
            'foto_video_garci3' => request()->foto_video_garci3,
            'foto_video_garci4' => request()->foto_video_garci4,
            'foto_video_garci5' => request()->foto_video_garci5,
            'foto_video_garci6' => request()->foto_video_garci6,
            'foto_video_garci7' => request()->foto_video_garci7,
            'anno' => request()->anno,
            'id_director' => request()->id_director,
            'id_actor1' => request()->id_actor1,
            'id_actor2' => request()->id_actor2,
            'id_actor3' => request()->id_actor3,
            'urlCorta' => request()->urlCorta
        ]);

        return redirect()->route('garci.index')
            ->with('success','Se ha modificado correctamente el cineasta de YouTube');

    }

    public function frontGarciList() {
        $garci = Garci::orderByRaw('RAND()')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'videos_garci.id_pelicula')
            ->limit(6)
            ->get();
        return view('front/garci_list', compact('garci'));
    }
}
