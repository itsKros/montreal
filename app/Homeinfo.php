<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeinfo extends Model
{
    protected $fillable = ['welcometitle', 'welcomecontent', 'ete_first_title', 'ete_first_content', 'ete_second_title', 'ete_second_content'];

    protected $table = 'homeinfo';
}
