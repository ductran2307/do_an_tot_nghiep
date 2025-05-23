<form role="form" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-8">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin cơ bản</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="pro_name" placeholder="Iphone 5s ..." autocomplete="off" value="{{ $product->pro_name ?? old('pro_name') }}">
                    @if ($errors->first('pro_name'))
                         <span class="text-danger">{{$errors->first('pro_name')}}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" class="form-control" name="pro_price" value="{{ $product->pro_price ?? old('pro_price') }}" data-type="currency" placeholder="15.000.000">
                            @if ($errors->first('pro_price'))
                                <span class="text-danger">{{$errors->first('pro_price')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input type="number" class="form-control" name="pro_sale" value="{{ $product->pro_sale ?? old('pro_sale',0) }}" data-type="currency" placeholder="15.000.000">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label for="tag">Keyword</label>
                            <select name="keywords[]" class="form-control js-select2-keyword" multiple="" >
                                <option >-- Click --</option>
                                @foreach ($keywords as $keyword )
                                    <option {{ in_array($keyword->id ,$keywordOld) ? 'selected':'' }} value="{{ $keyword->id }}">{{$keyword->k_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="pro_description" class="form-control" cols="5" rows="2" autocomplete="off">{{ $product->pro_description ?? old('pro_description') }}</textarea>
                    @if ($errors->first('pro_description'))
                        <span class="text-danger">{{$errors->first('pro_description')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label">Danh mục <b class="col-red">(*)</b></label>
                    <select name="pro_category_id" class="form-control" >
                        <option value="">-- Click --</option>
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}" {{ old('pro_category_id', $product->pro_category_id ?? 0) == $category->id ? 'selected' : '' }}
                                >{{$category->c_name}}</option>
                        @endforeach
                    </select> 
                    @if ($errors->first('pro_category_id'))
                        <span class="text-danger">{{$errors->first('pro_category_id')}}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thuộc tính</h3>
            </div>
            <div class="box-body">
                @foreach ( $attributes as $key=> $attribute )
                <div class="form-group col-sm-3">
                    <h4 style="border-bottom:1px solid #dedede; padding-bottom: 10px;">{{$key}}</h4>
                    @foreach ($attribute as $item)
                    <label class="checkbox" >
                        <input type="checkbox" name="attribute[]" {{ in_array($item['id'],$attributeOld) ? "checked":'' }}
                        value="{{$item['id']}}" >{{ $item['atb_name'] }}
                    </label>
                    @endforeach
                </div>
                @endforeach
            </div>
            <hr>
            <div class="box-body">
               <div class="form-group col-sm-3">
                <label for="exampleInputEmail1" >Xuất xứ</label>
                <select name="pro_country" class="form-control" >
                    <option value="1" {{ isset($product) && $product->pro_country == 1 ? 'selected' : '' }}>Việt Nam</option>
                    <option value="2" {{ isset($product) && $product->pro_country == 2 ? 'selected' : '' }}>Anh</option>
                    <option value="3" {{ isset($product) && $product->pro_country == 3 ? 'selected' : '' }}>Thụy Sỹ</option>
                    <option value="4" {{ isset($product) && $product->pro_country == 4 ? 'selected' : '' }}>Mỹ</option>
                    <option value="5" {{ isset($product) && $product->pro_country == 5 ? 'selected' : '' }}>Singapore</option>
                    <option value="6" {{ isset($product) && $product->pro_country == 6 ? 'selected' : '' }}>Áo</option>
                    <option value="7" {{ isset($product) && $product->pro_country == 7 ? 'selected' : '' }}>Nhật Bản</option>

                </select> 
               </div>
               <div class="form-group col-sm-3">
                    <label  >Năng lượng</label>
                    <input type="text" name="pro_energy" class="form-control" value="{{ $product->pro_energy ?? '' }}" placeholder="Năng lượng">
               </div>
               <div class="form-group col-sm-3">
                    <label >Độ chịu nước</label>
                    <input type="text" name="pro_resistant" class="form-control" value="{{ $product->pro_resistant ?? '' }}" placeholder="Độ chịu nước">
                </div>
                <div class="form-group col-sm-3">
                    <label >Số lượng</label>
                    <input type="number" name="pro_number" class="form-control" value="{{ $product->pro_number ?? old('pro_number',0) }}" placeholder="10">
                </div>
            </div>
        </div>
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Nội dung</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea name="pro_content" id="content" class="form-control textarea" cols="5" rows="2">{{$product->pro_content ?? ''}}</textarea>
                    @if ($errors->first('pro_content'))
                        <span class="text-danger">{{$errors->first('pro_content')}}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        {{-- <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin cơ bản</h3>
            </div>
            <div class="box-body">
               
                <div class="form-group">
                    <label>Description Seo</label>
                    <textarea class="form-control" rows="3" name="pro_description_seo" autocomplete="off" placeholder="Description seo ..."></textarea>
                </div>
            </div>
        </div>
     --}}
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Ảnh đại diện</h3>
            </div>
            <div class="box-body block-images">
                <div style="margin-bottom: 10px;">
                    <div style="margin-bottom: 10px;">
                        @if(isset($product) && $product->pro_avatar)
                            <img src="{{ pare_url_file($product->pro_avatar) }}" onerror="this.onerror=null; this.src='http://blogit.trungphu/images/no-image.jpg';" alt="" class="img-thumbnail" style="width: 200px; height: 200px;">
                        @else
                            <img src="http://blogit.trungphu/images/no-image.jpg" alt="" class="img-thumbnail" style="width: 200px; height: 200px;">
                        @endif
                    </div>
                    
                </div>
                <div style="position: relative;">
                    <a class="btn btn-primary" href="javascript:;">Choose File...</a>
                    <input type="file" style="position: absolute; top: 0; left: 0; filter: alpha(opacity=0); -ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=0)'; opacity: 0; background-color: transparent; width: 100%;" name="pro_avatar" size="40" class="js-upload">
                    &nbsp; <span class="label label-info" id="upload-file-info"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 clearfix">
        <div class="box-footer text-center">
            <a href=" {{ route('admin.product.index') }}" class="btn btn-default">
                <i class="fa fa-arrow-left"></i> Cancel
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> {{ isset($product)? "Cập nhật" :"Thêm mới" }}
            </button>
        </div>
    </div>
</form>