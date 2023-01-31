<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MainController extends Controller
{
    public function home(){

        $movie = Movie::all();
        $data = [
            'movie' => $movie
        ];
        return view('pages/home', $data);
        // $data = [
        //     'name' => 'Vincenzo FOTI'
        // ];
        // return view('pages/home', $data);
        
    }
}
