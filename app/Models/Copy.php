<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    //Relacion uno a muchos con Book

    public function book(){
        return $this->belongsTo('App\Models\Book');
    }

    //Relacion muchos a muchos con Person

    public function person(){
        return $this->belongsToMany('App\Models\Person');
    }



}
