<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostagemForum extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'titulo', 'conteudo'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
