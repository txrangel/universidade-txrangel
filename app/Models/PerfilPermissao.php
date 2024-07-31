<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilPermissao extends Model
{
    use HasFactory;

    protected $fillable = ['perfil_id', 'permissao_id', 'usuario_criador_id'];
}
