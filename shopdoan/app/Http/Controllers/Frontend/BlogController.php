<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BlogBaseController;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends BlogBaseController
{
    public function index(){
        //

        //Danh sách bài viết
        $articles=Article::where([
            'a_active'=>1
        ])
        ->select('id','a_name','a_slug','a_description','a_avatar')
        ->orderByDesc('id')
        ->paginate(10);
        //Bài viết hot
       
        //Bài viết nổi bật trung tâm
        $articlesHotTop=Article::where([
            'a_active'=>1,
            'a_position_1'=>1
        ])
        ->select('id','a_name','a_slug','a_description','a_avatar')
        ->orderByDesc('id')
        ->limit(5)
        ->get();
        //data
        $viewData=[
            'articles'              =>$articles,
            'articlesHot'           =>$this->getArticleHot(),
            'articlesHotSidebarTop' =>$this->getArticleSidebar(),
            'articlesHotTop'        =>$articlesHotTop,
            'productTopPay'         => $this->getProductTop()
        ];
        return view('frontend.pages.article.index',$viewData);
    }
}
