<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    /** @use HasFactory<\Database\Factories\AvaliacaoFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'estabelecimento_id',
        'nota',
        'comentario',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class);
    }
}
