<?php

namespace App\Http\Controllers;

use App;
use App\Cineasta;

class AjaxController extends Controller
{
    public function index() {
    }

    public function ajaxRequest()  {
        return view('ajaxRequest');
    }

    public function ajaxRequestPost()  {
        session(['language' => request()->locale]);
        App::setLocale(request()->locale);
        return request()->locale; // session('ruta-previa');
    }
}
