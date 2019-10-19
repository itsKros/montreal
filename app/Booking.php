<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'model_name', 'model_id', 'client_name','client_email','client_phone','package','date','time','address'
    ];

    public $table = "bookings";

    //Add One to many relationship 
    public function user(){
        return $this->belongsTo('App\User');
    }
}
