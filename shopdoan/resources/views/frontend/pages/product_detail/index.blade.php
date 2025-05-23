@extends('layouts.app_master_frontend')
@section('content')
@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
<style>
    .suggest .product-item a img{
        width: 180.25px;
        height: 180.25px;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            @include('frontend.components.sidebar')
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            {{-- <img src="{{asset('frontend/images/product-details/dongho.jpg')}}" alt="" /> --}}
                            <img alt="" src="{{ pare_url_file($product->pro_avatar)}}" class="">
                            {{-- <h3>ZOOM</h3> --}}
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                            
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                      <a href=""><img alt="" style="width:80px; height: 80px;" src="{{ pare_url_file($product->pro_avatar)}}" class=""></a>
                                    </div>
                                    
                                </div>

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            {{-- <img src="{{asset('frontend/images/product-details/new.jpg')}}" class="newarrival" alt="" /> --}}
                            <div class="prices">
                                <h1>{{$product->pro_name}}</h1>
                                @if ($product->pro_sale)
                                    <p>Giá niêm yết:
                                        <span class="value">{{number_format($product->pro_price,0,',','.')}}đ</span>
                                    </p>
                                    <?php
                                        $price=((100-$product->pro_sale)*$product->pro_price)/100;
                                    ?>
                                        <p>
                                           Giá bán: <span class="value price-new">{{number_format($price,0,',','.')}}đ</span>
                                           <span class="sale">-{{$product->pro_sale}}%</span>
                                        </p>
                                       
                                @else
                                <p>
                                    Giá bán: <span class="value price-new">{{number_format($product->pro_price,0,',','.')}}đ</span>
                                </p>
                                @endif
                                <p>
                                    <span>View :&nbsp;</span>
                                    <span>{{$product->pro_view}}</span>
                                </p>
                            </div>
                            {{-- <img src="{{asset('frontend/images/product-details/rating.png')}}" alt="" /> --}}
                           <div class="btn-cart" style="display: flex; gap: 10px;">
                            <span style="margin-left: -20px;">
    
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <a href="{{ route('get.shopping.add',$product->id) }}" class="mua-ngay" >Mua ngay</a>
                                </button>
                            </span>
                            <span style="margin-left: -20px;">
    
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-heart"></i>
                                    <a href="{{ route('ajax_get.user.add_favourite',$product->id) }}" class="mua-ngay {{ Auth::id() ? 'js-add-favourite' : 'js-show-login' }}" >Yêu thích</a>
                                </button>
                            </span>
                           </div>
                           @if($product->category->id ==1)
                           <div class="information">
                                <h2 class="information-title" style="font-size: 18px;" >Thông số kỹ thuật</h2>
                                <div class="infomation-group">
                                    <div class="p-item">
                                        <p class="text1">Danh mục: </p>
                                        <h3 class="text2" >
                                            @if (isset($product->category->c_name))
                                            <a href="{{ route('get.category.list', $product->category->c_slug . '-' . $product->pro_category_id)}}">{{$product->category->c_name}}</a>
                                            @else
                                            "[N\A]"
                                            @endif
                                            
                                        </h3>
                                    </div>
                                   
                                        <div class="p-item">
                                            <p class="text1">Xuất xứ: </p>
                                            <h3 class="text2" >{{$product->getCountry($product->pro_country)}}</h3>
                                        </div>
                                        <div class="p-item">
                                            <p class="text1">Năng lượng: </p>
                                            <h3 class="text2" >{{$product->pro_energy}}</h3>
                                        </div>
                                        <div class="p-item">
                                            <p class="text1">Độ chịu nước: </p>
                                            <h3 class="text2" >{{$product->pro_resistant}} ATM</h3>
                                        </div>
                                </div>
                                @endif 
                                @if (isset($product->keyword))
                                <h2 class="information-title" style="font-size: 18px;" >Từ khóa</h2>  
                                <div class="infomation-group">
                                    <div class="k-item">
                                        @foreach ($product->keyword as $keyword )
                                            <a href="" style="border: 1px solid #fe980f;
                                            display: inline-block;font-size: 13px;
                                            padding: 0 5px;border-radius: 5px;
                                            margin-right: 10px;
                                            color: #fe980f;">{{$keyword->k_name}}</a>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                @endif
                        </div>
                            {{-- <a href=""><img src="{{asset('frontend/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a> --}}
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                @include('frontend.pages.product_detail.include._inc_ratings')
                {{-- <div class="category-tab shop-details-tab"><!--category-tab-->
                    <h3>Đánh giá</h3>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p><b>Write Your Review</b></p>
                                
                                <form action="#">
                                    <span>
                                        <input type="text" placeholder="Your Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div><!--/category-tab--> --}}
                
                {{-- <div class="recommended_items">
                    <h2 class="title text-center">Sản phẩm gợi ý</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <div class="productinfo text-center">
                                   
                                    @foreach ($productSuggest->take(3) as $product )
                                    <div class="suggest col-md-4 col-sm-6 mb-4 px-3">
                                        @include('frontend.components.product_item',['product'=>$product])
                                    </div>
                                    @endforeach                                
                                </div>
                            </div>
                            <div class="item">	
                                <div class="productinfo text-center">
                                   
                                    @foreach ($productSuggest->take(3) as $product )
                                    <div class="suggest col-md-4 col-sm-6 mb-4 px-3">
                                        @include('frontend.components.product_item',['product'=>$product])
                                    </div>
                                    @endforeach                                
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
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function () {
        $(".js-add-favourite").click(function(event){
            event.preventDefault();
            let $this=$(this);
            let URL = $this.attr('href');
          
            if(URL){
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} , 
                method:"POST",
                url: URL,
            }).done(function( results ) {
               console.log(results);
                    alert(results.messages)
                });
                
            }
        });
        $('.js-show-login').click(function(event) {
        event.preventDefault();
        alert('Bạn cần đăng nhập để thực hiện chức năng này!');
        
        });
        // Show form review
        $(".js-review").click(function (event) {
        event.preventDefault();
        let $this = $(this);

        if ($this.hasClass('js-check-login')) {
            toastr.warning("Đăng nhập để thực hiện chức năng này");
            return false;
        }

        if ($this.hasClass('active')) {
            $this.text("Gửi đánh giá").addClass('btn-success').removeClass('btn-default active');
        } else {
            $this.text("Đóng lại").addClass('btn-default active').removeClass('btn-success');
        }

        $("#block-review").slideToggle();
        });

        // Hover icon thay đổi sao đánh giá
        // let $item = $(".ratings i");
        // let arrTextRating = [
        // "Không thích",
        // "Tạm được",
        // "Bình thường",
        // "Rất tốt",
        // "Tuyệt vời"
        // ];

        // $item.mouseover(function () {
        // let $this = $(this);
        // // let i = $this.attr('data-i');
        // let i = parseInt($this.attr('data-i'));
        // $("#review_value").val(i);
        // $item.removeClass('active');
        // $item.each(function (key, value) {
        //     if (key < i) {
        //     $(this).addClass('active');
        //     }
        // });
        // $("#reviews-text").text(arrTextRating[i]);
        // });

        $("#ratings .fa-star").click(function () {
        var $this = $(this);
        var rating = $this.data('i');  // Lấy giá trị sao được chọn (1-5)
        
        // Cập nhật giá trị vào hidden field
        $("#review_value").val(rating);

        // Cập nhật văn bản đánh giá
        var arrTextRating = [
            "Không thích",   // 1 sao
            "Tạm được",      // 2 sao
            "Bình thường",   // 3 sao
            "Rất tốt",       // 4 sao
            "Tuyệt vời"      // 5 sao
        ];
        $("#reviews-text").text(arrTextRating[rating - 1]);

        // Làm sáng lên các sao đã chọn
        $("#ratings .fa-star").removeClass('active');
        $this.addClass('active');
        $this.prevAll().addClass('active');  // Làm sáng các sao trước sao đã click
        });
        ///
       $(".js-process-review").click(function(event){
            event.preventDefault();
            let URL= $(this).parents('form').attr('action');
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} , 
                url:URL,
                method:"POST",
                data: $('#form-review').serialize(),
            }).done(function( results ) {
                $('#form-review')[0].reset();
                $(".js-review").trigger('click');
                alert(results.messages)
                });
       })

    })
</script>
