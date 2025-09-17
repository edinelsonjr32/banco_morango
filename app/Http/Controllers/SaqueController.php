<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaqueController extends Controller
{
    public function create(){
        return view('saques.create');
    }
}
