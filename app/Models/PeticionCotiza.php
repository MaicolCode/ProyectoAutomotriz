<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeticionCotiza extends Model
{
    use HasFactory;

    protected $fillable = [
        "Cedula",
        "Nombres",
        "Correo",
        "Direccion",
        "Telefono",
        "Servicio",
        "Estado",
        "Precio",
    ];
}
