<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Definimos qué campos se pueden llenar "en masa" desde el formulario
    protected $fillable = [
        'nombre',
        'email',
    ];
}