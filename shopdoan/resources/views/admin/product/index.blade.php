@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý sản phẩm </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.product.index') }}"> Product</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-title">
          <form class="form-inline">
              <input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="ID">
              <input type="text" class="form-control" value="{{ Request::get('name') }}" name="name" placeholder="Name ...">
              
              <select name="category" class="form-control">
                  <option value="0">Danh mục</option>
                  @foreach ($categories as $item )
                    <option value="{{ $item->id }}"{{ Request::get('category')== $item->id ?"selected='selected'" : "" }}>{{$item->c_name}}</option>
                  @endforeach
                  
                  
              </select>
      
              {{-- <select name="status" class="form-control">
                  <option >Trạng thái</option>
                  <option value="1" {{ Request::get('status')== 1 ?"selected='selected'" : "" }}>Tiếp nhận</option>
                  <option value="2" {{ Request::get('status')== 2 ?"selected='selected'" : "" }}>Đang vận chuyển</option>
                  <option value="3" {{ Request::get('status')== 3 ?"selected='selected'" : "" }}>Đã bàn giao</option>
                  <option value="-1" {{ Request::get('status')== -1 ?"selected='selected'" : "" }}>Hủy bỏ</option>
              </select> --}}
      
              <button type="submit" class="btn btn-success">
                  <i class="fa fa-search"></i> Search
              </button>
              <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a>
          </form>
      </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table">
                        <tbody>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th>Category</th>
                              <th>Avatar</th>
                              <th>Price</th>
                              <th>Hot</th>
                              <th>Status</th>
                              <th>Time</th>
                              <th>Action</th>
                            </tr>
                                @if (isset($products))
                                @foreach ($products as $product )
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->pro_name}}</td>
                                        <td>
                                          <span class="label label-success">{{$product->category->c_name ?? "[N\A]"}}</span>
                                        </td>
                                        <td>
                                          <img src="{{ pare_url_file($product->pro_avatar) }}" style="width: 80px; height: 100px;">
                                        </td>
                                        <td>
                                            @if ($product->pro_sale)
                                                <span style="text-decoration: line-through">{{number_format($product->pro_price,0,',','.')}}VNĐ</span><br>
                                                <?php
                                                    $price=((100-$product->pro_sale)*$product->pro_price)/100;
                                                ?>
                                                <span>{{number_format($price,0,',','.')}}VNĐ</span>

                                              @else
                                              {{number_format($product->pro_price,0,',','.')}}VNĐ
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->pro_hot==1)
                                            <a href="{{ route('admin.product.hot', $product->id) }}" class="label label-info">Hot</a>
                                        @else
                                            <a href="{{ route('admin.product.hot', $product->id) }}" class="label label-default">None</a>
                                         @endif
                                        </td>
                                        <td>
                                          @if ($product->pro_active==1)
                                          <a href="{{ route('admin.product.active', $product->id) }}" class="label label-info">Active</a>
                                      @else
                                          <a href="{{ route('admin.product.active', $product->id) }}" class="label label-default">Hide</a>
                                       @endif
                                      </td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                          <a href="{{ route('admin.product.update', $product->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                          <a href="{{ route('admin.product.delete',$product->id)}}" class="btn btn-danger js-delete-confirm"><i class=" fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {!! $products->appends($query)->links() !!}
      </div>
    </div>
  </section>
  @endsection