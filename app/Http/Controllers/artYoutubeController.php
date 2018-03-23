<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artYoutube;
use Illuminate\Support\Facades\Auth;

class artYoutubeController extends Controller
{
    public function index() {
        $arrArtYoutube = artYoutube::orderBy('nom_art_youtube', 'asc')->paginate(6);
        return view('youtube.list_cineastas',compact('arrArtYoutube'));
    }

    public function create() {
        return view('youtube/createArt');
    }

    public function store(Request $request) {
        $surname = substr($request->nom_art_youtube,0,2);

        $nomImagen = "";
        if (isset(request()->nomFoto)) {
            request()->validate([
                'nomFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->nomFoto->getClientOriginalName();
            request()->nomFoto->move(public_path('images/cineastas'), $nomImagen);
        }

        artYoutube::create([
            'nom_art_youtube' => $request->nom_art_youtube,
            'surname' => $surname,
            'num_referencias' => 0,
            'nom_foto' => $nomImagen
        ]);


        return redirect()->route('artYoutube.index')
            ->with('success','Se ha insertado correctamente el cineasta de YouTube');
    }

    public function show() {

    }

    public function edit($id) {
        $artYoutube = artYoutube::find($id);
        return view('youtube.edit_cineasta',compact('artYoutube'));
    }

    public function borrarArtYoutube($id) {
        artYoutube::find($id)->delete();
        return redirect()->route('artYoutube.index')
            ->with('success','El cineasta de YouTube se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        artYoutube::find($id)->update([
            'nom_art_youtube' => request()->nom_art_youtube,
            'surname' => request()->surname,
            'num_referencias' => request()->num_referencias
        ]);

        if (isset(request()->nomFoto)) {
            request()->validate([
                'nomFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->nomFoto->getClientOriginalName();
            request()->nomFoto->move(public_path('images/cineastas'), $nomImagen);

            artYoutube::find($id)->update([
                'nom_foto' => $nomImagen
            ]);
        }

        return redirect()->route('artYoutube.index')
            ->with('success','Se ha modificado correctamente el cineasta de YouTube');

    }
}
