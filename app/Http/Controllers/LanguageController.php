<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App;
use App\Cineasta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Lang;
use App\Http\Requests;


class LanguageController extends Controller
{
    public function index() {
        // paco
        session(['language' => $locale]);
        $cineastas = Cineasta::orderBy('nombre', 'asc')->paginate(6);
        return view('cineastas.list',compact('cineastas'));
        // fin paco
    }

    public function changeLanguage(Request $request) {
        if ($request->ajax()) {
            $request->session()->put('locale', $request->locale);
            $request->session()->flash('alert-success', 'todo bien');
        }
    }
}
