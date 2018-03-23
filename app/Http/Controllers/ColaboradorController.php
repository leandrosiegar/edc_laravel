<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colaborador;
use Illuminate\Support\Facades\Hash;

class ColaboradorController extends Controller
{
    public function index() {
        $arrColab = Colaborador::select('colaborador.*')
            ->orderby('nom_colaborador')
            ->paginate();
        return view('colaborador.list',compact('arrColab'));
    }

    public function checkPW(Request $request) {
        $arrAux = Colaborador::where('id', 2)->get();
        if (Hash::check($request->pw, $arrAux[0]->pw)) {
            return "COINCIDE";
        }
        else {
            return "NO COINCIDE";
        }
    }

    public function create() {
        return view('colaborador/create');
    }

    public function store(Request $request) {

        $slug = str_slug($request->nom_colaborador).".html";

        Colaborador::create([
            'nom_colaborador' => $request->nom_colaborador,
            'pw' =>  Hash::make($request->pw),
            'email' => $request->email,
            'slug' => $slug
        ]);


        return redirect()->route('colaborador.index')
            ->with('success','Se ha insertado correctamente el colaborador');
    }

    public function show() {

    }

    public function edit($id) {
        $colaborador = Colaborador::find($id);
        return view('colaborador.edit',compact('colaborador'));
    }

    public function borrarColaborador($id) {
        Colaborador::find($id)->delete();
        return redirect()->route('colaborador.index')
            ->with('success','El colaborador se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        Colaborador::find($id)->update([
            'nom_colaborador' => $request->nom_colaborador,
            'email' => $request->email,
            'slug' => $request->slug
        ]);

        if ($request->new_pw != "") {
            Colaborador::find($id)->update([
                'pw' => Hash::make($request->new_pw),
            ]);
        }

        return redirect()->route('colaborador.index')
            ->with('success','Se ha modificado correctamente el colaborador');
    }

    public function frontDoblajeList() {
        return "front";
        $doblaje = Doblaje::orderByRaw('RAND()')
            ->join('pel_youtube', 'pel_youtube.id', '=', 'pel_doblaje.id_pelicula')
            ->limit(6)
            ->get();
        return view('front/doblaje_list', compact('doblaje'));
    }
}
