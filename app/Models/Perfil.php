<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'usuario_criador_id'];

    // Relação com o modelo Usuario (assumindo que o nome do modelo de usuário é Usuario)
    public function criador()
    {
        return $this->belongsTo(User::class, 'usuario_criador_id');
    }

    // Relação com o modelo Permissao através da tabela pivot perfis_e_permissoes
    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class, 'perfis_permissoes', 'perfil_id', 'permissao_id')
                    ->using(PerfilPermissao::class);
    }
}
