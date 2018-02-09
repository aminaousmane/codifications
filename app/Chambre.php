<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable = [
        'code', 'pavillon', 'etage','couloir',
    ];
}
