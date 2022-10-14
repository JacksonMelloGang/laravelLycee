<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'clientNom',
        'clientPrenom',
        'clientAdresse',
        'clientVille',
        'clientCodePostal',
        'clientTelephone',
        'clientEmail',
        'clientDateNaissance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'clientDateNaissance' => 'date',
    ];
}
