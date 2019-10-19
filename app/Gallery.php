<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = "gallery";
    
    //Add One to many relationship 
    public function user(){
        return $this->belongsTo('App\User');
    }
}