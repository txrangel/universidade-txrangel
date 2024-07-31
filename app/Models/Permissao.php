<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'usuario_criador_id'];

    // Relação com o modelo Usuario
    public function criador()
    {
        return $this->belongsTo(User::class, 'usuario_criador_id');
    }

    // Relação com o modelo Perfil através da tabela pivot perfis_e_permissoes
    public function perfis()
    {
        return $this->belongsToMany(Perfil::class, 'perfis_permissoes', 'permissao_id', 'perfil_id')
                    ->using(PerfilPermissao::class);
    }
}
