@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông Tin Khách Hàng
        </div>
               
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>                   
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                </tr>
                </thead>
                <tbody>                
                    <tr>
                        <td>{{$order_by_id->user_name}}</td>
                        <td>{{$order_by_id->user_address}}</td>   
                        <td>{{$order_by_id->user_phone}}</td>                        
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>

<br><br>

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông Tin Vận Chuyển
        </div>
               
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>                   
                    <th>Tên Người Vận Chuyển</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                </tr>
                </thead>
                <tbody>               
                    <tr>
                        <td>{{ $order_by_id->shipping_name }}</td>
                        <td>{{ $order_by_id->shipping_address}}</td>
                        <td>{{ $order_by_id->shipping_phone }}</td>                           
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>

<br><br>

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Chi Tiết Đơn Hàng
        </div>
               
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>                   
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Tổng Tiền</th>
                </tr>
                </thead>
                <tbody>              
                        <tr>
                            <td>{{ $order_by_id->product_name }}</td>
                            <td>{{ $order_by_id->product_sales_quantity }}</td>
                            <td>{{ $order_by_id->product_price.' '.'VNĐ' }}</td>
                            <td>{{ ($order_by_id->product_price * $order_by_id->product_sales_quantity).' '.'VNĐ' }}</td>                          
                        </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>
@endsection