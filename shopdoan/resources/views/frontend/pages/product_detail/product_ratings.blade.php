@extends('layouts.app_master_frontend')
@section('content')
@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
<section>
    <div class="container">
        <div class="row">
            {{-- @include('frontend.components.sidebar') --}}
            <div class="col-sm-9 padding-right">
                @include('frontend.pages.product_detail.include._inc_ratings')              
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function () {
       
    })
</script>
