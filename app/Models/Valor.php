<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'valoresBoolean';
    protected $fillable = ['id', 'valor'];
}
