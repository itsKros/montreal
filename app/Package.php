<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model

{
    protected $fillable = ['onehour', 'fourhour', 'eighthour', 'twentyfourhour', 'weekend', 'week'];
    public $table = "packages";
}
