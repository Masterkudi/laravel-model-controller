<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        $dati = Movie::all();

        dd($dati);

        return view('movies', [
            "movies" => config("movies")
        ]);
    }
}
