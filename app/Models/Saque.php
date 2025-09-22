<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saque extends Model
{
    use HasFactory;

    protected $table = 'saque';

    protected $fillable = [
        'conta_id',
        'valor'
    ];
}
