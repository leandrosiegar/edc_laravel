<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Youtube;
use App\artYoutube;
use Illuminate\Support\Facades\DB;


class YoutubeController extends Controller
{
    public function __construct() {

    }

    public function index() {
        $arrPelYoutube = Youtube::orderBy('nom_pel_youtube', 'asc')->paginate(6);
        return view('youtube.list_peliculas',compact('arrPelYoutube'));
    }



    public function create() {
        return view('youtube/create');
    }

    public function store(Request $request) {
        $urlCorta = str_slug($request->nom_pel_youtube)."-".$request->anno."-youtube.html";
        $fh_actual = date('Y-m-d');

        Youtube::create([
            'nom_pel_youtube' => $request->nom_pel_youtube,
            'url_pel_youtube' => $request->url_pel_youtube,
            'anno' => $request->anno,
            'urlCorta' => $urlCorta,
            'fecha_alta_youtube' => $fh_actual,
            'link_amazon' => $request->link_amazon
        ]);


        return redirect()->route('youtube.index')
            ->with('success','Se ha insertado correctamente la película de YouTube');
    }

    public function show() {

    }

    public function edit($id) {
        $pelYoutube = Youtube::find($id);
        return view('youtube.edit',compact('pelYoutube'));
    }

    public function borrarPelYoutube($id) {
        Youtube::find($id)->delete();
        return redirect()->route('youtube.index')
            ->with('success','La película de YouTube se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Youtube::find($id)->update([
            'nom_pel_youtube' => request()->nom_pel_youtube,
            'url_pel_youtube' => request()->url_pel_youtube,
            'anno' => request()->anno,
            'urlCorta' => request()->urlCorta,
            'fecha_alta_youtube' => request()->fecha_alta_youtube,
            'link_amazon' => request()->link_amazon
        ]);

        return redirect()->route('youtube.index')
            ->with('success','Se ha modificado correctamente la película de YouTube');

    }

    public function setYoutube(Request $request) {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('youtube/setYoutube', compact('peliculas','cineastas'));
    }

    public function storeSetYoutube(Request $request) {
        if ($request->id_director != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pelicula,
                    'id_art_youtube' => $request->id_director,
                    'qEs' => 'D'
                ]
            );
        }
        if ($request->id_actor1 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pelicula,
                    'id_art_youtube' => $request->id_actor1,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor2 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pelicula,
                    'id_art_youtube' => $request->id_actor2,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor3 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pelicula,
                    'id_art_youtube' => $request->id_actor3,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor4 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pelicula,
                    'id_art_youtube' => $request->id_actor4,
                    'qEs' => 'A'
                ]
            );
        }

        return redirect()->route('youtube.index')
            ->with('success','Linkado correctamente los cineastas a YouTube');
    }

    public function listHistyoutube() {
        $arrHistYoutube = DB::table('hist_youtube')
            ->select('hist_youtube.id as idHistYoutube','hist_youtube.*', 'pel_youtube.nom_pel_youtube', 'art_youtube.*')
            ->leftJoin('pel_youtube', 'pel_youtube.id', '=', 'hist_youtube.id_pel_youtube')
            ->leftJoin('art_youtube', 'art_youtube.id', '=', 'hist_youtube.id_art_youtube')
            ->where('qEs', 'D')
            ->get();

        return view('youtube/list_hist_youtube', compact('arrHistYoutube'));
    }

    public function editHistyoutube($id) {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        $arrHistPelYoutube = DB::table('hist_youtube')
            ->where('hist_youtube.id_pel_youtube', $id)
            ->get();

        return view('youtube.edit_hist_youtube',compact('peliculas', 'cineastas','arrHistPelYoutube'));
    }

    public function updateHistYoutube(Request $request) {
        DB::table('hist_youtube')->where('id_pel_youtube', '=', $request->id_pel_youtube)->delete();

        if ($request->id_director != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pel_youtube,
                    'id_art_youtube' => $request->id_director,
                    'qEs' => 'D'
                ]
            );
        }

        if ($request->id_actor1 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pel_youtube,
                    'id_art_youtube' => $request->id_actor1,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor2 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pel_youtube,
                    'id_art_youtube' => $request->id_actor2,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor3 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pel_youtube,
                    'id_art_youtube' => $request->id_actor3,
                    'qEs' => 'A'
                ]
            );
        }
        if ($request->id_actor4 != 0) {
            DB::table('hist_youtube')->insert(
                [
                    'id_pel_youtube' => $request->id_pel_youtube,
                    'id_art_youtube' => $request->id_actor4,
                    'qEs' => 'A'
                ]
            );
        }

        return redirect()->route('youtube.list-histyoutube')
            ->with('success','Se ha modificado correctamente el hist_youtube');




    }

    public function borrarHistYoutube($id) {
        DB::table('hist_youtube')->where('id_pel_youtube', '=', $id)->delete();
        return redirect()->route('youtube.list-histyoutube')
            ->with('success','Se ha borrado correctamente el hist_youtube');
    }

    public function frontYoutubePelList() {
        $peliculas = Youtube::orderByRaw('RAND()')->limit(6)->get();
        // dd($peliculas);
        return view('front/youtube_pel_list', compact('peliculas'));
    }

    public function frontYoutubeCineastasList() {
        $cineastas = artYoutube::orderByRaw('RAND()')
            ->where('nom_foto', "<>", "")
            ->limit(6)->get();
        return view('front/youtube_cineastas_list', compact('cineastas'));
    }
}
