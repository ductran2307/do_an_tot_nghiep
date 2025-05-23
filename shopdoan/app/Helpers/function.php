<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;//theem
if (!function_exists('upload_image')) {
    /**
     * @param string $file Tên file trùng tên input
     * @param string $folder Thư mục lưu file upload được
     * @param array $extend Các định dạng file có thể upload
     * @return array|int Trả về mảng nếu thành công, int nếu lỗi
     */
    // function upload_image($file, $folder = '', array $extend = array()) {
    //     $code = 1;
        
        // Lấy đường dẫn ảnh
    //    $baseFilename = public_path() . '/uploads/' . $_FILES[$file]['name'];
        
        // Thông tin file
    //    $info = new SplFileInfo($baseFilename);
        //duoi file
      //  $ext = strtolower($info->getExtension());
        
        // Kiểm tra định dạng file
        // if (!$extend) {
        //     $extend = ['png', 'jpg', 'jpeg', 'webp'];
        // }
        // if (!in_array($ext, $extend)) {
        //     return ['code' => 0];
        // }
        
        // Tạo tên file mới
        // $nameFile = trim(str_replace('.' . $ext, '', strtolower($info->getFilename())));
        // $filename = date('Y-m-d') . '_' . Illuminate\Support\Str::slug($nameFile) . '.' . $ext;
        
        // Thư mục gốc để upload
        // $path = public_path() . '/uploads/' . date('Y/m/d');
        // if ($folder) {
        //     $path = public_path() . '/uploads/' . $folder . '/' . date('Y/m/d');
        // }
        
        // if (!File::exists($path)) {
        //     mkdir($path, 0777, true);
        // }
        
        // Di chuyển file vào thư mục uploads
//         move_uploaded_file($_FILES[$file]['tmp_name'], $path . '/' . $filename);
//         $data=[
//             'name'=>$filename,
//             'code'=>$code,
//             'path'=>$path,
//             'path_img'=>'upload/'.$filename
//         ];
//         return $data;
//     }
// }
//     if(!function_exists('pare_url_file')){
//         function pare_url_file($image,$folder='')
//         {
//             if(!$image)
//             {
//                 return'/images/no-image.jpg';
//             }
//             $explode=explode('__',$image);
//             if(isset($explode[0])){
//                 $time=str_replace('_','-','/',$explode[0]);
//                 return '/uploads/' .$folder.'/'.date('Y/m/d').'/'.$image;
//             }
//         }
function upload_image($file, $folder = '', array $extend = ['png', 'jpg', 'jpeg', 'webp']) {
    $code = 1;

    // Kiểm tra xem file có được tải lên không
    if (!isset($_FILES[$file]) || $_FILES[$file]['error'] != UPLOAD_ERR_OK) {
        return ['code' => 0, 'message' => 'File upload không hợp lệ'];
    }

    // Lấy thông tin file
    $fileInfo = $_FILES[$file];
    $originalName = $fileInfo['name'];
    $fileTmpName = $fileInfo['tmp_name'];
    $fileSize = $fileInfo['size'];

    // Kiểm tra kích thước file (Giới hạn 5MB)
    if ($fileSize > 5 * 1024 * 1024) {
        return ['code' => 0, 'message' => 'File quá lớn (tối đa 5MB)'];
    }

    // Lấy phần mở rộng file
    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    // Kiểm tra định dạng file hợp lệ
    if (!in_array($ext, $extend)) {
        return ['code' => 0, 'message' => 'Định dạng file không hợp lệ'];
    }

    // Tạo tên file mới
    $nameFile = pathinfo($originalName, PATHINFO_FILENAME);
    $filename = date('Y-m-d') . '_' . Str::slug($nameFile) . '.' . $ext;

    // Tạo thư mục upload
    // $path = public_path('uploads/' . ($folder ? $folder . '/' : '') . date('Y/m/d'));
    $path = public_path('uploads/' . ($folder ? $folder . '/' : ''));

    if (!File::exists($path)) {
        File::makeDirectory($path, 0777, true, true);
    }

    // Đường dẫn lưu file
    $filePath = $path . '/' . $filename;

    // Di chuyển file vào thư mục uploads
    if (move_uploaded_file($fileTmpName, $filePath)) {
        return [
            'name' => $filename,
            'code' => $code,
            'path' => $filePath,
            'path_img' => asset('uploads/' . ($folder ? $folder . '/' : '') . $filename),
            // 'path_img' => asset('uploads/' . ($folder ? $folder . '/' : '') . date('Y/m/d') . '/' . $filename),
        ];
    } else {
        return ['code' => 0, 'message' => 'Lỗi khi di chuyển file'];
    }
}
}

if (!function_exists('pare_url_file')) {
    function pare_url_file($image, $folder = '')
    {
        if (!$image) {
            return asset('/images/no-image.jpg');
        }
        return asset('uploads/' . ($folder ? $folder . '/' : '') . $image);
    }
}
if (!function_exists('number_price')) {
    function number_price($price, $sale=0){
        if($sale==0){
            return $price;
        }
        $price=((100-$sale)*$price)/100;
        return $price;

    }
}
if (!function_exists('get_data_user')){
    function get_data_user($type, $field='id'){
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field:'';
    }
}
if (!function_exists('get_client_ip')){
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
        }
}


