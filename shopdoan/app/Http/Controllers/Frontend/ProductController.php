<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends FrontendController
{
    public function index( Request $request){
        $paramAtbSearch=$request->except('price','page','k','country');
        $paramAtbSearch= array_values($paramAtbSearch);
        $products=Product::where('pro_active' ,1);
        //lọc theo thuộc tính
        if(!empty($paramAtbSearch)){
            $products->whereHas('attribute', function($query) use($paramAtbSearch){
                $query->whereIn('pa_attribute_id',$paramAtbSearch);
            });
        }
        //search
        if($name=$request->k) $products->where('pro_name','like','%'.$name.'%');
        if($country=$request->country) $products->where('pro_country',$country);

        //lọc theo giá
        if($request->price){
            $price=$request->price;
           if ($price == 6) {
                 $products->where('pro_price','>',10000000);
           } else {
            $products->where('pro_price','<=',1000000*($price*2));
           }
        }
        //
        $attributes=$this->syncAttributeGroup();
        $modelProduct=new Product();
        
        $products=$products->orderByDesc('id')
        ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale','pro_review_total','pro_revieew_star')
        ->paginate(12);
       
        $viewData=[
            'attributes'=>$attributes,
            'products'  =>$products,
            'query'     =>$request->query(),
            'country'   =>$modelProduct->country
        ];
        
        return view('frontend.pages.product.index', $viewData);
    }
    public function syncAttributeGroup(){
        $attributes=Attribute::get();
        $groupAttribute=[];
        foreach ($attributes as $key => $attribute) {
            // dd($attribute->gettype($attribute->atb_type)['name']);
            $key= $attribute->gettype($attribute->atb_type)['name'];
            $groupAttribute[$key][]=$attribute->toArray();
        }
        return $groupAttribute;
    }
}
