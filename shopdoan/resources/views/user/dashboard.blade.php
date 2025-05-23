@extends('layouts.app_master_user')
<style>
.box-count{
    padding: 15px 5px;
}
.count-text{
    text-align: center;
    color: white;
    font-size: 36px;
}
.count-name{
    text-align: center;
    color: white;
}

</style>
@section('content')

    <h2>Trang tổng quan cá nhân</h2>
    {{-- <div class="row mb-5" style="width:100%;margin-top:30px">
           <div class="col-3">
               <div class="box-count" style="background: #17a2b8;">
                    <div class="count-text">4</div>
                    <h4 class="count-name">Tổng đơn</h4>
               </div>
           </div>
           <div class="col-3">
                <div class="box-count" style="background: #dc3545;">
                    <div class="count-text">3</div>
                    <h4 class="count-name">Đơn hủy</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="box-count" style="background: #ffc107;">
                    <div class="count-text">2</div>
                    <h4 class="count-name">Đang giao hàng</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="box-count" style="background: #28a745;">
                    <div class="count-text">2</div>
                    <h4 class="count-name">Hoàn thành</h4>
                </div>
            </div>
    </div> --}}
@endsection