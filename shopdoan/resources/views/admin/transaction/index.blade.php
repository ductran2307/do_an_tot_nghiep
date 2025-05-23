@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Quản lý đơn hàng </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('admin.transaction.index') }}"> Transaction</a></li>
      <li class="active">List</a></li>
    </ol>
  </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border"> 
            <div class="box-title">
                <form class="form-inline">
                    <input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="ID">
                    <input type="text" class="form-control" value="{{ Request::get('email') }}" name="email" placeholder="Email ...">
                    
                    <select name="type" class="form-control">
                        <option value="0">Phân loại khách</option>
                        <option value="1"{{ Request::get('type')== 1 ?"selected='selected'" : "" }}>Thành viên</option>
                        <option value="2"{{ Request::get('type')== 2 ?"selected='selected'" : "" }}>Khách</option>
                    </select>
            
                    <select name="status" class="form-control">
                        <option >Trạng thái</option>
                        <option value="1" {{ Request::get('status')== 1 ?"selected='selected'" : "" }}>Tiếp nhận</option>
                        <option value="2" {{ Request::get('status')== 2 ?"selected='selected'" : "" }}>Đang vận chuyển</option>
                        <option value="3" {{ Request::get('status')== 3 ?"selected='selected'" : "" }}>Đã bàn giao</option>
                        <option value="-1" {{ Request::get('status')== -1 ?"selected='selected'" : "" }}>Hủy bỏ</option>
                    </select>
            
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-search"></i> Search
                    </button>
                </form>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <table class="table">
                                <tbody>
                                    <tr >
                                        <th>#</th>
                                        <th style="text-align: center;">Info</th>
                                        <th>Money</th>
                                        <th>Account</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                    @if (isset($transactions))
                                        @foreach ($transactions as $transaction )
                                            <tr>
                                                <td>{{$transaction->id}}</td>
                                                <td>
                                                    <ul>
                                                        <li>Name: {{$transaction->tst_name}}</li>
                                                        <li>Email: {{$transaction->tst_email}}</li>
                                                        <li>Phone: {{$transaction->tst_phone}}</li>
                                                        <li>Address: {{$transaction->tst_address}}</li>
                                                    </ul>
                                                </td>
                                                <td>{{number_format($transaction->tst_total_money,0,',','.')}}đ</td>
                                                <td>
                                                    @if ($transaction->tst_user_id)
                                                        <span class="label label-success">Thành viên</span>
                                                    @else
                                                        <span class="label label-default">Khách</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="label label-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                                                        {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                                                    </span>
                                                </td>

                                                <td>{{$transaction->created_at}}</td>
                                                <td>
                                                    <a href="{{ route('ajax.admin.transaction.detail',$transaction->id) }}" class="btn btn-info js-preview-transaction"><i class=" fa fa-eye"></i> View</a>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success ">Action</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" 
                                                        aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="{{ route('admin.transaction.delete',$transaction->id )}}" class=""><i class=" fa fa-trash"></i>Delete</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="{{ route('admin.action.transaction',['process',$transaction->id]) }}" style="color: black;"><i class="fa fa-ban"></i> Đang bàn giao</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin.action.transaction',['success',$transaction->id]) }}" style="color: black;"><i class="fa fa-ban"></i> Đã bàn giao</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin.action.transaction',['cancel',$transaction->id]) }}" style="color: black;"><i class="fa fa-ban"></i> Hủy</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                {!! $transactions->appends($query)->links() !!}
            </div>
        </div>
    </section>
        <div class="modal fade fade" id="modal-preview-transaction">
            <div class="modal-dialog">
                <div class="modal-content" >
                        <div class="modal-header">
                            <h4 class="modal-title">Chi tiết đơn hàng <b>#1</b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="content">
                            
                        </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            <!-- /.modal-content -->
                </div>
        <!-- /.modal-dialog -->
        </div>
  @endsection