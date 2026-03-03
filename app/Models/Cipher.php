<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cipher extends Model
{
    protected $fillable = [
        'plaintext',
        'ciphertext',
        'key'
    ];
}