<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Transacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PainelController extends Controller
{
    public function index(){

        $usuario_id = Auth()->user()->id;
        
        $contas = DB::table('conta')
            ->select('conta.*')
            ->where('conta.user_id', '=', $usuario_id)
            ->get();

        
        
        return view('painel', ['contas'=> $contas]);
    }
}
