<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MainController extends Controller
{
    public function home(){

        $movies = Movie::all();
        $data = [
            'movies' => $movies
        ];
        return view('pages/home', $data);
        // $data = [
        //     'name' => 'Vincenzo FOTI'
        // ];
        // return view('pages/home', $data);
        
    }
}
