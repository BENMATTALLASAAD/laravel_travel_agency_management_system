<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'login',
        'password',
        'nom',
        'prénom',
        'image',
        'adresse',
        'email',
        'num_telephone',
        'sexe',
        'date_naissance'
    ];
}
