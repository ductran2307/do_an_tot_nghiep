@extends('layouts.app_master_frontend')

@section('content')
<h2 style="text-align: center; color: orange; margin-bottom: 50px;"> Blog</h2>

<div class="container">

    <div class="blog-main">
        <div class="left">
            <div class="post-detail">
                <h1 class="post-detail__title">{{$article->a_name}}</h1>
                <p class="post-detail__intro">{{$article->a_description}}</p>
                <div class="post_detail_content">
                   {!! $article->a_content !!}
               </div>
            </div>
        </div>
            <div class="right">
                @include('frontend.components.article_hot_sidebar_top',['articles'=>$articlesHotSidebarTop])
                @include('frontend.components.top_product',['products'=>$productTopPay])
                @include('frontend.components.hot_article',['articles'=>$articlesHot])
            </div> 
    </div>
</div>
@endsection
