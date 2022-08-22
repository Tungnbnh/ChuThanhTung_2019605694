@extends('welcome')
@section('content')

<div style="width:1050px;" id="contact-page" class="container">
    <div class="bg">
        <div style="margin-bottom: 100px;" class="row">    		
            <div class="col-sm-10">    			   			
                <h2 class="title text-center">Liên Hệ Với Chúng Tôi</h2>    			    				    				
                <div id="gmap" class="contact-map">
                <img style="width:900px; height: 500px;" src="{{URL::to('public/frontend/images/a22.jpg')}}" alt="" />
                </div>
            </div>			 		
        </div>  

        <div class="row">  	
            <div class="col-sm-6">
                <div class="contact-form">
                    <h2 class="title text-center">Liên Lạc</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Họ và tên">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Lời nhắn của bạn"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Thông Tin Liên Lạc</h2>
                    <address>
                        <p>E-Shopper Inc.</p>
                        <p>Số 298 Đ. Cầu Diễn, Minh Khai, Bắc Từ Liêm, Hà Nội, Việt Nam</p>
                        <p>Hà Nội, Việt Nam</p>
                        <p>Mobile: +34 950 188 821</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: Nhom7@gmail.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Mạng Xã Hội</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    			
        </div>  
    </div>	
</div>

@endsection