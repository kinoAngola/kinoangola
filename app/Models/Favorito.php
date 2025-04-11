<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    /** @use HasFactory<\Database\Factories\FavoritoFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'estabelecimento_id',
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
