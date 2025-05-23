  <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @if (isset($categories))
                            @foreach ($categories as $category )
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="{{ route('get.category.list', $category->c_slug . '-' . $category->id)}}" >
                                                {{ $category->c_name }}
                                        </a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div><!--/category-products-->
                
                    <div class="brands_products"><!--brands_products-->
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
                        </div> --}}
                        <img style="width: 262.5px;" src="{{ asset('frontend\images\banner\sidebar_banner.jpg') }}" alt="">
                    </div>
                </div>
  </div>
                
             
             
            