<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListrikPulsa extends Model
{
    protected $fillable = [
        'user_id',
        'no_hp',
        'nominal',
        'pembayaran_id',
        'invoice_code'

    ];
    use HasFactory;
}
