<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couloir extends Model
{
    protected $fillable = [
        'direction', 'pavillon',
    ];
}
