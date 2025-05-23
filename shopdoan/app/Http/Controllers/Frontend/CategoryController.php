<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
   public function index(Request $request, $slug){
      $arraySlug=explode('-',$slug);
        $id= array_pop($arraySlug);
        if($id){
         $category=Category::find($id);
         $products=Product::where([
            'pro_active'   => 1,
            'pro_category_id'=>$id
         ])
         -> orderByDesc('id')
         ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
         ->paginate(12);
         $viewData=[
            'products'     =>$products,
            'title_page'   =>$category->c_name

         ];
        }
        
    return view('frontend.pages.product.index',$viewData);
   }
}
