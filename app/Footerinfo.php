<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footerinfo extends Model
{
    protected $fillable = ['aboutmg', 'joinus', 'email', 'email_2', 'phone'];

    protected $table = 'footerinfo';
}
