@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý menu</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.menu.index') }}"> Menu</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-header">
                <h3 class="box-title"><a href="{{ route('admin.menu.create') }}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a></h3>

        </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Status</th>
                                    <th>Hot</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if ($menus)
                                    @foreach ($menus as $menu )
                                        <tr>
                                            <td>{{$menu->id}}</td>
                                            <td>{{$menu->mn_name}}</td>
                                            <td>
                                                <img src="{{ pare_url_file($menu->mn_avatar) }}" style="width:80px;height:80px">
                                            </td>
                                            <td>
                                               @if ($menu->mn_status==1)
                                                    <a href="{{ route('admin.menu.active', $menu->id) }}" class="label label-info">Show</a>
                                               @else
                                                    <a href="{{ route('admin.menu.active', $menu->id) }}" class="label label-default">Hide</a>
                                               @endif
                                            </td>
                                            <td>
                                                @if ($menu->mn_hot==1)
                                                <a href="{{ route('admin.menu.hot', $menu->id) }}" class="label label-info">Hot</a>
                                           @else
                                                <a href="{{ route('admin.menu.hot', $menu->id) }}" class="label label-default">None</a>
                                           @endif
                                            </td>
                                            <td>{{$menu->created_at}}</td>
                                            <td>
                                              <a href="{{ route('admin.menu.update', $menu->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                              <a href="{{ route('admin.menu.delete',$menu->id )}}" class="btn btn-danger js-delete-confirm"><i class=" fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {{-- {!! $categories->links() !!} --}}
      </div>
    </div>
  </section>
  @endsection