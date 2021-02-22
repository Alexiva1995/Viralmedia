<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function general(){
        View::share('titleg', 'Ajustes Generales');
        return view('ajust.general');
    }

    public function news(){
        View::share('titleg', 'Noticias');
        return view('ajust.news');

    }
    public function languages(){
        View::share('titleg', 'Idioma');
        return view('ajust.languages');
    }
}
