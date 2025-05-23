@extends('layouts.app_master_frontend')
@section('css')
<style type="text/css">
    .pagination{
        margin: 10px auto;
        display: flex;
        margin-left: 9px;
    }
    .pagination li{
        padding: 5px;
        margin: 0 2px;
        border: 1px solid #dedede;
    }
    .pagination li a,.pagination li span{
        line-height: 25px;
        display: block;
        text-align: center;
        width: 25px;
        height: 25px;
    }
</style>
@endsection
@section('content')
<div class="container">
    {{-- <div class="breadcrumb" style="background: white; padding: 0; margin-left: -20px;">
        <ul style="display: flex; gap: 10px;">
            <li>
                <a href="/" title="Home"><span>Trang chủ <i class="fa fa-angle-right"></i></span></a>
            </li>
            <li>
                <a href="{{ route('get.blog.home') }}"><span>Bài viết <i class="fa fa-angle-right"></i></span></a>
            </li>
            @if (isset($menu))
                <li>
                    <a href="" title="{{ $menu->mn_name }}"><span>{{$menu->mn_name}} <i class="fa fa-angle-right"></i></i></span></a>
                </li>
            @endif
        </ul>
    </div> --}}
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ route('get.home') }}">Home</a></li>
          <li><a href="{{ route('get.blog.home') }}">Bài viết</a></li>
          @if (isset($menu))
          <li>
              <a href="" title="{{ $menu->mn_name }}"><span>{{$menu->mn_name}} <i class="fa fa-angle-right"></i></i></span></a>
          </li>
      @endif
        </ol>
    </div>
    <h2 style="text-align: center; color: orange; margin-bottom: 50px;"> Blog</h2>

    <div class="blog-main">
        <div class="left">
            @if (isset($articleTop))
                <div class="post-hot">
                    @if($articleTop=$articlesHotTop->first())
                    <div class="hot-left">
                        <div class="avatar">
                            <a href="{{ route('get.blog.detail', $articleTop->a_slug.'-'.$articleTop->id ) }}" title="" class="image cover">
                                <img class="lazyload" alt="" src="{{ pare_url_file($item->a_avatar)}}">
                            </a>
                        </div>

                        <a href="" title="" class="title" >{{$articleTop->a_name}}</a>
                        <p class="intro-short">
                            {{ $articleTop->a_description }}
                        </p>
                    </div>
                    @endif
                    <div class="hot-right">
                        @foreach ($articlesHotTop as $i=>$item )
                            @if ($i==0)
                            <div class="top">
                                <div class="avatar">
                                    <a href="{{ route('get.blog.detail', $item->a_slug.'-'.$item->id ) }}" title="" class="image cover">
                                        <img data-src="" class="lazyload" alt="" src="{{ pare_url_file($item->a_avatar)}}">
                                    </a>
                                </div>
                                <a href="{{ route('get.blog.detail', $item->a_slug.'-'.$item->id ) }}" title="" class="title" style="font-size: 20px; color: black;">{{$item->a_name}}</a>
                            </div>
                            @else  
                            <div class="bot">
                                <a href="{{ route('get.blog.detail', $item->a_slug.'-'.$item->id ) }}" title="" style=" color: black;">{{$item->a_name}}</a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div class="post-list" >
                @foreach ($articles as $article)
                    @include('frontend.pages.article.include._inc_blog_item',['article'=>$article])
                @endforeach
                <div style="display: block">
                    {!! $articles->appends([])->links() !!}
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
