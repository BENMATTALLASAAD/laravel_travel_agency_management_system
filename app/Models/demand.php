<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demand extends Model
{
    use HasFactory;
    protected $fillable=[
        'reference',
        'client',
        'date_demande',
        'type_demande'
    ];
    
}
