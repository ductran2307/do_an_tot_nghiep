<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Article;
use Illuminate\Http\Request;

use App\Mail\OrderShipped;

class HomeController extends FrontendController
{
    public function index(){

      

        //Sản phẩm mới
        $productsNew=Product::where('pro_active',1)
        ->orderByDesc('id')
        ->limit(3)
        ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
        ->get();
        //Sản phẩm nổi bật
        $productsHot=Product::where([
            'pro_active'    => 1,
            'pro_hot'       => 1
        ])
        ->orderByDesc('id')
        ->limit(4)
        ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
        ->get();
        //sản phẩm gợi ý1
        $productsSuggest1=Product::where( 'pro_active' ,1)
                ->inRandomOrder('id')
                ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale')
                ->limit(12)
                ->get();
        // sản phẩm gọi ý 2
        $productsSuggest2=Product::where( 'pro_active' ,1)
                ->orderByDesc('id')
                ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale')
                ->limit(12)
                ->get();
        //Sản phẩm mua nhiều
        $productsPay=Product::where([
            'pro_active'    => 1,
        ]) 
        ->where('pro_pay','>',0)
        ->orderByDesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
        ->get();
          //Load slide
          $slides=Slide::where('sd_active',1)
          ->orderBy('sd_sort','asc')
          ->get();
          //tin tức nổi bật
          $articleHot=Article::where([
                'a_active'=>1,
                'a_hot'=> 1
            ])
            ->select('id','a_name','a_slug','a_description','a_avatar','created_at')
            ->orderByDesc('id')
            ->limit(3)
            ->get();
        $viewData=[
            'productsNew'       => $productsNew,
            'productsHot'       => $productsHot,
            'productsSuggest1'   => $productsSuggest1,
            'productsSuggest2'   => $productsSuggest2,
            'productsPay'       => $productsPay,
            'slides'            => $slides,
            'title_page'        =>"Đồ án tốt nghiệp",
            'articleHot'        =>$articleHot


        ];
        return view('frontend.pages.home.index',$viewData);
    }
    public function contact(){
        return view('frontend.pages.home.contact');
    }
}
