@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Thêm mới danh mục sản phẩm </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.category.index') }}"> Category</a></li>
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
                        <div class="form-group {{ $errors->first('c_name')?'has-error':'' }}" >
                            <label for="name">Name<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="c_name"  placeholder="Name...">
                            @if ($errors->first('c_name'))
                                <span class="text-danger">{{$errors->first('c_name')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-4">
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="col-sm-12">
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở lại</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
  </section>
  @endsection