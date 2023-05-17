<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function creaate(){
        return view('prodi.create');
    }

    public function store(Request $request){
        //dump($request);
        //echo $request -> nama;
        $validateDate = $request->validate([
            'nama' => 'request->|min:5|max:20',
        ]);
        dump($validateDate);
        echo $validateDate['nama'];
    }
}
