<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;

    protected $table = 'elementos';

    protected $fillable = [
        'nombre_elemento',
        'descripcion',
        'imagen_url',
    ];

    public function combinaciones()
    {
        return $this->hasMany(Combinacion::class, 'id_elemento');
    }
}
