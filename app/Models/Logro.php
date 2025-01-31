<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Logro
 *
 * Representa un logro dentro del sistema que los usuarios pueden obtener.
 *
 * @package App\Models
 *
 * @property int $id Identificador único del logro
 * @property string $nombre_logro Nombre del logro
 * @property string|null $descripcion Descripción del logro
 * @property int $puntos Puntos otorgados por el logro
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación del logro
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class Logro extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'logros';

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre_logro',
        'descripcion',
        'puntos',
    ];

    /**
     * Relación con la tabla Usuarios a través de la tabla pivote logros_usuarios.
     * Un logro puede ser obtenido por múltiples usuarios.
     *
     * @return BelongsToMany
     */
    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'logros_usuarios', 'id_logro', 'id_usuario')
            ->withPivot('fecha_obtenido'); // Se mantiene el campo extra de la tabla pivote.
    }
}
