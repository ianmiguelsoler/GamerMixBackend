<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    use HasFactory;

    protected $table = 'skins';

    protected $fillable = [
        'nombre_skin',
        'descripcion',
        'imagen_url',
    ];

    public function combinaciones()
    {
        return $this->hasMany(Combinacion::class, 'id_skin');
    }
}
