<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContaController extends Controller
{
    public function create()
    {

        $conta = mt_rand();
        $usuario_id = Auth()->user()->id;
        $agencia = '0001';

        $contas = DB::table('conta')
            ->select('conta.*')
            ->where('conta.user_id', '=', $usuario_id)
            ->get();

        if ($contas == '[]') {

            $conta = DB::table('conta')->insert(
                [
                    'agencia' => $agencia,
                    'conta' => $conta,
                    'saldo' => 0.0,
                    'user_id' => $usuario_id
                ]
            );
        }

        return redirect()->route('painel.index');
    }
}
