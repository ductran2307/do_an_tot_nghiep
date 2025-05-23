<div class="reviews_content_text">
    <h4 class="reviews-title">
      <b>{{ $product->pro_review_total }}</b> đánh giá sản phẩm {{ $product->pro_name }}
    </h4>
  
    <div class="dashboards" style="width:800px">
      <div class="item dashboards_sum" style="padding-left:0px !important;height: 100px;width: 15%;display: flex;justify-content: center; align-items: center;">
        @php
         $age=0;
         if($product->pro_review_total)
            $age = round($product->pro_revieew_star/ $product->pro_review_total,2);
        @endphp
          <span style="font-size: 45;color: #f97316; font-weight: bold;">{{$age}}</span>
          <i class="fa fa-star active" style="font-size: 35;"></i>
        {{-- @for ($i = 1; $i <= 5; $i++)
          <span>

            <i class="fa fa-star {{ $i <= $age ? 'active' : '' }}"></i>
          </span>
        @endfor --}}
      </div>
  
      <div class="item dashboards_item" style="padding-left:0px !important; width:60%">
       @foreach ($ratingDefault as $key=>$item )
          <div class="item_review" style="display: flex;">
            <span class="item_review-name">{{ $key }} <i class="fa fa-star"></i></span>
            <div class="item_review-process" style="width:70%; margin-top: 5px; margin-right: 10px;">
              @php
                $ageItem=0;
                if($product->pro_review_total)
                  $ageItem=($item['count_number']/$product->pro_review_total)*100;
              @endphp
              <span style="width: {{ $ageItem }}%;"></span>
            </div>
            <span class="item_review-count">
              <b>{{$item['count_number']}}</b> đánh giá
            </span>
          </div>
       @endforeach
      </div>
  
      <div class="item dashboards_btn" style="padding-left:0px !important;">
        <a href="javascript:void(0)" title="Gửi đánh giá" class="btn btn-success  {{ Auth::id() ? 'js-review' : 'js-show-login' }} ">Gửi đánh giá</a>
      </div>
    </div>
    @if(\Request::route()->getName()=='get.product.rating_list')
       @include('frontend.pages.product_detail.include._inc_filter')
    @endif
    <div class="block-reviews" id="block-review" style="display: none">
      <form action="{{ route('ajax_post.user.rating.add') }}" id="form-review" method="POST">
        @csrf
        <div style="">
            <p style="margin-bottom: 0">
                <span>Chọn đánh giá của bạn</span>
              </p>
              <span id="ratings">
                @for ($i = 1; $i <= 5; $i++)
                  {{-- <i class="fa fa-star active" data-i="{{ $i }}"></i> --}}
                  <i class="fa fa-star " data-i="{{ $i }}"></i>
                @endfor
              </span>
        
              <p class="reviews-text" id="reviews-text">Tuyệt vời</p>
              <span style="color: red; margin-bottom: 10px; display: block;">
                (Click vào ngôi sao để đánh giá)
              </span>
        </div>
        <div>
            <textarea name="content_review" id="rv_content" cols="30" rows="5" placeholder="Nhập đánh giá sản phẩm (Tối thiểu 80 ký tự)"></textarea>
            <input type="hidden" name="review" id="review_value" value="5">
            <input type="hidden" name="product_id"  value="{{ $product->id }}">
          </div>
      
          <button type="submit" style="font-size: 14px; margin-top: 10px;" class="btn btn-success js-process-review">
            Gửi đánh giá
          </button>
      </form>
    </div>
    <div class="reviews_list"  style=" width:800px; margin-bottom:10px">
      @include('frontend.pages.product_detail.include._inc_list_reviews')
      {{-- {!! $reviews->links('vendor.pagination.simple_default') !!} --}}
  </div>
  </div>

  