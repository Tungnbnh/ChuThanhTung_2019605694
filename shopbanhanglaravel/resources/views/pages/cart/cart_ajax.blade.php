@extends('welcome')
@section('content')

<section id="cart_items">
		<div style="width:1050px;" class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
                
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh</td>
							<td class="description">Mô Tả</td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        @php
                            print_r(Session::get('cart'));
                        @endphp
						<tr>
							<td class="cart_product">
								<a href=""><img src="" width="50" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>Sản Phẩm ID: 111</p>
							</td>
							<td class="cart_price">
								<p></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="" method="POST">
										
										<input class="cart_quantity_input" type="number" min="0" name="cart_quantity" value="">
										<input type="hidden" value="" name="rowId_cart" class="form-control">
										<input type="submit" value="Cập nhật" name="update_qty" class="btl btl-default btl-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
                                    
                                </p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times text-danger text"></i></a>
							</td>
						</tr>	
                    					
					</tbody>
				</table>
			</div>
		</div>
</section>

<section id="do_action">
		<div style="width: 1050px;" class="container">
			<div class="heading">
				<h3>Bạn thích làm gi tiếp theo?</h3>
				<p>Chọn xem bạn có mã giảm giá hoặc điểm thưởng muốn sử dụng hoặc muốn ước tính chi phí giao hàng của mình.</p>
			</div>
			<div style="height: 500px;" class="row">
				<div class="col-sm-6">
					<div style="height: 350px;" class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Sử dụng mã phiếu giảm giá</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Sử dụng phiêu qua tặng</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Ước tính hàng & Thuế</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Quốc gia:</label>
								<select>
									<option>Việt Nam</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Vùng / Tiểu bang:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Mã Bưu Chính:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Lấy lời trích dẫn</a>
						<a class="btn btn-default check_out" href="">Tiếp tục</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div style="height: 350px;" class="total_area">
						<ul>
							<li>Tổng <span></span></li>
							<li>Thuế <span></span></li>
							<li>Phí Vận Chuyển <span>Free</span></li>
							<li>Thành Tiền <span></span></li>
						</ul>						
							<a style="margin-left: 40px;" class="btn btn-default check_out" href="">Thanh toán</a>
						
							<a style="margin-left: 40px;" class="btn btn-default check_out" href="">Thanh toán</a>						
					</div>
				</div>
			</div>
		</div>
</section>

@endsection