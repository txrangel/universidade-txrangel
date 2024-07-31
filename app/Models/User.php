<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function cursosCriados()
    {
        return $this->hasMany(Curso::class, 'usuario_criador_id');
    }

    public function avaliacoesAulas()
    {
        return $this->hasMany(AvaliacaoAula::class);
    }

    public function comentariosAulas()
    {
        return $this->hasMany(ComentarioAula::class);
    }

    public function postagensForum()
    {
        return $this->hasMany(PostagemForum::class);
    }

    public function perfis()
    {
        return $this->belongsToMany(PerfilUsuario::class, 'perfis_e_usuarios');
    }
}
