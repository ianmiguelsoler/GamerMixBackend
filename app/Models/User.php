<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre_usuario',
        'email',
        'password',
        'nivel',
        'experiencia',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function galeria()
    {
        return $this->hasMany(Galeria::class, 'id_usuario');
    }

    public function logros()
    {
        return $this->belongsToMany(Logro::class, 'logros_usuarios', 'id_usuario', 'id_logro')
            ->withPivot('fecha_obtenido'); // ❌ Quitar withTimestamps()
    }
}
