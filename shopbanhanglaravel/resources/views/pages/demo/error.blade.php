@extends('welcome')
@section('content')

<div style="width:1050px;" class="container text-center">
    <div class="logo-404">
        <a href="{{URL::to('/')}}"><img src="{{URL::to('public/frontend/images/logo.png')}}" alt="" /></a>
    </div>
    <div class="content-404">
        <img src="{{URL::to('public/frontend/images/404.png')}}" class="img-responsive" alt="" />
        <h1><b>Xin Lỗi!</b> Chúng tôi không thể tìm thấy trang này</h1>
        <p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
        <h2><a href="{{URL::to('/')}}">Quay Lại Trang Chủ</a></h2>
    </div>
</div>

@endsection