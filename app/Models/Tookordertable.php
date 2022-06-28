<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tookordertable extends Model
{
    use HasFactory;
    
      protected $fillable = [
        'cartid',
        'orderid',
        'advance',
        'password',
        'comissionprice',
         'totalht',
        'tva',
        'orderdate',
        
    ];
}
