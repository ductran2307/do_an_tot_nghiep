@extends('layouts.app_master_admin')
@section('content')


    <section class="content-header">
        <h1>Thêm mới sản phẩm </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a href="{{ route('admin.product.index') }}"> Product</a></li>
            <li class="active">Create</a></li>
        </ol>
     </section>

    <section class="content">
        <div class="row">
          @include('admin.product.form')
        </div>
       
@endsection