<style>
    .single-widget ul li a{
        color: black;
    }
</style>
<footer id="footer"><!--Footer-->
    <div class="footer-top" >
        <div class="container">
            <div class="row">
                <div class="col-sm-2" style="text-align: center;">
                    <div class="companyinfo">
                        <h2 style="color: black;"><span>DUC</span>Clock</h2>
                        <p style="color: black; font-size: 13px;">Thời gian trong tay bạn <br> Phong cách thuộc về bạn</p>
                    </div>
                </div>
                <div class="col-sm-2" style=" margin-top: 40px;">
                    <div class="single-widget">
                        <h2>Hệ thống</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{ route('get.register') }}">Đăng kí</a></li>
                            <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-2" style=" margin-top: 40px;">
                    <div class="single-widget">
                        <h2>Tin tức</h2>
                        <ul class="nav nav-pills nav-stacked">
                            @if (isset($menus))
                                @foreach ($menus as $menu)
                                <li><a title="{{ $menu->mn_name }}" href="{{ route('get.article.by_menu',$menu->mn_slug.'-'.$menu->id) }}">{{$menu->mn_name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-2" style=" margin-top: 40px;">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-sm-2" style=" margin-top: 40px;">
                    <div class="single-widget" >
                        <h2>Liên hệ</h2>
                        <ul class="nav nav-pills nav-stacked" >
                            <li><i class="fa fa-map-marker"></i> 23 ngõ 35 Tu Hoàng, phường Phương Canh,<br> Quận Nam Từ Liêm, Hà Nội</li>
                            <li><i class="fa fa-phone"> 0334702213</i></li>
                            <li><i class="fa fa-envelope"> shopdoan123@gmail.com</i></li>
                         
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/iframe1.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/iframe2.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/iframe3.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2025</h2>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/iframe4.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('frontend/images/home/map.png')}}" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    
    <div class="footer-bottom" style="background-color: black;">
        <div class="container">
            <div class="row">
                <p class="" style="text-align: center; font-size: 20px; color: white;">Cảm ơn quý khách đã ghé thăm shop!</p>
                <p class="" style="text-align: center; color: white;">Designed by <span><a target="_blank" href="https://www.facebook.com/tran.uc.367226">DuckDuck</a></span></p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->	
