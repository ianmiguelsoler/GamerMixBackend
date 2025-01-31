<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Galeria
 *
 * Representa la galería de combinaciones guardadas por los usuarios.
 *
 * @package App\Models
 *
 * @property int $id Identificador único del registro en la galería
 * @property int $id_usuario ID del usuario que guardó la combinación
 * @property int $id_combinacion ID de la combinación guardada
 * @property \Illuminate\Support\Carbon $fecha_guardado Fecha en que se guardó la combinación
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación del registro
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class Galeria extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'galeria';

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_usuario',
        'id_combinacion',
        'fecha_guardado',
    ];

    /**
     * Relación con la tabla Usuarios.
     * Una galería pertenece a un usuario.
     *
     * @return BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    /**
     * Relación con la tabla Combinaciones.
     * Una galería está vinculada a una combinación específica.
     *
     * @return BelongsTo
     */
    public function combinacion(): BelongsTo
    {
        return $this->belongsTo(Combinacion::class, 'id_combinacion');
    }
}
