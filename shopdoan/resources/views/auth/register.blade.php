@extends('layouts.app_master_frontend')

@section('content')
<h2 style="text-align: center;"> Đăng kí</h2>
<div class="container" style="padding: 40px 0;">
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-left:300px">
            <form method="POST" action="" >
                @csrf

                <div class="form-group">
                    <label for="name">Tên <span style="color:red;">(*)</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" >
                    @if ($errors->first('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email <span style="color:red;">(*)</span></label>
                    <input type="email" name="email" id="email" class="form-control" >
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

                <div class="form-group">
                    <label for="phone">Điện thoại <span style="color:red;">(*)</span></label>
                    <input type="number" name="phone" value="{{ old('phone') }}"  id="phone"class="form-control" >
                    @if ($errors->first('phone'))
                     <span class="text-danger">{{$errors->first('phone')}}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </div>
</div>


@endsection
