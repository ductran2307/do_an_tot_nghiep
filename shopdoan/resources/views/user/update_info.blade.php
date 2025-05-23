@extends('layouts.app_master_user')

@section('content')
    <h2>Cập nhật thông tin</h2>
<div class="row mb-5" style="width:100%; margin-top: 30px;">
    <div class="col-sm-12">
        <form style="padding: 20px;" action="" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name </label>
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}"  placeholder="Name">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}"  placeholder="Email">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone </label>
                <input type="number" name="phone" class="form-control" value="{{ Auth::user()->phone }}"  placeholder="Phone">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address </label>
                <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}"  placeholder="Địa chỉ">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> --}}
            <button type="submit" class="btn btn-success">Xác nhận</button>
        </form>
    </div>
</div>


@endsection