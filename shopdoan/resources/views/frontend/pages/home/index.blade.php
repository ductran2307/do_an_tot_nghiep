@extends('layouts.app_master_frontend')
@section('content')
@include('frontend.pages.home.include._inc_slide',['slides'=>$slides])
<style>
    .suggest .product-item a img{
        width: 180.25px;
        height: 180.25px;
    }
</style>
<section>
    <div class="container">
        <div class="row">
         
          @include("frontend.components.sidebar")
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Sản phẩm mới</h2>
                    <div class="row">
                        @if (isset($productsNew))
                        @foreach ($productsNew as $product )
                        <div style="height:450px" class="col-md-4 col-sm-6 mb-4 px-3">
                            @include('frontend.components.product_item',['product'=>$product])
                        </div>
                        @endforeach
                        @endif
                       
                    </div>   
                </div><!--features_items-->
                <div class="features_items" style="margin-top: 20px;"><!--features_items-->
                    <h2 class="title text-center">Sản phẩm nổi bật</h2>
                    <div class="row">
                        @if (isset($productsHot))
                        @foreach ($productsHot as $product )
                        <div style="height:450px" class="col-md-4 col-sm-6 mb-4 px-3">
                            @include('frontend.components.product_item',['product'=>$product])
                        </div>
                        @endforeach
                        @endif
                       
                    </div>   
                </div><!--features_items-->
                <div class="features_items" style="margin-top: 20px;"><!--features_items-->
                    <h2 class="title text-center">Tin tức nổi bật</h2>
                    <div class="row">
                        @foreach ($articleHot as $article )
                        <div class="col-md-4 col-sm-6 mb-4 px-3">
                            @include('frontend.pages.home.include._inc_article',['article'=>$article])
                        </div>
                        @endforeach

                    </div>   
                </div><!--features_items-->
            
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Sản phẩm gợi ý</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <div class="productinfo text-center">
                                    @if (isset($productsSuggest1))
                                    @foreach ($productsSuggest1->take(3) as $product )
                                    <div class=" suggest col-md-4 col-sm-6 mb-4 px-3">
                                        @include('frontend.components.product_item',['product'=>$product])
                                    </div>
                                    @endforeach
                                    @endif            
                                </div>
                            </div>
                            <div class="item">	
                                <div class="productinfo text-center">
                                    @if (isset($productsSuggest2))
                                    @foreach ($productsSuggest2->take(3) as $product )
                                    <div class=" suggest col-md-4 col-sm-6 mb-4 px-3">
                                        @include('frontend.components.product_item',['product'=>$product])
                                    </div>
                                    @endforeach
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>			
                    </div>
                </div><!--/recommended_items-->
                
            </div>
        </div>
    </div>
</section>

@endsection