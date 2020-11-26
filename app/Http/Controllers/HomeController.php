<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $x1 = $request->x1;
        $x2 = $request->x2;
        $y1 = $request->y1;
        $y2 = $request->y2;

        $hitung = $x1+$x2+$y1+$y2;
        return view('jarak',\compact('hitung'));

    }
    public function soal(){
        return view('soal');
    }
    public function db(){
        return view('db');
    }
    public function jarak(){
        return view('jarak');
    }
    public function berita(){
        return view('berita');
    }
}
