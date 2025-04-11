<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemEstabelecimento extends Model
{
    /** @use HasFactory<\Database\Factories\ImagemEstabelecimentoFactory> */
    use HasFactory;

    protected $fillable = [
        'estabelecimento_id',
        'imagem_path',
    ];

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class);
    }
}
