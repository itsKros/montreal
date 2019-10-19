<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicesinfo extends Model
{
    protected $fillable = ['ser_first_content', 'ser_second_content', 'ser_request_encounter'];

    protected $table = 'servicesinfo';
}
