<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Skin
 *
 * Representa una skin en el sistema, que puede ser combinada con elementos.
 *
 * @package App\Models
 *
 * @property int $id Identificador único de la skin
 * @property string $nombre_skin Nombre de la skin
 * @property string|null $descripcion Descripción de la skin
 * @property string $imagen_url URL de la imagen de la skin
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación de la skin
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class Skin extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'skins';

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre_skin',
        'descripcion',
        'imagen_url',
    ];

    /**
     * Relación con la tabla Combinaciones.
     * Una skin puede tener múltiples combinaciones con elementos.
     *
     * @return HasMany
     */
    public function combinaciones(): HasMany
    {
        return $this->hasMany(Combinacion::class, 'id_skin');
    }
}
