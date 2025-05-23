<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class ShoppingCartController extends Controller
{
    public function index(){
        $shopping=Cart::content();
        $viewData=[
            'shopping'=>$shopping,
            'title_page'   =>"Giỏ hàng"

        ];
        return view('frontend.pages.shopping.index', $viewData);
    }
    // Thêm giỏ hàng
    public function add($id){
        $product=Product::find($id);
        //1. Kiểm tra tồn tại sản phẩm
        if(!$product) return redirect()->to('/');
        //2. Kiểm tra số lượng sản phẩm
        if($product->pro_number<1){
            return redirect()->back()->with('error','số lượng sản phẩm không đủ');
        }
        //3. Thêm sản phẩm vào giỏ hàng
        Cart::add([
            'id'    => $product->id, 
            'name'  => $product->pro_name, 
            'qty'   => 1, 
            'price' =>number_price($product->pro_price, $product->pro_sale), 
            'weight'=> 1, 
            'options'   => [
                'sale'      => $product->pro_sale,
                'priceOld'  => $product->pro_price,
                'image'     => $product->pro_avatar
            ]
        ]);
        return redirect()->back()->with('success','Thêm vào giỏ hàng thành công');
    }
    //test thanh toán
  public function execPostRequest($url, $data)
        {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
            );
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            //execute post
            $result = curl_exec($ch);
            //close connection
            curl_close($ch);
            return $result;
        }
  public function postPay( Request $request){
        $request->validate([
        'tst_name' => 'required|string|max:255',
        'tst_phone' => 'required|string|max:15',
        'tst_address' => 'required|string|max:255',
        'tst_email' => 'required|email|max:255',
        'tst_note'=>'nullable',
       
    ]);

    // Chuẩn bị dữ liệu để lưu vào CSDL
    $data = $request->except('_token');
    $data['tst_user_id'] = Auth::check() ? Auth::user()->id : 0; // Gán 0 cho khách vãng lai
    $data['tst_total_money'] = str_replace(',', '', Cart::subtotal(0));
    $data['tst_status'] = 1; // Trạng thái ban đầu
    $data['created_at'] = Carbon::now();

    // Lưu giao dịch vào CSDL
    $transactionID = Transaction::insertGetId($data);

    if ($transactionID) {
        $shopping = Cart::content();
        foreach ($shopping as $key => $item) {
            // Lưu chi tiết đơn hàng
            Order::insert([
                'od_transaction_id' => $transactionID,
                'od_product_id' => $item->id,
                'od_sale' => $item->options->sale ?? 0, // Đảm bảo có giá trị mặc định
                'od_qty' => $item->qty,
                'od_price' => $item->price,
                'created_at' => Carbon::now(),
            ]);

            // Tăng số lượt mua của sản phẩm
            DB::table('products')->where('id', $item->id)->increment('pro_pay');
        }
    }

       $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
       $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $_POST['tst_total_money'];
        $orderId = time() . "";
        $redirectUrl = "http://localhost:8000/don-hang";
        $ipnUrl = "http://localhost:8000/don-hang";
        $extraData = "";

            $requestId = time() . "";
            $requestType = "payWithATM";
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            // dd($signature);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result =$this->execPostRequest($endpoint, json_encode($data));
            // dd($result);
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there
            return redirect()->to($jsonResult['payUrl']);
            // header('Location: ' . $jsonResult['payUrl']);
            
        
    }
    //
    //  public function postPay( Request $request){
    //     $data  =  $request->except('_token');
    //     if(isset(Auth::user()->id)){
    //         $data['tst_user_id']=Auth::user()->id;
    //     }
    //     $data['tst_total_money']= str_replace(',','',Cart::subtotal(0));
    //     $data['created_at']= Carbon::now();
    //     $transactionID=Transaction::insertGetId($data);
    //     if($transactionID){
    //         $shopping=Cart::content();
    //         foreach ($shopping as $key => $item) {
    //             //Lưu chi tiết đơn hàng
    //             Order::insert([
    //                 'od_transaction_id' => $transactionID,
    //                 'od_product_id'     => $item->id,
    //                 'od_sale'           => $item->options->sale,
    //                 'od_qty'            => $item->qty,
    //                 'od_price'          => $item->price
    //             ]);
    //             //Tăng pay-số lượt mua của sản phẩm đó
    //             DB::table('products')->where('id', $item->id)
    //                                         ->increment("pro_pay");

    //         }

    //     }
    //     Cart::destroy();
    //     return redirect()->to('/');
    //     // dd($request->all());
    // }
    public function update(Request $request,$id){
        if($request->ajax()){
            //Lấy tham số
            $qty= $request->qty ?? 1;
            $idProduct=$request->idProduct;
            $product=Product::find($idProduct);
            //kiểm tra tồn tại sản phẩm
            if(!$product)return response(['messages'=>'Không tồn tại sản phẩm cần update']);
           //Kiểm tra số lượng sản phẩm
            if($product->pro_number<$qty){
                response(['messages'=>'Số lượng không đủ']);
            }
            //update
            Cart::update($id, $qty);
            return response(['messages'=>'Cập nhật thành công']);
        }
        
    }
    // Xóa sản phẩm đơn hàng
    public function delete($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }
   
 
}
