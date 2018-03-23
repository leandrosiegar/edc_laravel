<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Cineasta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class PeliculasController extends Controller
{
    public function index() {
        $peliculas = Pelicula::orderBy('titulo', 'asc')->get();
        return view('peliculas.list',compact('peliculas'));
    }

    public function create() {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        $cineastas = Cineasta::orderBy('nombre', 'asc')->get()->toArray();
        return view('peliculas/formCreate', compact('cineastas'));
    }

    public function store(Request $request) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        request()->validate([
            'titulo' => 'required',
            'anno' => 'required',
        ]);

        $nomImagen = "";
        if (isset(request()->fotoPelicula)) {
            request()->validate([
                'fotoPelicula' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->fotoPelicula->getClientOriginalName();
            request()->fotoPelicula->move(public_path('images/peliculas'), $nomImagen);
        }

        Pelicula::create([
            'titulo' => $request->all()["titulo"],
            'anno' => $request->all()["anno"],
            'id_director' => $request->all()["id_director"],
            'id_actor1' => $request->all()["id_actor1"],
            'id_actor2' => $request->all()["id_actor2"],
            'fotoPelicula' => $nomImagen
        ]);

        return redirect()->route('peliculas.index')
            ->with('success','Se ha insertado correctamente la película');
    }

    public function show($id) {

        $pelicula = Pelicula::find($id);
        return view('peliculas.show',compact('pelicula'));
    }

    public function edit($id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        $cineastas = Cineasta::orderBy('nombre', 'asc')->get()->toArray();
        $pelicula = Pelicula::find($id);
        return view('peliculas.edit',compact('pelicula', 'cineastas'));
    }

    public function update(Request $request, $id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }

        request()->validate([
            'titulo' => 'required',
            'anno' => 'required',
        ]);

        if (isset(request()->fotoPelicula)) { // puede que no elija nada en el campo file
            request()->validate([
                'fotoPelicula' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $nomImagen = rand(1, 999) . '_' . request()->fotoPelicula->getClientOriginalName();
            request()->fotoPelicula->move(public_path('images/peliculas'), $nomImagen);

            Pelicula::find($id)->update([
                'titulo' => $request->all()["titulo"],
                'anno' => $request->all()["anno"],
                'id_director' => $request->all()["id_director"],
                'id_actor1' => $request->all()["id_actor1"],
                'id_actor2' => $request->all()["id_actor2"],
                'fotoPelicula' => $nomImagen
            ]);
        }
        else {
            Pelicula::find($id)->update([
                'titulo' => $request->all()["titulo"],
                'anno' => $request->all()["anno"],
                'id_director' => $request->all()["id_director"],
                'id_actor1' => $request->all()["id_actor1"],
                'id_actor2' => $request->all()["id_actor2"]
            ]);
        }
        return redirect()->route('peliculas.index')
            ->with('success','Se ha modificado correctamente la película');
    }

    public function destroy($id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        Pelicula::find($id)->delete();
        return redirect()->route('peliculas.index')
            ->with('success','La película se ha borrado correctamente');
    }

    public function borrarPelicula($id) { // para cuando viene por GET
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        Pelicula::find($id)->delete();
        return redirect()->route('peliculas.index')
            ->with('success','La película se ha borrado correctamente');
    }


}
