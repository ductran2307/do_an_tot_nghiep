<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Menu;
use App\Http\Requests\AdminRequestArticle;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function index(){
        $articles=Article::with('menu:id,mn_name')->paginate(10);
        $viewData=[
            'articles'=>$articles
        ];
        return view('admin.article.index',$viewData);
    }
    public function create(){
        $menus=Menu::all();
        $article = new Article();
        return view('admin.article.create',compact('menus','article'));
    }
    public function store(AdminRequestArticle $request){
        $data = $request->validated();
         //dd($data);
        $data['a_slug']=Str::slug($data['a_name']); 
        $data['created_at']=Carbon::now();
        if($request->a_position_1){
            $data['a_position_1']=1;
        }
        if($request->a_position_2){
            $data['a_position_2']=1;
        }
        if( $request->a_avatar){
            $image=upload_image('a_avatar');
            if($image['code']==1){
                $data['a_avatar']=$image['name'];
            }
        }
        
         $id= Article::insertGetId($data);
         
        return redirect()->back();
    }
    public function edit($id){
        $menus=Menu::all();

        $article=Article::findOrFail($id);
        $viewData=[
            'menus'    =>$menus,
            'article'  =>$article,
            

        ];
        return view('admin.article.update', $viewData);
    }
    public function update(AdminRequestArticle $request, $id){
        $article=Article::find($id);
        $data = $request->validated();
         $data['a_slug']=Str::slug($data['a_name']);
         $data['updated_at']=Carbon::now();
            if($request->a_position_1){
                $data['a_position_1']=1;
            }else{
                $data['a_position_1']=0;
            }
            if($request->a_position_2){
                $data['a_position_2']=1;
            }else{
                $data['a_position_2']=0;
            }
            if( $request->a_avatar){
                $image=upload_image('a_avatar');
                //  dd($image);
                if($image['code']==1){
                    $data['a_avatar']=$image['name'];
                }
            }
        
         $update=$article->update($data);
         return redirect()->back();
    }
    public function active($id){
        $article=Article::find($id);
        $article->a_active =! $article->a_active;
        $article->save();
        return redirect()->back();
    }
    public function hot($id){
        $article=Article::find($id);
        $article->a_hot =! $article->a_hot;
        $article->save();
        return redirect()->back();
    }
    public function delete($id){
        $article=Article::find($id);
        if($article) $article->delete();
        return redirect()->back();
    }
}
