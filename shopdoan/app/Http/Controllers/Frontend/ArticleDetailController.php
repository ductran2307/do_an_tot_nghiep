<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BlogBaseController;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDetailController extends BlogBaseController
{
    public function index(Request $request, $slug){
        $arraySlug=explode('-',$slug);
        $id= array_pop($arraySlug);
        if($id){
            $article=Article::find($id);
           
            $viewData=[
                'article'=>$article,
                'articlesHot'=>$this->getArticleHot(),
                'articlesHotSidebarTop' =>$this->getArticleSidebar(),
                'productTopPay'=> $this->getProductTop()
            ];
            return view('frontend.pages.article_detail.index',$viewData);
        }
        return redirect()->to('/');
       
    }
}
