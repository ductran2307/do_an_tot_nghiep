@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Cập nhật menu </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.menu.index') }}"> Menu</a></li>
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
                        <div class="form-group {{ $errors->first('mn_name')?'has-error':'' }}" >
                            <label for="name">Name<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" value="{{ $menu->mn_name }}" name="mn_name"  placeholder="Name...">
                            @if ($errors->first('mn_name'))
                                <span class="text-danger">{{$errors->first('mn_name')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-4">
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="col-sm-12">
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                            <a href="{{ route('admin.menu.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở lại</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
  </section>
  @endsection