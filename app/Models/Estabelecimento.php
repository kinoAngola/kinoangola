<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    /** @use HasFactory<\Database\Factories\EstabelecimentoFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'descricao',
        'categoria_id',
        'subscricao_id',
        'opening_hours',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function subscricao()
    {
        return $this->belongsTo(Subscricao::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function pratos()
    {
        return $this->hasMany(Prato::class);
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function favoritos()
    {
        return $this->hasMany(Favorito::class);
    }

    public function imagens()
    {
        return $this->hasMany(ImagemEstabelecimento::class);
    }

    public function visitas()
    {
        return $this->hasMany(VisitaEstabelecimento::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
