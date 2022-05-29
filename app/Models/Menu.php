<?php

namespace App\Models;
use App\Models\Plat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
     protected $fillable = ['nom','description'] ;


      public function PLat(){

        return  $this->belongsTo(PLat::class);
    }
}
