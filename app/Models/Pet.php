<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pet';
    protected $fillable = [
        'name_user',
        'cell_phone',
        'pet_type',
        'pet_name',
        'microchip',
        'age',
        'weight',
        'height',
        'race',
        'illness',
    ];
}
