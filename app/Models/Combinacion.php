<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combinacion extends Model
{
    use HasFactory;

    protected $table = 'combinaciones';

    protected $fillable = [
        'id_skin',
        'id_elemento',
        'nombre_combinacion',
        'fecha_creacion',
    ];

    public function skin()
    {
        return $this->belongsTo(Skin::class, 'id_skin');
    }

    public function elemento()
    {
        return $this->belongsTo(Elemento::class, 'id_elemento');
    }

    public function galeria()
    {
        return $this->hasMany(Galeria::class, 'id_combinacion');
    }
}
