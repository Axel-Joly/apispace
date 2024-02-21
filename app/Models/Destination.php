<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'fr_name',
        'en_description',
        'fr_description',
        'en_distance',
        'fr_distance',
        'en_duration',
        'fr_duration',
        'image',
    ];
}
