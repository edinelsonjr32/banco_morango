<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferenciaController extends Controller
{
    public function create(){
        return view('transferencias.create');
    }
}
