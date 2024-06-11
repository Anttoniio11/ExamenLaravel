<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Telefono',
        'Editorial',
        'Isbn',
        'Paginas',
    ];

    //Relacion uno a muchos con Copy

    public function copy(){
        return $this->hasMany('App\Models\Copy');
    }


    
}
