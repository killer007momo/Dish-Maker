<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
   
     protected $fillable = [
        'description',
        'options',
        'name',
        'price',
        'ondemand',
        'labels',
        'deliverytimestamp',
        'holiday_id',
        'user_id',
    ];
}
