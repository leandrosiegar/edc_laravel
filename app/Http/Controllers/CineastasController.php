<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cineasta;
use App\Pelicula;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class CineastasController extends Controller
{
    public function index() {
        $cineastas = Cineasta::orderBy('nombre', 'asc')->paginate(6);
        return view('cineastas.list',compact('cineastas'));
    }

    public function create() {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        return view('cineastas/formCreate');
    }

    public function store(Request $request) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }

        request()->validate([
            'nombre' => 'required'
        ]);

        if (!isset(request()->es_oscar_winner)) { // si el checkbox no se marca no envia nada
            request()->es_oscar_winner = 0;
        }
        if (!isset(request()->decada_oscar)) { // si el radio no se marca no envia nada
            request()->decada_oscar = 0;
        }

        if (isset(request()->fotoCineasta)) { // puede que no elija nada en el campo file
            request()->validate([
                'fotoCineasta' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->fotoCineasta->getClientOriginalName();
            request()->fotoCineasta->move(public_path('images'), $nomImagen);

            Cineasta::create([
                'nombre' => $request->nombre,
                'fotoCineasta' => $nomImagen,
                'es_oscar_winner' => $request->es_oscar_winner,
                'decada_oscar' => $request->decada_oscar
            ]);
        }
        else {
            Cineasta::create([
                'nombre' => $request->all()["nombre"],
                'es_oscar_winner' => $request->all()["es_oscar_winner"]
            ]);
        }

        return redirect()->route('cineastas.index')
            ->with('success','Se ha insertado correctamente el actor');
    }

    public function show($id) {
        $cineasta = Cineasta::find($id);
        return view('cineastas.show',compact('cineasta'));
    }

    public function edit($id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        $cineasta = Cineasta::find($id);
        return view('cineastas.edit',compact('cineasta'));
    }

    public function update(Request $request, $id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }

        request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ''
        ]);

        request()->validate([
            'nombre' => 'required'
        ]);

        if (!isset(request()->es_oscar_winner)) { // si el checkbox no se marca no envia nada
            request()->es_oscar_winner = 0;
        }

        if (!isset(request()->decada_oscar)) { // si el radio no se marca no envia nada
            request()->decada_oscar = 0;
        }

        if (isset(request()->fotoCineasta)) { // puede que no elija nada en el campo file
            request()->validate([
                'fotoCineasta' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->fotoCineasta->getClientOriginalName();
            request()->fotoCineasta->move(public_path('images'), $nomImagen);

            Cineasta::find($id)->update([
                'nombre' => $request->all()["nombre"],
                'fotoCineasta' => $nomImagen,
                'es_oscar_winner' => request()->es_oscar_winner,
                'decada_oscar' => request()->decada_oscar
            ]);
        }
        else {
            Cineasta::find($id)->update([
                'nombre' => $request->all()["nombre"],
                'es_oscar_winner' => request()->es_oscar_winner,
                'decada_oscar' => request()->decada_oscar
            ]);
        }
        return redirect()->route('cineastas.index')
            ->with('success','Se ha modificado correctamente el cineasta');
    }

    public function destroy($id) { // solo si viene por POST
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        Cineasta::find($id)->delete();
        return redirect()->route('cineastas.index')
            ->with('success','El actor se ha borrado correctamente');
    }

    public function borrarCineasta($id) { // para cuando viene por GET
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        Cineasta::find($id)->delete();
        return redirect()->route('cineastas.index')
            ->with('success','El cineasta se ha borrado correctamente');
    }

    public function pelDelCineasta($id) {
        $user = Auth::user();
        if(!isset($user))  { // no está logueado
            return redirect('login');
        }
        $arrPel = Pelicula::where('id_actor1','=',$id)
            ->orWhere('id_actor2','=',$id)
            ->orWhere('id_director','=',$id)
            ->get();

        $cineasta = Cineasta::where('id','=',$id)
                    ->get();
         return view('cineastas.pelDelCineasta',compact('arrPel', 'cineasta'));
    }
}
