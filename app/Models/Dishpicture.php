<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishpicture extends Model
{
    use HasFactory;
     protected $fillable = [
        'dish_id',
        'picturepath',
    ];
    
}