<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    use HasFactory;
    protected $table = 'transferencia';

    protected $fillable = [
    'conta_origem_id',
    'conta_destino_id',
    'valor'
    ];
}
