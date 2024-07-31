<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnexoAula extends Model
{
    use HasFactory;
    
    protected $fillable = ['aula_id', 'nome', 'path'];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
