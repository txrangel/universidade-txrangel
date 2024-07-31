<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'ativo', 'capa_path', 'usuario_criador_id'];

    public function usuarioCriador()
    {
        return $this->belongsTo(User::class, 'usuario_criador_id');
    }

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(CategoriaCurso::class, 'categorias_e_cursos');
    }
}
