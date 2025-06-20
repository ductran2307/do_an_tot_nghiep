@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý từ khóa </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.keyword.index') }}"> Keyword</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-header">
                <h3 class="box-title"><a href="{{ route('admin.keyword.create') }}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a></h3>

        </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Hot</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($keywords))
                                    @foreach ($keywords as $keyword )
                                        <tr>
                                            <td>{{$keyword->id}}</td>
                                            <td>{{$keyword->k_name}}</td>
                                            <td>{{$keyword->k_description}}</td>
                                            <td>
                                                @if ($keyword->k_hot==0)
                                                <a href="{{ route('admin.keyword.hot', $keyword->id) }}" class="label label-info">Hot</a>
                                            @else
                                                <a href="{{ route('admin.keyword.hot', $keyword->id) }}" class="label label-default">None</a>
                                             @endif
                                            </td>
                                            <td>{{$keyword->created_at}}</td>
                                            <td>
                                              <a href="{{ route('admin.keyword.update', $keyword->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                              <a href="{{ route('admin.keyword.delete',$keyword->id )}}" class="btn btn-danger js-delete-confirm"><i class=" fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {!! $keywords->links() !!}
      </div>
    </div>
  </section>
  @endsection