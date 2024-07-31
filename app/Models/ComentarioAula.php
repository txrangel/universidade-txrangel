<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioAula extends Model
{
    use HasFactory;

    protected $fillable = ['aula_id', 'usuario_id', 'comentario'];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
