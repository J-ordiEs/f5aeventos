<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $attributes = [
        'special' => false,
        'past' => false
    ];


    
    protected $fillable = [
        'id',
        'date',
        'time',
        'title',
        'speaker',
        'image',
        'description',
        'capacity',
        'requirements',
        'zoom',
    ];

   
}
