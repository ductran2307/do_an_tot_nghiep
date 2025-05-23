<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Services\ProcessViewService;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends FrontendController
{
    public function getProductDetail(Request $request, $slug){
        $arraySlug=explode('-',$slug);
        $id= array_pop($arraySlug);
        if($id){
            $product=Product::with('category:id,c_name,c_slug','keyword')->findOrFail($id);
            ProcessViewService::view('products','pro_view','product',$id);
           
            $ratings=Rating::with('user:id,name')
            ->where('r_product_id',$id)
            ->orderByDesc('id')
            ->limit(5)
            ->get();
           
            $ratingsDashboard=Rating::groupBy('r_number')
            ->where('r_product_id',$id)
            ->select(DB::raw('count(r_number) as count_number'),DB::raw('sum(r_number) as total'))
            ->addSelect('r_number')
            ->get()->toArray();

            $ratingDefault=$this->mapRatingDefault();
            foreach ($ratingsDashboard as $key => $item) {
                $ratingDefault[$item['r_number']]=$item;
            }
            

            $viewData=[
                'ratingDefault'=>$ratingDefault,
                'product'       =>$product,
                'title_page'    =>$product->pro_name,
                'ratings'       =>$ratings,
                'productSuggest'=> $this->getProductSuggests($product->pro_category_id)
            ];
            return view('frontend.pages.product_detail.index',$viewData);
        }
       
        return redirect()->to('/');
    }

    //List đánh giá sản phẩm
    public function getListRatingProduct(Request $request,$slug){
        $arraySlug=explode('-',$slug);
        $id= array_pop($arraySlug);
        if($id){
            //1. Lấy sản phẩm
            $product=Product::with('category:id,c_name,c_slug','keyword')->findOrFail($id);
            //2.Lấy đánh giá by id
            $ratings=Rating::with('user:id,name')
            ->where('r_product_id',$id);
            if($number=$request->s) $ratings->where('r_number',$number);
            $ratings=$ratings->orderByDesc('id')
            ->paginate(5);
            
            //3.Hiển thị thống kê
            $ratingsDashboard=Rating::groupBy('r_number')
            ->where('r_product_id',$id)
            ->select(DB::raw('count(r_number) as count_number'),DB::raw('sum(r_number) as total'))
            ->addSelect('r_number')
            ->get()->toArray();

            $ratingDefault=$this->mapRatingDefault();
            foreach ($ratingsDashboard as $key => $item) {
                $ratingDefault[$item['r_number']]=$item;
            }
            
            $viewData=[
                'product'       =>$product,
                'ratings'       =>$ratings,
                'title_page'    =>"Review đánh giá sản phẩm ". $product->pro_name,
                'query'         =>$request->query(),
                'ratingDefault' =>$ratingDefault,
            ];
            return view('frontend.pages.product_detail.product_ratings',$viewData);
        }
        return redirect()->to('/');
    }

    private function mapRatingDefault(){
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                "count_number" => 0,
                "total"        => 0,
                "r_number"     => 0,
            ];
        }
        return $ratingDefault;

    }
    private function getProductSuggests($categoryID){
        
        $products=Product::where([
            'pro_active'   => 1,
            'pro_category_id'=>$categoryID
         ])
            // -> orderByDesc('id')
            ->inRandomOrder('id')
            ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
            ->limit(12)
             ->get();
             return $products;
    }
}
