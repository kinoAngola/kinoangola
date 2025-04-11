<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'estabelecimento_id',
        'latitude',
        'longitude',
        'address',
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
