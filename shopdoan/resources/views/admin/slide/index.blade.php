@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý Slide </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.slide.index') }}"> Slide</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-header">
                <h3 class="box-title"><a href="{{ route('admin.slide.create') }}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a></h3>

        </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Sort</th>
                                    <th>Target</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($slides))
                                    @foreach ($slides as $slide )
                                        <tr>
                                            <td>{{$slide->id}}</td>
                                            <td>{{$slide->sd_title}}</td>
                                         
                                            <td>
                                               @if ($slide->sd_active==1)
                                                    <a href="{{ route('admin.slide.active', $slide->id) }}" class="label label-info">Show</a>
                                               @else
                                                    <a href="{{ route('admin.slide.active', $slide->id) }}" class="label label-default">Hide</a>
                                               @endif
                                            </td>
                                            <td>{{$slide->sd_sort}}</td>
                                            <td>{{$slide->sd_target}}</td>
                                            <td>{{$slide->created_at}}</td>
                                            <td>
                                              <a href="{{ route('admin.slide.update', $slide->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                              <a href="{{ route('admin.slide.delete',$slide->id )}}" class="btn btn-danger js-delete-confirm"><i class=" fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {{-- {!! $slides->links() !!} --}}
      </div>
    </div>
  </section>
  @endsection