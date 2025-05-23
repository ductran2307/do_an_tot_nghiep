<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogBaseController extends Controller
{
    public function getProductTop(){
        $productsPay=Product:: with('category:id,c_name,c_slug')->where([
            'pro_active'    => 1,
        ]) 
        ->where('pro_pay','>',0)
        ->orderByDesc('pro_pay')
        ->limit(5)
        ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star','pro_category_id')
        ->get();
        return $productsPay;
    }
    public function getArticleHot(){
        return Article::where([
            'a_active'=>1,
            'a_hot'=> 1
        ])
        ->select('id','a_name','a_slug','a_description','a_avatar')
        ->orderByDesc('id')
        ->get(4);
    }
    public function getArticleSidebar(){
            return Article::where([
            'a_active'=>1,
            'a_position_2'=>1
        ])
        ->select('id','a_name','a_slug','a_description','a_avatar')
        ->orderByDesc('id')
        ->limit(5)
        ->get();
    }
}
