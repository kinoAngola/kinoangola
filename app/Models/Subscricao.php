<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscricao extends Model
{
    /** @use HasFactory<\Database\Factories\SubscricaoFactory> */
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'destaque',
    ];

    protected $table = 'subscricoes';

    public function estabelecimentos()
    {
        return $this->hasMany(Estabelecimento::class);
    }
}
