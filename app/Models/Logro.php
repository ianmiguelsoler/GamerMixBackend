<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logro extends Model
{
    use HasFactory;

    protected $table = 'logros';

    protected $fillable = [
        'nombre_logro',
        'descripcion',
        'puntos',
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'logros_usuarios', 'id_logro', 'id_usuario')
            ->withPivot('fecha_obtenido'); // ❌ Quitar withTimestamps()
    }
}
