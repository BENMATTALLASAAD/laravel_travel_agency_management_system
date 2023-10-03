<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_offre',
        'image',
        'nbr_personnes',
        'date_depart',
        'durée_offre',
        'destination_offre',
        'prix_offre',
        
        
    ];
}
