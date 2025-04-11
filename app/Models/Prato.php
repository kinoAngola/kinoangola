<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    /** @use HasFactory<\Database\Factories\PratoFactory> */
    use HasFactory;

    protected $fillable = [
        'estabelecimento_id',
        'categoria_prato_id',
        'nome',
        'descricao',
        'preco',
        'imagem',
    ];

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class);
    }

    public function categoriaPrato()
    {
        return $this->belongsTo(CategoriaPrato::class);
    }
}
