<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký thành công</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px;">
        <a href="{{ route('get.home') }}"><img src="https://i.postimg.cc/4dxRDw64/Duc-Clock-Vintage-15.png" alt="" /></a>
        <h2 style="color:rgb(255, 171, 3);">Chào mừng bạn đến với DuckClock!</h2>
        
        <p>Xin chào <strong>{{$name}}</strong>,</p>

        <p>Bạn đã đăng ký tài khoản thành công tại DuckClock. Cảm ơn bạn đã tin tưởng và đồng hành cùng chúng tôi.</p>

        <p>Bạn có thể đăng nhập và bắt đầu mua sắm ngay hôm nay!</p>

        <a href="{{ route('get.login') }}" style="display: inline-block; padding: 10px 20px; background-color:rgb(247, 169, 1); color: white; text-decoration: none; border-radius: 5px;">Đăng nhập ngay</a>

        <p style="margin-top: 30px;">Nếu bạn không thực hiện hành động này, vui lòng bỏ qua email này.</p>

        <p>Trân trọng,<br>Đội ngũ DuckClock</p>
    </div>
</body>
</html>