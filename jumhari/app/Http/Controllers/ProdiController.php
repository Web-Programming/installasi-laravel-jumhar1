<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function creaate(){
        return view('prodi.create');
    }
}
