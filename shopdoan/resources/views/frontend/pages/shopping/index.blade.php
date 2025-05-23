@extends('layouts.app_master_frontend')
@section('content')

<section>
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{ route('get.home') }}">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
           
            <div class="cart-container  row" style="display: flex; flex-wrap: wrap; gap: 20px;">
                <div class="giohang">
                    <div class="heading">
                        <h3 >Thông tin giỏ hàng</h3>
                    </div>
                    <table class="cart-table">
                        <!-- Nội dung bảng -->
                            <thead>
                                <tr class="cart_menu">
                                    <th></th>
                                    <th>Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shopping as $key=> $item )
                                    <tr>
                                        <td>
                                            <a href="{{ route('get.product.detail',\Str::slug($item->name).'-'.$item->id) }}" title="{{ $item->name }}">
                                                <img src="{{  pare_url_file($item->options->image) }}" alt="" width="80px" height="80px">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get.product.detail',\Str::slug($item->name).'-'.$item->id) }}"><strong>{{$item->name}}</strong></a>
                                        </td>
                                        <td>
                                            <p><b>{{number_format($item->price,0,',','.')}}đ</b></p>
                                            <p>
                                                @if ($item->options->priceOld)
                                                   <span style="text-decoration: line-through;">{{number_format(number_price($item->options->priceOld,0,',','.'))}}</span> 
                                                @endif
                                                <span>-{{($item->options->sale)}}%</span>
                                            </p>
                                        </td>
                                        <td>
                                            <input type="number" name="quantity1" min="1" value="{{ $item->qty }}" id="qty">
                                            <a style="display: inline-block; padding: 6px 12px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px;"
                                                data-id="{{ $key }}" data-id-product="{{ $item->id }}" class="js-update-item-cart" href="{{ route('ajax_get.shopping.update',$key) }}">Cập nhật</a>
                                            <a style="display: inline-block; padding: 6px 12px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px;
                                            "href="{{ route('get.shopping.delete',$key) }}">Xóa</a>
                                        </td>
                                        <td>{{number_format($item->price*$item->qty,0,',','.')}}đ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    <p style="float: right; margin-top:20px">Tổng tiền: <b>{{Cart::subtotal(0)}}</b></p>
                </div>
                <div class="thong-tin" style="">
                    <div class="heading">
                        <h3>Thông tin đặt hàng</h3>
                    </div>
                    
                        <form method="POST" action="{{ route('post.shopping.pay') }}" id="paymentForm">
                        @csrf
                            <div class="form-group">
                                <label for="name">Họ tên <span style="color:red;">(*)</span></label>
                                <input type="text" name="tst_name" required="" value="{{ get_data_user('web','name') }}" id="tst_name" class="form-control" >
                                
                            </div>
            
                            <div class="form-group">
                                <label for="phone">Điện thoại <span style="color:red;">(*)</span></label>
                                <input type="text" name="tst_phone" required="" value="{{ get_data_user('web','phone') }}"  id="tst_phone"class="form-control" >
                                
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ <span style="color:red;">(*)</span></label>
                                <input type="text" name="tst_address" required="" value="{{ get_data_user('web','address') }}"  id="tst_address"class="form-control" >
                               
                            </div>
            
                            <div class="form-group">
                                <label for="email">Email <span style="color:red;">(*)</span></label>
                                <input type="text" name="tst_email" required="" value="{{ get_data_user('web','email') }}" id="tst_email" class="form-control" >
                               
                            </div>
                            <div class="form-group">
                                <label for="note">Ghi chú thêm <span style="color:red;">(*)</span></label>
                                <textarea  name="tst_note" id="tst_note" cols="3" style="min-height: 100px;" rows="2"></textarea>
                              
                            </div>
                            <div class="btn-buy">
                                <input type="hidden" name="tst_total_money" value="{{ str_replace(',', '', Cart::subtotal(0)) }}">
                                    <button class="buy1 btn btn-purple"  type="submit">
                                        <span >Đặt hàng & Thanh toán</span>
                                    </button>
                               
                                {{-- <button class="buy1 btn btn-purple"  value="2" type="submit">
                                    <span >Thanh toán online</span>
                                </button> --}}
                            </div>
                            {{-- <input type="hidden" name="payment_method" id="payment_method" value="cod">

                            <div class="btn-buy">
                                <button class="buy1 btn btn-purple" type="submit" onclick="setPaymentMethod('cod')" value="1">
                                    <span>Thanh toán khi nhận hàng</span>
                                </button>
                                <button class="buy1 btn btn-purple" type="submit" onclick="setPaymentMethod('online')" value="2">
                                    <span>Thanh toán online</span>
                                </button>
                            </div> --}}
                          
                    </form>

                </div>
            </div> 
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // function setPaymentMethod(method) {
    //     document.getElementById('payment_method').value = method;
    // }
   $(function() {
        $(".js-update-item-cart").click(function(event){
            event.preventDefault();
            let $this=$(this);
            let url=$this.attr('href');
            let qty=$("#qty").val();
            let idProduct= $this.attr('data-id-product')
            if(url){
                $.ajax({
                url: url,
                data: {
                     qty:qty ,
                     idProduct:idProduct
                    }
                })
                .done(function( results ) {
                    alert(results.messages)
                });
            }
        })
   })
</script>
</section>
@endsection