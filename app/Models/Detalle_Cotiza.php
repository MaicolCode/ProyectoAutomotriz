<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Detalle_Cotiza extends Model
{
    use HasFactory;

    protected $fillable = [
        'cotizacion_id',
        'producto_id',        
        'Descripcion',
        'Cantidad',
        'PUnitario',
        'Subtotal',
    ];

    public function productos(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
