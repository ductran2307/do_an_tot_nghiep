@extends('layouts.app_master_frontend')

@section('content')
<h2 style="text-align: center;"> Đăng nhập</h2>
<div class="container" style="padding: 40px 0;">
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-left:300px">
            <form method="POST" action="" >
                @csrf

                <div class="form-group">
                    <label for="name">Email <span style="color:red;">(*)</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="ductran23072002@gmail.com" >
                    @if ($errors->first('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu <span style="color:red;">(*)</span></label>
                    <input type="password" name="password" id="password" class="form-control" >
                    @if ($errors->first('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <a href="{{ route('get.email_reset_password') }}">Quên mật khẩu</a>
                <button type="submit" class="btn btn-primary" style="display: block;">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection
