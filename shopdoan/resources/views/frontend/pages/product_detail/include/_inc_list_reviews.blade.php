@foreach ($ratings as $item )
<div class="item" style="margin-top:15px; padding: 0 !important; margin-bottom: 20px;">
    <p class="item_author">
        <span>{{ $item->user->name ?? "[N\A]" }}</span>
        <span class="item_success" style=" color: green;"><i class="fa fa-check-circle"></i> Đã mua hàng tại DucClock</span>
    </p>
    <div style="display:flex; gap: 10px;">
        <div class="item_review">
            <span class="item_review">
                @for ($j = 1; $j <= 5; $j++)
                    <i class="fa fa-star {{ $j <= $item->r_number ? 'active' : '' }}"></i>
                @endfor
            </span>
        </div>
        <div> {{ $item->r_content }}</div>
    </div>
    <div class="item_footer">
        <span class="item_time"><i class="fa fa-clock-o"></i> đánh giá {{$item->created_at}}</span>
    </div>
</div>
@endforeach
@if(\Request::route()->getName()=='get.product.rating_list')
    <div>
        {!! $ratings->appends($query ?? [])->links() !!}
    </div>
@else
    <a href="{{ route('get.product.rating_list',$product->pro_slug.'-'.$product->id) }}" 
        class="btn-load-rating" style=" padding: 7px 20px; color:#288ab6; 
        border: solid 1px #288ab6;border-radius:3px; text-align: center; 
        box-sizing: border-box; margin-top: 10px; display: block; width:25%">
        Xem tất cả đánh giá&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
@endif
   



