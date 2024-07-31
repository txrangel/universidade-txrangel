<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    
    protected $fillable = ['curso_id', 'titulo', 'descricao', 'conteudo', 'video_url'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function anexos()
    {
        return $this->hasMany(AnexoAula::class);
    }

    public function avaliacoes()
    {
        return $this->hasMany(AvaliacaoAula::class);
    }

    public function comentarios()
    {
        return $this->hasMany(ComentarioAula::class);
    }
}
