<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Product extends Model
{
    use HasFactory;
    
    protected $table='products';
    protected $fillable = [
        'pro_energy',
        'pro_resistant', 
        'pro_country',
        'pro_category_id',
        'pro_avatar',
        'pro_price',
        'pro_sale',
        'pro_name',
        'pro_description',
        'pro_content',
        'pro_number',
        'pro_slug'
    ];
    public $country=[
       
        "1"=>"Việt Nam",
        "2"=>"Anh",
        "3"=>"Thụy Sỹ",
        "4"=>"Mỹ",
        "5"=>"Singapore",
        "6"=>"Áo",
        "7"=>"Nhật Bản",

    ];
    
    public function getCountry(){
        return Arr::get($this->country,$this->pro_country,"[N/A]");
    }

    protected $guarded=[''];
    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id');
    }
    public function keyword(){
        return $this->belongsToMany(Keyword::class,'products_keywords','pk_product_id','pk_keyword_id');
    }
    public function attribute()
    {
        return $this->belongsToMany(Attribute::class,'products_attributes','pa_product_id','pa_attribute_id');

    }
    public function favourite()
    {
        return $this->belongsToMany(User::class,'user_favourite','uf_product_id','uf_user_id');

    }
}
