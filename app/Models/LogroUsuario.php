<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogroUsuario extends Model
{
    use HasFactory;

    protected $table = 'logros_usuarios'; // Nombre de la tabla pivote
    public $timestamps = false; // No tiene created_at ni updated_at

    protected $fillable = [
        'id_usuario',
        'id_logro',
        'fecha_obtenido',
    ];
}
