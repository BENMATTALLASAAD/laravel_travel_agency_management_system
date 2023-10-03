<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_vol',
        'destination',
        'date_vol',
        'compagnie',
        'nbr_places',
        'prix',
        
        
    ];
}
