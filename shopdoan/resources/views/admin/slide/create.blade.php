@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Thêm mới Slide</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.slide.index') }}"> Slide</a></li>
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
                        <div class="form-group {{ $errors->first('sd_title')?'has-error':'' }}" >
                            <label for="name">Title<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="sd_title"  placeholder="Name...">
                            @if ($errors->first('sd_title'))
                                <span class="text-danger">{{$errors->first('sd_title')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->first('sd_link')?'has-error':'' }}" >
                            <label for="name">Link<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="sd_link"  placeholder="Name...">
                            @if ($errors->first('sd_link'))
                                <span class="text-danger">{{$errors->first('sd_link')}}</span>
                            @endif
                        </div>
                    </div>  
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group " >
                                    <label for="name">Target</label>
                                    <select name="sd_target" class="form-control" >
                                        <option value="1">_blank</option>
                                        <option value="2">_self</option>
                                        <option value="3">_parent</option>
                                        <option value="4">_top</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group " >
                                    <label for="name">Sort</label>
                                    <input type="text" class="form-control" name="sd_sort"  placeholder="0">
                                    @if ($errors->first('sd_sort'))
                                        <span class="text-danger">{{$errors->first('sd_sort')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                            <h3 class="box-title">Banner</h3>
                            <div class="box-body block-images">
                                <div style="margin-bottom: 10px;">
                                    <img src="/images/no-image.jpg" onerror="this.onerror=null; this.src='http://blogit.trungphu/images/no-image.jpg';" alt="" class="img-thumbnail" style="width: 100%; height: 400px;">
                                </div>
                                <div style="position: relative;">
                                    <a class="btn btn-primary" href="javascript:;">Choose File...</a>
                                    <input type="file" style="position: absolute; top: 0; left: 0; filter: alpha(opacity=0); -ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=0)'; opacity: 0; background-color: transparent; width: 100%;" name="sd_image" size="40" class="js-upload">
                                    &nbsp; <span class="label label-info" id="upload-file-info"></span>
                                </div>
                            </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="col-sm-12">
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                            <a href="{{ route('admin.slide.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở lại</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
  </section>
  @endsection