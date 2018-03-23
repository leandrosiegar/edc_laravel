<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;
use App\artYoutube;
use App\Noesmusica;
use Illuminate\Support\Facades\Auth;


class NoesmusicaController extends Controller
{
    public function index() {
        $arrNoesmusica = Noesmusica::select('nom_pel_youtube','nom_art_youtube','videos_musica.*')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'videos_musica.id_pelicula')
            ->join('art_youtube', 'art_youtube.id', '=', 'videos_musica.id_compositor')
            ->orderby('nom_pel_youtube')
            ->paginate();

        return view('noesmusica.list',compact('arrNoesmusica'));
    }

    public function create() {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('noesmusica/create', compact('peliculas', 'cineastas'));
    }

    public function store(Request $request) {
        $urlCorta = "no-es-musica-es-cine-".str_slug($request->nom_video_musica).".html";

        Noesmusica::create([
            'nom_video_musica' => $request->nom_video_musica,
            'foto_video_musica' => $request->foto_video_musica,
            'id_compositor' => $request->id_compositor,
            'id_pelicula' => $request->id_pelicula,
            'urlCorta' => $urlCorta
        ]);

        return redirect()->route('noesmusica.index')
            ->with('success','Se ha insertado correctamente el concierto');
    }

    public function show() {

    }

    public function edit($id) {
        $noesmusica = Noesmusica::find($id);
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('noesmusica.edit',compact('noesmusica', 'peliculas', 'cineastas'));
    }

    public function borrarNoesmusica($id) {
        Noesmusica::find($id)->delete();
        return redirect()->route('noesmusica.index')
            ->with('success','El concierto se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Noesmusica::find($id)->update([
            'nom_video_musica' => request()->nom_video_musica,
            'foto_video_musica' => request()->foto_video_musica,
            'id_compositor' => request()->id_compositor,
            'id_pelicula' => request()->id_pelicula,
            'urlCorta' => request()->urlCorta
        ]);

        return redirect()->route('noesmusica.index')
            ->with('success','Se ha modificado correctamente el concierto');
    }

    public function frontNoesmusicaList() {
        $noesmusica = Noesmusica::orderByRaw('RAND()')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'videos_musica.id_pelicula')
            ->join('art_youtube', 'art_youtube.id', '=', 'videos_musica.id_compositor')
            ->limit(6)
            ->get();
        return view('front/noesmusica_list', compact('noesmusica'));
    }
}
