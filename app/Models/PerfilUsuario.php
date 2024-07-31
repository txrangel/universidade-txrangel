<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    use HasFactory;

    protected $fillable = ['perfil_id', 'usuario_id'];

    public function perfil()
    {
        return $this->belongsTo(PerfilUsuario::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
