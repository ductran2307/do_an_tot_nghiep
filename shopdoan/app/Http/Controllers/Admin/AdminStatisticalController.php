<?php

namespace App\Http\Controllers\Admin;

use App\HelpersClass\Date;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStatisticalController extends Controller
{
    public function index(){
        //1.Tổng đơn
        $totalTransaction=DB::table('transactions')->select('id')->count();

         //2.Tổng số thành viên
        $totalUses=DB::table('users')->select('id')->count();

         //2.Tổng số bài viết
         $totalProducts=DB::table('products')->select('id')->count();
         //3.Tổng đánh giá
         $totalRatings=DB::table('ratings')->select('id')->count();
        //4. Danh sách đơn hàng mới
         $transactions=Transaction::orderByDesc('id')
         ->limit(10)
         ->get();
         //5.Tóp sản phẩm xem nhiều
         $topViewProduct=Product::orderByDesc('pro_view')
         ->limit(5)->get();
         //6.Top sản phẩm mua nhiều
         $topPayProduct=Product::orderByDesc('pro_pay')
         ->limit(5)->get();
         //
         $listDay=Date::getListDayInMonth();
         
         //Thống kê trạng thái đơn hàng
         //Tiếp nhận
         $transactionDefault=Transaction::where('tst_status',1)->select('id')->count();
        //Vận chuyển
         $transactionProcess=Transaction::where('tst_status',2)->select('id')->count();
        //Hoàn thành
        $transactionSuccess=Transaction::where('tst_status',3)->select('id')->count();
        //Hủy bỏ
        $transactionCancle=Transaction::where('tst_status',-1)->select('id')->count();

        $statusTransaction =[
            [
                'Hoàn tất',$transactionSuccess,false
            ],
            [
                'Tiếp nhận',$transactionDefault,false
            ],
            [
                'Đang vận chuyển',$transactionProcess,false
            ],
            [
                'Hủy bỏ',$transactionCancle,false
            ],
        ];
        
        $revenueTransactionMonth=Transaction::where('tst_status',3)
        ->whereMonth('created_at',date('m'))
        ->select(DB::raw('sum(tst_total_money) as totalMoney'),DB::raw('DATE(created_at) day'))
        ->groupBy('day')
        ->get()->toArray();
        $revenueTransactionMonthDefault=Transaction::where('tst_status',1)
        ->whereMonth('created_at',date('m'))
        ->select(DB::raw('sum(tst_total_money) as totalMoney'),DB::raw('DATE(created_at) day'))
        ->groupBy('day')
        ->get()->toArray();


        $arrRevenueTransactionMonth  = [];
        $arrRevenueTransactionMonthDefault  = [];
        foreach($listDay as $day){
            $total = 0;
            foreach($revenueTransactionMonth as $key =>$revenue){
                if($revenue['day']==$day){
                    $total =$revenue['totalMoney'];
                    break;
                }
            }
            $arrRevenueTransactionMonth[]=(int)$total;
            $total = 0;
            foreach($revenueTransactionMonthDefault as $key =>$revenue){
                if($revenue['day']==$day){
                    $total =$revenue['totalMoney'];
                    break;
                }
            }
            $arrRevenueTransactionMonthDefault[]=(int)$total;
        }
        
         $viewData=[
            'totalTransaction'  =>$totalTransaction,
            'totalUses'         =>$totalUses,
            'totalProducts'     =>$totalProducts,
            'totalRatings'      =>$totalRatings,
            'transactions'      =>$transactions,
            'topViewProduct'    =>$topViewProduct,
            'topPayProduct'     =>$topPayProduct,
            'listDay'           =>json_encode($listDay),
            'statusTransaction' =>json_encode($statusTransaction),
            'arrRevenueTransactionMonth'=>json_encode($arrRevenueTransactionMonth),
            'arrRevenueTransactionMonthDefault'=>json_encode($arrRevenueTransactionMonthDefault)

        ];
        return view('admin.statistical.index',$viewData);
    }
}
