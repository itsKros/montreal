<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutinfo extends Model
{
    protected $fillable = ['abt_first_content', 'abt_second_content'];

    protected $table = 'aboutinfo';
}
