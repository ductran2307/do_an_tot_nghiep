@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Thêm mới thuộc tính </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.attribute.index') }}"> Attribute</a></li>
      <li class="active">Create</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-body">
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->first('atb_name')?'has-error':'' }}" >
                            <label for="name">Name<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="atb_name"  placeholder="Name...">
                            @if ($errors->first('atb_name'))
                                <span class="text-danger">{{$errors->first('atb_name')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-8">
                       <div class="form-group {{ $errors->first('atb_type')?'has-error':'' }}">
                            <label for="name">Group<span class="text-danger">(*)</span></label>
                            <select class="form-control" name="atb_type">
                                {{-- <option >--Chọn nhóm thuộc tính</option> --}}
                                <option value="1">Đôi</option>
                                <option value="2">Năng lượng</option>
                                <option value="3">Loại dây</option>
                                <option value="4">Loại kính</option>
                            </select>
                            @if ($errors->first('atb_type'))
                            <span class="text-danger">{{$errors->first('atb_type')}}</span>
                        @endif
                       </div>
                    </div>
                    <div class="col-sm-8">
                       <div class="form-group {{ $errors->first('atb_category_id')?'has-error':'' }}">
                            <label for="name">Category<span class="text-danger">(*)</span></label>
                            <select class="form-control" name="atb_category_id">
                                @foreach ($categories as $item )
                                <option value="1">{{$item->c_name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->first('atb_category_id'))
                            <span class="text-danger">{{$errors->first('atb_category_id')}}</span>
                        @endif
                       </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="col-sm-12">
                        <div class="box-footer text-center" style="margin-top:20px">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                            <a href="{{ route('admin.attribute.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở lại</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
  </section>
  @endsection