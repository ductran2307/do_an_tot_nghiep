@extends('layouts.app_master_user')

@section('content')
    <h2>Danh sách đơn hàng</h2>
<div class="row mb-5" style="width:100%; margin-top: 30px;">
    <div class="col-sm-12">
        <form class="form-inline">
            <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control"  placeholder="id" name="id">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <select name="status" class="form-control">
                    <option >Trạng thái</option>
                    <option value="1" {{ Request::get('status')== 1 ?"selected='selected'" : "" }}>Tiếp nhận</option>
                    <option value="2" {{ Request::get('status')== 2 ?"selected='selected'" : "" }}>Đang vận chuyển</option>
                    <option value="3" {{ Request::get('status')== 3 ?"selected='selected'" : "" }}>Đã bàn giao</option>
                    <option value="-1" {{ Request::get('status')== -1 ?"selected='selected'" : "" }}>Hủy bỏ</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Total</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction )
                <tr>
                    <th scope="row">{{$transaction->id}}</th>
                    <th>{{$transaction->tst_name}}</th>
                    <th>{{number_format($transaction->tst_total_money,0,',','.')}}đ</th>
                    <th>{{$transaction->created_at}}</th>
                    <th>
                        <span class="label label-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                            {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                        </span>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection