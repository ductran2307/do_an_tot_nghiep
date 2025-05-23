<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>DUC</span>Clock</h1>
                                <h2>Thời gian trong tay bạn <br>Phong cách thuộc về bạn</h2>
                                <p>Tự hào mang đến cho khách hàng những sản phẩm chất lượng. </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/home/Duc_Clock_Vintage_80.png')}}" class="girl img-responsive" alt="" />
                                {{-- <img src="{{asset('frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
                            </div>
                        </div>
                        @foreach ($slides as $item )
                        <div class="item">
                            <div class="col-sm-15" style="margin-left: -90px; height: 400px;">
                               <a href="{{ $item->sd_link }}" title="{{ $item->sd_title }}">
                                <img style="max-width:100%; width:100%; height: 100%; " src="{{ pare_url_file($item->sd_image)}}" >
                            </a>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->