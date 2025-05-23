<style>
    .rating i.fa-star{
        color: #ddd;
        margin-right: 4px;
    }
    .rating i.fa-star.active{
        color: #f97316;
    }
</style>
@if (isset($product))
    <div class="product-item">
        <a href="{{ route('get.product.detail',$product->pro_slug.'-'.$product->id) }}" title="" class="avatar image contain">
            <img alt="" src="{{ pare_url_file($product->pro_avatar)}}" class="">
        </a>
        <a href="{{ route('get.product.detail',$product->pro_slug.'-'.$product->id) }}" title="" class="title">
            <h3 style="height: 50px; overflow: hidden;text-overflow: ellipsis;">{{$product->pro_name}}</h3>
        </a>
            <p class="rating">
                <span>
                    @php 
                        $iactive = 0; 
                        if($product->pro_review_total){
                            $iactive=round($product->pro_revieew_star/$product->pro_review_total,2);
                        }
                    @endphp
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i <= $iactive ? 'active' : '' }}"></i>
                    @endfor
                </span>
                <span class="text">{{ $product->pro_review_total }} đánh giá</span>
            </p>
        @if ($product->pro_sale)
            <p class="percent">-{{$product->pro_sale}}%</p>
            <p class="price-sale">{{number_format($product->pro_price,0,',','.')}}đ</p>
            <?php
                $price=((100-$product->pro_sale)*$product->pro_price)/100;
            ?>
             <p class="price">{{number_format($price,0,',','.')}}đ</p>
        @else
        <p class="price">{{number_format($product->pro_price,0,',','.')}}đ</p>

        @endif
       
    </div>
@endif

