<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $fillable = [
        'sd_title',
        'sd_link', 
        'sd_image',
        'sd_target',
        'sd_sort'
       
    ];
}
