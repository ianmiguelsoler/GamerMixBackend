<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Elemento
 *
 * Representa un elemento en el sistema, como fuego, hielo, oscuridad, etc.
 *
 * @package App\Models
 *
 * @property int $id Identificador único del elemento
 * @property string $nombre_elemento Nombre del elemento
 * @property string|null $descripcion Descripción del elemento
 * @property string $imagen_url URL de la imagen representativa del elemento
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación del elemento
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class Elemento extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'elementos';

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre_elemento',
        'descripcion',
        'imagen_url',
    ];

    /**
     * Relación con la tabla Combinaciones.
     * Un elemento puede formar parte de múltiples combinaciones con skins.
     *
     * @return HasMany
     */
    public function combinaciones(): HasMany
    {
        return $this->hasMany(Combinacion::class, 'id_elemento');
    }
}
