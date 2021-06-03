<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'zipCode',
        'town',
        'country',
        'description',
        'review'
    ];

    public $timestamps = false;
}

