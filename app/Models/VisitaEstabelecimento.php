<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaEstabelecimento extends Model
{
    /** @use HasFactory<\Database\Factories\VisitaEstabelecimentoFactory> */
    use HasFactory;

    protected $fillable = [
        'estabelecimento_id',
        'ip_address',
        'visited_at',
    ];

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class);
    }
}
