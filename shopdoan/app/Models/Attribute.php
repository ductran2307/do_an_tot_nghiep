<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Attribute extends Model
{
    use HasFactory;
    protected $table='attributes';

    protected $guarded=[''];
    protected $type=[
        1   =>  [
            'name'  =>  'Đôi',
            'class' =>  'label label-info'
        ],
        2   =>  [
            'name'  =>  'Năng lượng',
            'class' =>  'label label-default'
         ],
         3  =>  [
            'name'  =>  'Loại dây',
            'class' =>  'label label-danger'
         ],
         4   =>  [
            'name'  =>  'Loại kính',
            'class' =>  'label label-success'
         ]
    ];

    public function getType(){
        return Arr::get($this->type,$this->atb_type,"[N/A]");
    }
    public function category(){
        return $this->belongsTo(Category::class,'atb_category_id');
    }

}
