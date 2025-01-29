<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $table = 'galeria';

    protected $fillable = [
        'id_usuario',
        'id_combinacion',
        'fecha_guardado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function combinacion()
    {
        return $this->belongsTo(Combinacion::class, 'id_combinacion');
    }
}

