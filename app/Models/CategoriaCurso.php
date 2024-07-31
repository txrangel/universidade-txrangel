<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCurso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'categorias_e_cursos');
    }
}
