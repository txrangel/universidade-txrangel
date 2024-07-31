<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoAula extends Model
{
    use HasFactory;

    protected $fillable = ['aula_id', 'usuario_id', 'nota', 'comentario'];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function questoes()
    {
        return $this->hasMany(QuestaoAvaliacao::class);
    }
}
