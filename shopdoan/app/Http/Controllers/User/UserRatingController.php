<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRatingController extends Controller
{
    public function addRatingProduct( Request $request){
        if($request->ajax()){
           $rating                 =new Rating();
           $rating->r_user_id      =Auth::id();
           $rating->r_product_id   =$request->product_id;
           $rating->r_number       =$request->review;
           $rating->r_content      =$request->content_review;
           $rating->created_at     = Carbon::now();
            $rating->save();

            if($rating->id){
                $this->staticRatingProduct($request->product_id, $request->review);
            }
            return response()->json(['messages' => 'Đánh giá sản phẩm thành công']);
            
        }
    }
    private function staticRatingProduct($productID,$number){
        $product=Product::find($productID);
        $product->pro_review_total++;
        $product->pro_revieew_star+= $number;
        $product->save();
    }
}
