@extends('layouts.app_master_admin')
@section('content')
<style>
  .avt{
    margin-top: 10px;
    width: 30%;
    height: 30%;
  }
</style>

<section class="content-header">
    <h1>Trang quản trị hệ thống website bán đồng hồ </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Thông tin cá nhân</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <ul>
            <li>Họ và tên: Trần Duy Đức</li>
            <li>Mã sinh viên: 2020606947</li>
            <li>Khoa: CNTT</li>
            <li>Khóa: K15</li>
            <li>Trường Đại học Công Nghiệp Hà Nội</li>
            <li><img class="avt" src="{{ asset('uploads\2025-04-12_daidien.jpg') }}"></li>
          </ul>
      </div>
      <div class="box-footer">
        Sản phẩm là đồ án cá nhân
      </div>
    </div>
  </section>
  @endsection