<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'Cliente',        
        'CCorreo',
        'CTelefono',
        'FCreacion',
        'Subtotal_C',
        'IVA',
        'Total',
    ];
}
