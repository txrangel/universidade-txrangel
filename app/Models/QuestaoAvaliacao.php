<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoAvaliacao extends Model
{
    use HasFactory;

    protected $fillable = ['avaliacao_id', 'questao', 'resposta_correta'];

    public function avaliacao()
    {
        return $this->belongsTo(AvaliacaoAula::class);
    }

    public function opcoes()
    {
        return $this->hasMany(OpcaoQuestaoAvaliacao::class);
    }
}
