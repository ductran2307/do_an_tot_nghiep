<div class="best-sell">
    <div class="title" style="font-size: 20px;">Top bán chạy nhất</div>
    <div class="content">
        @foreach ($products as $product )
            <div class="item" style="margin-left: -100px;display:flex">
                
                <div class="item_avatar" style="width:40%; margin-right: 10px;">
                    <a href="#" title="" style="width:100%; " class="image cover">
                        <img data-src="" style="width:100%; height: 90%;" class="lazyload" alt="Đồng hồ Diamond D" src="{{ pare_url_file($product->pro_avatar)}}">
                    </a>
                </div>
                <div class="item__info">
                    <div class="label-row">
                        <a href="" title="Đồng hồ Diamond D" style="width: auto"  class="cate">{{$product->category->c_name}}</a>
                        @if ($product->pro_sale)
                        <a href="" title="saleOff" style="color: red;" class="cate sale">-{{$product->pro_sale}}%</a>
                        @endif
                    </div>
                    <a href="" style="width:200px;color:black; font-size: 15px;" title="Đồng hồ Diamond D DD0614B" class="name">{{$product->pro_name}}</a> 
                    @if($product->pro_sale)
                       
                        <p class="price" style="margin-top: 5px; margin-bottom: 5px; font-size: 13px;font-weight: bold;">
                            <span>Giá bán: </span>
                            <span class="new" style="color: red;">{{number_format(number_price($product->pro_price,$product->pro_sale),0,',','.')}} đ</span>
                        </p>
                        <p class="price" style="margin-top: 5px; margin-bottom: 5px;font-size: 13px;font-weight: bold;">
                            <span>Giá gốc: </span>
                            <span class="old" style="text-decoration: line-through;">{{number_format($product->pro_price,0,',','.')}} đ</span>
                        </p>
                    @else
                    <p class="price" style="margin-top: 5px; margin-bottom: 5px;font-size: 13px;font-weight: bold;">
                        <span>Giá bán: </span>
                        <span class="old" >{{number_format($product->pro_price,0,',','.')}} đ</span>
                    </p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>