<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_id',
        'user_id',
        'picture',
        'manager_name',
        'manager_contact',
        'pos_type',
        'longitude',
        'latitude',
        'plv',
        'note',
        'etat'
    ];


}
