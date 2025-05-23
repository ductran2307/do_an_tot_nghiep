@extends('layouts.app_master_frontend')

@section('content')
<h2 style="text-align: center;"> Thiết lập mật khẩu</h2>
<div class="container" style="padding: 40px 0;">
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-left:300px">
            <form method="POST" action="" >
                @csrf

                <div class="form-group">
                    <label for="name">Mật khẩu mới <span style="color:red;">(*)</span></label>
                    <input type="password" name="password"   class="form-control" placeholder="********" >
                    @if ($errors->first('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Xác nhận mật khẩu <span style="color:red;">(*)</span></label>
                    <input type="password" name="password_confirm"   class="form-control" placeholder="********" >
                    @if ($errors->first('password_confirm'))
                        <span class="text-danger">{{$errors->first('password_confirm')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary" style="display: block; margin-top: 20px;">Đổi mật khẩu mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
