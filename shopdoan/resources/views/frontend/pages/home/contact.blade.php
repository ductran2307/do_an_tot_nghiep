@extends('layouts.app_master_frontend')
@section('content')
<style>
.social-icons ul li{
    margin-right: 10px;
}
.social-icons ul li a i:hover{
    color: white !important;
}    
h6 {
    font-size: 18px; 
    color: #333; 
}
/* info */
.icon-circle {
    width: 42px;
    height: 42px;
    border: 2px solid #f39801;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f39801;
    font-size: 18px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.icon-circle:hover {
    background-color: #f39801;
    color: white;
    border-color: #f39801;
}

.contact-info {
    font-size: 16px;
    color: #333;
    line-height: 1.6;
}

.info-item {
    display: flex; /* Đặt display:flex ở đây để các phần tử trong mỗi info-item được căn chỉnh ngang */
    align-items: center; /* Đảm bảo icon và thông tin được căn chỉnh theo chiều dọc */
    margin-bottom: 20px;
}

.me-3 {
    margin-right: 15px;
}

.info-item i {
    font-size: 20px;
}


/* .contact-info .info-item{
    display: flex;
} */
</style>
<div class="container py-5">
    <div class="row mb-5 text-center">
        <div class="col">
            <h2 class="fw-bold" style="color: orange;">LIÊN HỆ VỚI CHÚNG TÔI</h2>
            <p class="text-muted" style="color: black;">Chúng tôi luôn sẵn sàng hỗ trợ bạn!</p>
        </div>
    </div>

    <div class="row g-4" style="margin-top: 20px;">
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="fw-bold mb-3" style="font-size: 20px;">Thông tin liên hệ</h5>
                <div class="contact-info">
                    <div class="info-item d-flex align-items-start mb-3">
                        <div class="icon-circle me-3">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div>
                            23 ngõ 35 Tu Hoàng, phường Phương Canh,<br> Quận Nam Từ Liêm, Hà Nội
                        </div>
                    </div>
                    <div class="info-item d-flex align-items-start mb-3">
                        <div class="icon-circle me-3">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div>0334702213</div>
                    </div>
                    <div class="info-item d-flex align-items-start mb-3">
                        <div class="icon-circle me-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div>shopdoan123@gmail.com</div>
                    </div>
                </div>
                <h6 class="fw-bold mt-4">Mạng xã hội</h6>
                <div class="social-icons">
                    <ul class="nav navbar-nav">
                        <li style="border: 1px solid #3388cd;"><a href="https://www.facebook.com/tran.uc.367226"><i style="color: #3388cd;" class="fa fa-facebook"></i></a></li>
                        <li style="border: 1px solid rgb(208, 22, 225);"><a href="https://www.instagram.com/duckduck2k2/"><i style="color:rgb(208, 22, 225) ;" class="fa fa-instagram"></i></a></li>
                        <li style="border: 1px solid rgb(60, 225, 57);"><a href="https://zalo.me/0334702213"><i style="color: rgb(60, 225, 57);" class="fa fa-comments"></i></a></li>
                        {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                    </ul>
                </div>                
            </div>
        </div>
        <div class="col-md-6">
            <div class="ratio ratio-4x3 rounded shadow-sm overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d329.1143951888022!2d105.73076336734987!3d21.052513145312613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1746435842483!5m2!1svi!2s" 
                width="600" 
                height="450"
                 style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection