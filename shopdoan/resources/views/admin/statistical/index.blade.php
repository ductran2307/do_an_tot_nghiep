@extends('layouts.app_master_admin')
@section('content')


<section class="content-header">
    <h1>Trang quản trị hệ thống website bán đồng hồ </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Tổng đơn</span>
                    <span class="info-box-number">{{$totalTransaction}}<small><a href="{{ route('admin.transaction.index') }}"> (Chi tiết)</a></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Thành viên</span>
                    <span class="info-box-number">{{$totalUses}}<small><a href="{{ route('admin.user.index') }}"> (Chi tiết)</a></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline "></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sản phẩm</span>
                    <span class="info-box-number">{{ $totalProducts }}<small><a href="{{ route('admin.product.index') }}"> (Chi tiết)</a></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Đánh giá</span>
                    <span class="info-box-number">{{ $totalRatings }}<small><a href="{{ route('admin.rating.index') }}"> (Chi tiết)</a></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
  <div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-8">
        <figure class="highcharts-figure">
            <div id="container2" data-list-day="{{ $listDay }}" 
            data-money="{{ $arrRevenueTransactionMonth }}" 
            data-money-default="{{ $arrRevenueTransactionMonthDefault }}">
        </div>
            
        </figure>
    </div>
    <div class="col-sm-4">
        <figure class="highcharts-figure">
            <div id="container" data-json="{{ $statusTransaction }}"></div>
            
        </figure>
    </div>
  </div>
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
           
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách đơn hàng mới</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Info</th>
                                    <th>Money</th>
                                    <th>Account</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->id}}</td>
                                    <td>
                                        <ul>
                                            <li>Name: {{$transaction->tst_name}}</li>
                                            <li>Email: {{$transaction->tst_email}}</li>
                                            <li>Phone: {{$transaction->tst_phone}}</li>
                                        </ul>
                                    </td>
                                    <td>{{number_format($transaction->tst_total_money,0,',','.')}}đ</td>
                                    <td>
                                        @if ($transaction->tst_user_id)
                                            <span class="label label-success">Thành viên</span>
                                        @else
                                            <span class="label label-default">Khách</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="label label-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                                            {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                                        </span>
                                    </td>

                                    <td>{{$transaction->created_at}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-right">Danh sách đơn hàng</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
         
            <!-- PRODUCT LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Top sản phẩm bán chạy</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        @foreach ($topPayProduct as $item)
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">{{ $item->pro_pay }} Lượt mua
                                <span class="label label-warning pull-right">{{number_format($item->pro_price,0,',','.')}}</span>
                                </a>
                                <span class="product-description">
                                {{ $item->pro_name }}
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- PRODUCT LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Top sản phẩm xem nhiều</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        @foreach ($topViewProduct as $item)
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">{{ $item->pro_view }} <i class="fa fa-eye"></i>
                                <span class="label label-warning pull-right">{{number_format($item->pro_price,0,',','.')}}</span>
                                </a>
                                <span class="product-description">
                                {{ $item->pro_name }}
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
  @endsection
@section('script')
<link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css">
<script src="https://code.highcharts.com/highcharts.js"></script>
{{-- <script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> --}}
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    let dataTransaction = $("#container").attr('data-json');
    dataTransaction = JSON.parse(dataTransaction);
    let listday = $("#container2").attr('data-list-day');
    listday = JSON.parse(listday);
    let listMoney = $("#container2").attr('data-money');
    listMoney = JSON.parse(listMoney);
    let listMoneyDefault= $("#container2").attr('data-money-default');
    listMoneyDefault = JSON.parse(listMoneyDefault);

    Highcharts.chart('container', {
        chart: {
            styledMode: true
        },
        title: {
            text: 'Thống kê trạng thái đơn hàng'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar','Apr']
        },
        series: [{
            type: 'pie',
            allowPointSelect: true,
            keys: ['name', 'y', 'selected', 'sliced'],
            data: dataTransaction,
            showInLegend: true
        }]
    });
    Highcharts.chart('container2', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Biểu đồ doanh thu các ngày trong tháng'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: listday
    },
    yAxis: {
        title: {
            text: 'Doanh thu'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Hoàn tất giao dịch',
        marker: {
            symbol: 'square'
        },
        data: listMoney
        },
        {
        name: 'Tiếp nhận',
        marker: {
            symbol: 'square'
        },
        data: listMoneyDefault
        },]
    });

</script>
@endsection
