<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index(){
        $transacoes = Transacao::all();
        
        
        return view('painel');
    }
}
