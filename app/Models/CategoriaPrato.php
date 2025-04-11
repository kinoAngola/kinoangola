<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPrato extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaPratoFactory> */
    use HasFactory;

    protected $fillable = ['nome'];

    public function pratos()
    {
        return $this->hasMany(Prato::class);
    }
}
