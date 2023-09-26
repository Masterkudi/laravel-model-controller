<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function index() {

        $movies = Movie::all();

        // $dati = Movie::where("title". "like", "%ilPadrino%")->get();

        // $dati = Movie::where("original_title". "like", "%theGodfather%")->get();

        // $dati = Movie::where("nationality". "like", "%american%")->get();

        return view('homepage', [
            "movies" => $movies
        ]); 
    }

    /* public function create0() {
        return view('movies.create'); 
    } */
}
