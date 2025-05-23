@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Cập nhật từ khóa </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.keyword.index') }}"> Keyword</a></li>
      <li class="active">Update</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-body">
                <form role="form" action="" method="POST">
                    @csrf
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->first('k_name')?'has-error':'' }}" >
                            <label for="name">Name<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" value="{{ $keyword->k_name }}" name="k_name"  placeholder="Name...">
                            @if ($errors->first('k_name'))
                                <span class="text-danger">{{$errors->first('k_name')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-8">
                        <label for="name">Description</label>
                           <textarea class="form-control" value="" name="k_description"  placeholder="Description...">{{ $keyword->k_description }}</textarea>
                            @if ($errors->first('k_description'))
                                <span class="text-danger">{{$errors->first('k_description')}}</span>
                            @endif
                    </div>
                    <!-- /.box-body -->
                    <div class="col-sm-12">
                        <div class="box-footer text-center" style="margin-top:20px">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                            <a href="{{ route('admin.keyword.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở lại</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
  </section>
  @endsection