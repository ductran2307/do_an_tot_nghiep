@extends('layouts.app_master_frontend')

@section('content')
<h2 style="text-align: center;"> Lấy lại mật khẩu</h2>
<div class="container" style="padding: 40px 0;">
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-left:300px">
            <form method="POST" action="" >
                @csrf

                <div class="form-group">
                    <label for="name">Email <span style="color:red;">(*)</span></label>
                    <input type="email" name="email" required="" id="email" class="form-control" placeholder="ductran23072002@gmail.com" >
                    @if ($errors->first('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary" style="display: block; margin-top: 20px;">Gửi xác nhận</button>
            </form>
        </div>
    </div>
</div>
@endsection
