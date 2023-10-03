<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_hotel',
        'adresse_hotel',
        'catégorie_hotel',
        'image',
        'date_hotel',
        'nbr_personnes',
        'nbr_personnes',
        'durée',
        'prix_hotel',
        'website_hotel',
        'email_hotel'
        
    ];
}
