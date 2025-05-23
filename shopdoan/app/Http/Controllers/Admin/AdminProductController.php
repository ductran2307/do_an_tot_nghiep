<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequestProduct;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;
class AdminProductController extends Controller
{
    public function index(Request $request){
        $products= Product::with('category:id,c_name');
        if($id=$request->id) $products->where('id',$id);
        if($name=$request->name) $products->where('pro_name','like','%'.$name.'%');
        if($category=$request->category) $products->where('pro_category_id',$category);
        $products=$products->orderByDesc('id')->paginate(10);
        $categories=Category::all();
        $viewData=[
            'products'=>$products,
            'categories'=>$categories,
            'query'     =>$request->query()
        ];
        return view('admin.product.index', $viewData);
    }
    public function create(){
        $categories=Category::all();
        $attributes=$this->syncAttributeGroup();
        $attributeOld=[];
        $keywordOld=[];
        $keywords=Keyword::all();
        // $product = new Product();
        return view('admin.product.create', compact('categories','attributes','attributeOld','keywords','keywordOld'));
    }
    public function store(AdminRequestProduct $request){
        $data = $request->validated();
        //  dd($data);
        $data['pro_slug']=Str::slug($data['pro_name']); 
        $data['created_at']=Carbon::now();
        if( $request->pro_avatar){
            $image=upload_image('pro_avatar');
            if($image['code']==1){
                $data['pro_avatar']=$image['name'];
            }
        }
        
         $id= Product::insertGetId($data);
         if($id){
            $this->syncAttribute($request->attribute,$id);
            $this->syncKeyword($request->keywords,$id);
         }
        return redirect()->back();
    }
    public function edit($id){
        $categories=Category::all();
        $attributes=$this->syncAttributeGroup();
        $keywords=Keyword::all();

        $attributeOld=DB::table('products_attributes')
            ->where('pa_product_id',$id)
            ->pluck('pa_attribute_id')
            ->toArray();
        $keywordOld=DB::table('products_keywords')
            ->where('pk_product_id',$id)
            ->pluck('pk_keyword_id')
            ->toArray();
        if(!$attributeOld){ $attributeOld=[]; }
        if(!$keywordOld){ $keywordOld=[]; }
        $product=Product::findOrFail($id);
        $viewData=[
            'categories'    =>$categories,
            'product'       =>$product,
            'attributes'    =>$attributes,
            'attributeOld'  =>$attributeOld,
            'keywords'      =>$keywords,
            'keywordOld'    =>$keywordOld

        ];
        return view('admin.product.update', $viewData);
    }
    public function update(AdminRequestProduct $request, $id){
        $product=Product::find($id);
        // dd($request->all()); 
        $data = $request->validated();
         //$data = $request->validated();
         // $data['c_slug']=Str::slug($request->c_name);
         $data['pro_slug']=Str::slug($data['pro_name']);
         $data['updated_at']=Carbon::now();
         
            if( $request->pro_avatar){
                $image=upload_image('pro_avatar');
                //  dd($image);
                if($image['code']==1){
                    $data['pro_avatar']=$image['name'];
                }
            }
        
         $update=$product->update($data);

         if($update){
            $this->syncAttribute($request->attribute,$id);
            $this->syncKeyword($request->keywords,$id);
         }
         return redirect()->back();
    }
    public function active($id){
        $product=Product::find($id);
        $product->pro_active =! $product->pro_active;
        $product->save();
        return redirect()->back();
    }
    public function hot($id){
        $product=Product::find($id);
        $product->pro_hot =! $product->pro_hot;
        $product->save();
        return redirect()->back();
    }
    public function delete($id){
        $product=Product::find($id);
        if($product) $product->delete();
        return redirect()->back();
    }
    private function syncKeyword($keywords, $idProduct){
        if(!empty($keywords)){
            $datas=[];
            foreach ($keywords as $key => $keyword) {
                # code...
                $datas[]=[
                    'pk_product_id'=> $idProduct,
                    'pk_keyword_id'=> $keyword
                ];
            }
            DB::table('products_keywords')->where('pk_product_id',$idProduct)->delete();
            DB::table('products_keywords')->insert($datas);
        }
    }
    protected function syncAttribute($attributes,$idProduct){
        if(!empty($attributes)){
            $datas=[];
            foreach($attributes as $key => $value){
                $datas[]=[
                    'pa_product_id'     =>$idProduct,
                    'pa_attribute_id'   =>$value
                ];
            }
            if(!empty($datas)){
                DB::table('products_attributes')->where('pa_product_id',$idProduct)->delete();
                DB::table('products_attributes')->insert($datas);
            }
        }
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