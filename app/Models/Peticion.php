<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_c',
        'telefono_c',        
        'asunto_c',
        'mensaje_c',
    ];
}
