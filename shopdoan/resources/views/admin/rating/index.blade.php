@extends('layouts.app_master_admin')
@section('content')

<style>
.ratings i.fa-star {
 
  color: #ddd;
  margin-right: 4px;
}

.ratings i.fa-star.active {
  color: #f97316;
}
</style>
<section class="content-header">
    <h1>Danh sách đánh giá sản phẩm </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.rating.index') }}"> Rating</a></li>
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
                                    <th>User</th>
                                    <th>Rating</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($ratings))
                                    @foreach ($ratings as $rating )
                                        <tr>
                                            <td>{{$rating->id}}</td>
                                            <td>{{$rating->product->pro_name ??"[N\A]"}}</td>
                                            <td>{{$rating->user->name ??"[N\A]"}}</td>
                                            {{-- <td>{{$rating->r_number}}</td> --}}
                                            <td>
                                                <div class="ratings">
                                                    @for ($i=1;$i<=5;$i++)
                                                        <i class="fa fa-star {{ $i<= $rating->r_number ? 'active':'' }}"></i>
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{$rating->created_at}}</td>
                                            <td>
                                              {{-- <a href="{{ route('admin.keyword.update', $user->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a> --}}
                                              <a href="{{ route('admin.rating.delete',$rating->id )}}" class=" js-delete-confirm btn btn-danger"><i class=" fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {!! $ratings->links() !!}
      </div>
    </div>
  </section>
  @endsection