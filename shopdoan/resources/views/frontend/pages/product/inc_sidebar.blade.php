<style>
    .item-content .active a{
        color: orange !important;
    }
</style>
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh mục sản phẩm</h2>
        <div class="panel-group category-products" id="accordian" style="margin-left: 20px; margin-top: -20px;"><!--category-productsr-->
            @if (isset($categories))
                @foreach ($categories as $category )
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{ route('get.category.list', $category->c_slug . '-' . $category->id)}}">
                                {{ $category->c_name }}
                           </a>
                        </h4>
                    </div>
                </div>
                @endforeach
            @endif
        </div><!--/category-products-->
    
        {{-- <div class="brands_products"><!--brands_products--> --}}
            {{-- <h2>Thương hiệu</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                </ul>
            </div>
        </div><!--/brands_products--> --}}

        <div >
            {{-- Xuất xứ --}}
            @if (isset($country))
                <div class="attribute">
                    <h2>Xuất xứ</h2>
                    <div class="item-content" style="margin-bottom: 40px;">
                    <ul style="margin-top: -10px">
                            @foreach ($country as $key=> $item)
                            <li class="{{ Request::get('country') == $key ? "active":""}}"
                            style=" font-size: 15px; margin-top: 10px; margin-bottom: 10px;">
                                <a style="color: black;" href="{{ request()->fullUrlWithQuery(['country' => $key]) }}">
                                    <span>{{ $item }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            {{-- Thuộc tính --}}
            @if (isset($attributes))
            @foreach ($attributes as $key=> $attribute )
                <div class="attribute">
                    <h2>{{$key}}</h2>
                    <div class="item-content" style="margin-bottom: 40px;">
                       <ul style="margin-top: -10px">
                            @foreach ($attribute as $item)
                            <li class="{{ Request::get('attr_'.$item['atb_type']) == $item['id'] ? "active":""}}"
                            style=" font-size: 15px; margin-top: 10px; margin-bottom: 10px;">
                                <a style="color: black;" href="{{ request()->fullUrlWithQuery(['attr_'.$item['atb_type'] => $item['id']]) }}">
                                    <span>{{ $item['atb_name'] }}</span>
                                </a>
                                
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
        <div class="filter_tab"  style="">
            <h2 style="text-align: center;">Giá</h2>
            <ul style="list-style: none; padding: 0; margin-left: 40px;">
                @for ($i=1;$i<=6;$i++)
                    @php
                    $isActive = request('price') == $i ? 'color: orange;' : '';
                    @endphp
                    <li style="margin-bottom: 15px; ">
                        <a href="{{ request()->fullUrlWithQuery(['price' => $i]) }}" style="color: black; text-decoration: none; {{ $isActive }}">
                            @if ($i == 6)
                            Lớn hơn 10 triệu
                        @else
                            Giá < {{ $i * 2 }} triệu
                        @endif</a>
                    </li>
                @endfor
            </ul>
        </div>
        
       
    
    </div>
</div>
