<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 0886253645</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> ductran200223@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/tran.uc.367226"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/duckduck2k2/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ route('get.home') }}"><img src="{{asset('frontend/images/home/Duc_Clock_Vintage_15.png')}}" alt="" /></a>
                    </div>
        
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            {{-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
                            <li><a href="{{ route('get.shopping.list') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng ({{ \Cart::count() }})</a></li>
                            @if (Auth::check())
                            <li><a href=""> Xin chào {{Auth::user()->name}}</a></li>
                            <li><a href="{{ route("get.user.dashboard") }}">Quản lý tài khoản</a></li>
                            {{-- <li><a href="{{ route('get.logout') }}"><i class="fa fa-lock"></i> Đăng xuất</a></li> --}}
                            <li style="margin-top:8px">
                                <form action="{{ route('get.logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; color: inherit;">
                                        <i class="fa fa-lock"></i> Đăng xuất
                                    </button>
                                </form>
                            </li>
                            @else
                            <li><a href="{{ route('get.register') }}"><i class="fa fa-lock"></i> Đăng kí</a></li>
                            <li><a href="{{ route('get.login') }}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            @endif
                           
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse" >
                            <li><a href="{{ route('get.home') }}" class="active">Home</a></li>
                            <li class="dropdown"><a href="{{route('get.product.list')}}">Sản phẩm</a> </li> 
                            <li class="dropdown"><a href="{{route('get.blog.home')}}">Blog</a></li> 
                            <li class="dropdown"><a href="{{route('contact')}}">Liên hệ</a></li> 
                            {{-- <li><a href="contact-us.html">Contact Us</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3"  >
                    <div class="search_box pull-right" style="width:100%"   >
                        <form action="{{ route('get.product.list') }}" role="search" method="get" style="display: flex;gap:10px">
                            <input type="text" name="k" value="{{ Request::get('k') }}" class="form-control" placeholder="Tìm kiếm sản phẩm" style="color: black;" />
                            <button class="btnSearch" type="submit" style="border: 0;">
                                <i class="fa fa-search"></i>
                                <span>Tìm kiếm</span>
                            </button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
