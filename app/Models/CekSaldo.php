<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekSaldo extends Model
{
    protected $fillable = [
        'user_id',
        'sisa_saldo'
    ];
    use HasFactory;
}
