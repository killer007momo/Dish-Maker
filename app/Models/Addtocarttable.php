<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtocarttable extends Model
{
    use HasFactory;
     protected $fillable = ['dish_id','cart_id','quantity'] ;
    
}
