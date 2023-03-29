<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFakultas extends Controller
{
    function index(){
       $fakultas = array("Fakultas Ilmu Komputer",
        "Fakultas EKonomi dan Bisnis", "Fakultas Teknik");
        return view("fakultas.index",['fakultas' =>
         $fakultas, 'kampus' => "Universitas MDP"]);
    }
}
