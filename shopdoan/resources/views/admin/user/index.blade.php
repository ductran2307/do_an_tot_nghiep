@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý thành viên </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.user.index') }}"> User</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($users))
                                    @foreach ($users as $user )
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                              {{-- <a href="{{ route('admin.keyword.update', $user->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a> --}}
                                              <a href="{{ route('admin.user.delete',$user->id )}}" class="btn btn-danger js-delete-confirm"><i class=" fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {!! $users->links() !!}
      </div>
    </div>
  </section>
  @endsection