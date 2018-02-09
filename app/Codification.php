<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codification extends Model
{
    protected $fillable = [
        'date_debut', 'date_fin', 
    ];
}
