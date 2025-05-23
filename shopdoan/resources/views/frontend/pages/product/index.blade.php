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
<section>
    @include('frontend.pages.product.inc_sidebar')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 padding-right">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                      <li><a href="{{ route('get.home') }}">Home</a></li>
                      <li class="active">Sản phẩm</li>
                    </ol>
                </div>
                {{-- <div class="filter_tab"  style="">
                    <ul style="display: flex; gap: 30px; margin-bottom: 20px;">
                        @for ($i=1;$i<=6;$i++)
                            <li style="color: black !important; margin-left: 10px;">
                                <a href="{{ request()->fullUrlWithQuery(['price' => $i]) }}">
                                    @if ($i == 6)
                                    Lớn hơn 10 triệu
                                @else
                                    Giá < {{ $i * 2 }} triệu
                                @endif</a>
                            </li>
                        @endfor
                    </ul>
                </div> --}}
                <div class="features_items">
                    <h2 class="title text-center">{{$title_page ?? "Sản phẩm của chúng tôi"}}</h2>
                    <div class="row">
                        @foreach ($products as $product )
                            <div style="height:450px" class="col-md-4 col-sm-6 mb-4 px-3">
                                @include('frontend.components.product_item',['product'=>$product])
                            </div>
                        @endforeach
                    </div>
                    <div style="display: block">
                        {!! $products->appends($query ?? [])->links() !!}
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection