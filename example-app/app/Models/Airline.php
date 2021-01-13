<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = 'Airline';
    protected $fillable = [
        'name',
        'country',
        'logo',
        'slogan',
        'head_quarters',
        'website',
        'established'
    ];
    use HasFactory;
}
