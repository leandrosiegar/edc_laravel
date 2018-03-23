<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Sliders;

class SlidersController extends Controller
{
    public function index() {
        $sliders = Sliders::orderBy('texto_slider', 'asc')->paginate(6);
        return view('sliders.list',compact('sliders'));
    }

    public function create() {
        return view('sliders/create');
    }

    public function store(Request $request) {
        request()->validate([
            'dc_slider' => 'required'
        ]);

        if (isset(request()->dc_slider)) { // puede que no elija nada en el campo file
            request()->validate([
                'dc_slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->dc_slider->getClientOriginalName();
            request()->dc_slider->move(public_path('images/sliders'), $nomImagen);

            Sliders::create([
                'texto_slider' => $request->texto_slider,
                'link_slider' => $request->link_slider,
                'dc_slider' => $nomImagen
            ]);
        }
        else {
            Sliders::create([
                'texto_slider' => $request->texto_slider,
                'link_slider' => $request->link_slider
            ]);
        }

        return redirect()->route('sliders.index')
            ->with('success','Se ha insertado correctamente el actor');
    }

    public function show() {

    }

    public function edit($id) {
        $slider = Sliders::find($id);
        return view('sliders.edit',compact('slider'));
    }

    public function borrarSlider($id) {
        Sliders::find($id)->delete();
        return redirect()->route('sliders.index')
            ->with('success','El slider se ha borrado correctamente');
    }

    public function update(Request $request, $id) {
        if (isset(request()->dc_slider)) { // puede que no elija nada en el campo file
            request()->validate([
                'dc_slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $nomImagen = rand(1, 999) . '_' . request()->dc_slider->getClientOriginalName();
            request()->dc_slider->move(public_path('images/sliders'), $nomImagen);

            Sliders::find($id)->update([
                'dc_slider' => $nomImagen,
                'texto_slider' => request()->texto_slider,
                'link_slider' => request()->link_slider
            ]);
        }
        else {
            Sliders::find($id)->update([
                'texto_slider' => request()->texto_slider,
                'link_slider' => request()->link_slider
            ]);
        }
        return redirect()->route('sliders.index')
            ->with('success','Se ha modificado correctamente el slider');

    }

    public function frontYoutubeCineastasList()  {
        $sliders = Sliders::orderByRaw('RAND()')->limit(3)->get();
        return view('front.list_slider', compact('sliders'));
    }
}
