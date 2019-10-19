<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['desc', 'author_img', 'author_name', 'author_desig'];
    public $table = "testimonials";
}
