<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Combinacion
 *
 * Representa una combinación entre una skin y un elemento en el sistema.
 *
 * @package App\Models
 *
 * @property int $id Identificador único de la combinación
 * @property int $id_skin ID de la skin utilizada en la combinación
 * @property int $id_elemento ID del elemento utilizado en la combinación
 * @property string $nombre_combinacion Nombre de la combinación generada
 * @property \Illuminate\Support\Carbon $fecha_creacion Fecha en la que se creó la combinación
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación del registro
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class Combinacion extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos.
     *
     * @var string
     */
    protected $table = 'combinaciones';

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_skin',
        'id_elemento',
        'nombre_combinacion',
        'fecha_creacion',
    ];

    /**
     * Relación con la tabla Skins.
     * Cada combinación pertenece a una única skin.
     *
     * @return BelongsTo
     */
    public function skin(): BelongsTo
    {
        return $this->belongsTo(Skin::class, 'id_skin');
    }

    /**
     * Relación con la tabla Elementos.
     * Cada combinación está relacionada con un único elemento.
     *
     * @return BelongsTo
     */
    public function elemento(): BelongsTo
    {
        return $this->belongsTo(Elemento::class, 'id_elemento');
    }

    /**
     * Relación con la tabla Galeria.
     * Una combinación puede ser guardada en múltiples registros de galería por diferentes usuarios.
     *
     * @return HasMany
     */
    public function galeria(): HasMany
    {
        return $this->hasMany(Galeria::class, 'id_combinacion');
    }
}
