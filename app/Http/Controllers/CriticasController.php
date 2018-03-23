<?php

namespace App\Http\Controllers;

use App\Colaborador;
use Illuminate\Http\Request;
use App\Youtube;
use App\artYoutube;
use App\Criticas;

class CriticasController extends Controller
{
    public function index() {
        $arrCriticas = Criticas::select('*','criticas.id as idCritica')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'criticas.id_pel_youtube')
            ->join('art_youtube', 'art_youtube.id', '=', 'criticas.id_director')
            ->join('colaborador', 'colaborador.id', '=', 'criticas.id_colab')
            ->orderby('nom_pel_youtube')
            ->paginate();


        return view('criticas.list',compact('arrCriticas'));
    }

    public function create() {
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        $colaboradores = Colaborador::orderBy('nom_colaborador', 'asc')->get()->toArray();
        return view('criticas/create', compact('peliculas','cineastas', 'colaboradores'));
    }

    public function store(Request $request) {
        $nomImagen = "";
        if (isset(request()->fotoCritica)) {
            request()->validate([
                'fotoCritica' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->fotoCritica->getClientOriginalName();
            request()->fotoCritica->move(public_path('images/criticas'), $nomImagen);
        }

        Criticas::create([
            'id_pel_youtube' => $request->id_pel_youtube,
            'id_director' => $request->id_director,
            'id_colab' => $request->id_colab,
            'critica' => $request->critica,
            'fotoCritica' => $nomImagen,
            'fecha' => date('Y-m-d'),
            'esArticulo' => $request->esArticulo,
            'youtube' => $request->youtube,
            'votos' => 0,
            'totalPunt' => 0,
            'hits' => 0
        ]);

        return redirect()->route('criticas.index')
            ->with('success','Se ha insertado correctamente la crítica');
    }

    public function show() {

    }

    public function edit($id) {
        $critica = Criticas::find($id);
        $peliculas = Youtube::orderBy('nom_pel_youtube', 'asc')->get()->toArray();
        $cineastas = artYoutube::orderBy('nom_art_youtube', 'asc')->get()->toArray();
        $colaboradores = Colaborador::orderBy('nom_colaborador', 'asc')->get()->toArray();

        return view('criticas.edit',compact('critica','peliculas','cineastas','colaboradores'));
    }

    public function borrarCritica($id) {
        Criticas::find($id)->delete();
        return redirect()->route('criticas.index')
            ->with('success','La crítica se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        $nomImagen = "";
        if (isset(request()->fotoCritica)) {
            request()->validate([
                'fotoCritica' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->fotoCritica->getClientOriginalName();
            request()->fotoCritica->move(public_path('images/criticas'), $nomImagen);
            Criticas::find($id)->update([
                'fotoCritica' => $nomImagen
            ]);
        }

        Criticas::find($id)->update([
            'id_pel_youtube' => $request->id_pel_youtube,
            'id_director' => $request->id_director,
            'id_colab' => $request->id_colab,
            'critica' => $request->critica,
            'esArticulo' => $request->esArticulo,
            'youtube' => $request->youtube,
            'votos' => $request->votos,
            'totalPunt' => $request->totalPunt,
            'hits' => $request->hits
        ]);

        return redirect()->route('criticas.index')
            ->with('success','Se ha modificado correctamente la crítica');
    }

    public function frontCriticasList() {
        $criticas = Criticas::select('*','criticas.id as idCritica')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'criticas.id_pel_youtube')
            ->join('art_youtube', 'art_youtube.id', '=', 'criticas.id_director')
            ->join('colaborador', 'colaborador.id', '=', 'criticas.id_colab')
            ->orderby('nom_pel_youtube')
            ->get();
        return view('front/criticas_list', compact('criticas'));
    }
}
