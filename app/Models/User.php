<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class User
 *
 * Representa a un usuario en la aplicación.
 *
 * @package App\Models
 *
 * @property int $id Identificador único del usuario
 * @property string $nombre_usuario Nombre único del usuario
 * @property string $email Dirección de correo electrónico del usuario
 * @property string $password Contraseña cifrada del usuario
 * @property int $nivel Nivel del usuario en la aplicación
 * @property int $experiencia Puntos de experiencia del usuario
 * @property \Illuminate\Support\Carbon|null $created_at Fecha de creación del usuario
 * @property \Illuminate\Support\Carbon|null $updated_at Fecha de última actualización
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Campos que pueden ser asignados masivamente.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre_usuario',
        'email',
        'password',
        'nivel',
        'experiencia',
    ];

    /**
     * Campos que deben estar ocultos al serializar el modelo.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Conversión de atributos a tipos específicos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relación con la tabla Galería.
     * Un usuario puede tener varias combinaciones guardadas en su galería.
     *
     * @return HasMany
     */
    public function galeria(): HasMany
    {
        return $this->hasMany(Galeria::class, 'id_usuario');
    }

    /**
     * Relación con la tabla Logros.
     * Un usuario puede tener múltiples logros asignados.
     *
     * @return BelongsToMany
     */
    public function logros(): BelongsToMany
    {
        return $this->belongsToMany(Logro::class, 'logros_usuarios', 'id_usuario', 'id_logro')
            ->withPivot('fecha_obtenido'); // ❌ Eliminé withTimestamps() porque la tabla pivote ya tiene una fecha personalizada.
    }
}
