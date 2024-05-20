<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mueble extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre","precio","cantidad"
    ];

    public function tipos(){
        return $this ->belongsToMany(tipo::class);
  
    }
}
