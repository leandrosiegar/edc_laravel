<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;
use App\artYoutube;
use App\Documental;
use Illuminate\Support\Facades\Auth;

class DocumentalController extends Controller
{
    public function index() {
        $arrDocumental = Documental::select('nom_pel_youtube','nom_art_youtube','documentales.*')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'documentales.id_pelicula')
            ->join('art_youtube', 'art_youtube.id', '=', 'documentales.id_cineasta')
            ->orderby('nom_pel_youtube')
            ->paginate();

        return view('documental.list',compact('arrDocumental'));
    }

    public function create() {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('documental/create', compact('peliculas', 'cineastas'));
    }

    public function store(Request $request) {
        $urlCorta = "documentales-".str_slug($request->nom_documental).".html";
        Documental::create([
            'nom_documental' => $request->nom_documental,
            'foto_documental' => $request->foto_documental,
            'id_cineasta' => $request->id_cineasta,
            'id_pelicula' => $request->id_pelicula,
            'urlCorta' => $urlCorta
        ]);

        return redirect()->route('documental.index')
            ->with('success','Se ha insertado correctamente el documental');
    }

    public function show() {

    }

    public function edit($id) {
        $documental = Documental::find($id);
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        return view('documental.edit',compact('documental', 'peliculas', 'cineastas'));
    }

    public function borrarDocumental($id) {
        Documental::find($id)->delete();
        return redirect()->route('documental.index')
            ->with('success','El documental se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Documental::find($id)->update([
            'nom_documental' => request()->nom_documental,
            'foto_documental' => request()->foto_documental,
            'id_cineasta' => request()->id_cineasta,
            'id_pelicula' => request()->id_pelicula,
            'urlCorta' => request()->urlCorta
        ]);

        return redirect()->route('documental.index')
            ->with('success','Se ha modificado correctamente el documental');
    }

    public function frontDocumentalList() {
        $documental = Documental::orderByRaw('RAND()')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'documentales.id_pelicula')
            ->join('art_youtube', 'art_youtube.id', '=', 'documentales.id_cineasta')
            ->limit(6)
            ->get();
        return view('front/documental_list', compact('documental'));
    }
}