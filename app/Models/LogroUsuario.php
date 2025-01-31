<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogroUsuario
 *
 * Representa la tabla pivote entre usuarios y logros,
 * registrando los logros obtenidos por los usuarios.
 *
 * @package App\Models
 *
 * @property int $id_usuario ID del usuario que obtuvo el logro
 * @property int $id_logro ID del logro obtenido
 * @property \Illuminate\Support\Carbon $fecha_obtenido Fecha en que el usuario obtuvo el logro
 */
class LogroUsuario extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'logros_usuarios';

    /**
     * Indica que la tabla no tiene timestamps (created_at, updated_at).
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_usuario',
        'id_logro',
        'fecha_obtenido',
    ];
}
