<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canales extends Model
{
    protected $table="canales";
    protected $fillable = [
        'username', 'plataforma', 'wins','wins_extra'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
