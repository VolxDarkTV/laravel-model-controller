<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $data = [
            'name' => 'Vincenzo FOTI'
        ];
        return view('pages/home', $data);
    }
}
