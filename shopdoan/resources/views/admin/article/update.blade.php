@extends('layouts.app_master_admin')
@section('content')


    <section class="content-header">
        <h1>Cập nhật bài viết </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a href="{{ route('admin.product.index') }}"> Article</a></li>
            <li class="active">Update</a></li>
        </ol>
     </section>

    <section class="content">
        <div class="row">
          @include('admin.article.form')
        </div>
       
@endsection