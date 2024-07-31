<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcaoQuestaoAvaliacao extends Model
{
    use HasFactory;

    protected $fillable = ['questao_id', 'texto_opcao', 'correta'];

    public function questao()
    {
        return $this->belongsTo(QuestaoAvaliacao::class);
    }
}
