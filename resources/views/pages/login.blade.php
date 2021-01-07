@extends('layouts.master')

@section('title', 'Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng')

@section('content')
<div class="trangChu__cate">
  <div class="Login">
    <div class="container" id="container">
      <div class="form-container Log-up-container">
        <form>
          <h1>Tạo tài khoản mới</h1>
          <div class="w-100 position-relative">
            <div class="w-100"><input type="text" name="usr" class="form-control " placeholder="Nhập Tên đăng nhập" required="" value=""></div>
          </div>
          <div class="w-100 position-relative">
            <div class="w-100"><input type="password" name="pwd" class="form-control " placeholder="Nhập Mật khẩu" required="" value=""></div>
          </div>
          <div class="w-100 position-relative">
            <div class="w-100"><input type="text" name="fullname" class="form-control " placeholder="Nhập Họ tên" required="" value=""></div>
          </div>
          <div class="w-100 position-relative">
            <div class="w-100"><input type="number" name="phoneNumber" class="form-control " placeholder="Nhập Số điện thoại" required="" value=""></div>
          </div>
          <div class="w-100 position-relative">
            <div class="w-100"><input type="text" name="address" class="form-control " placeholder="Nhập Địa chỉ" required="" value=""></div>
          </div>
          <div class="custom-control custom-radio custom-control-inline my-2 text-align-left w-100 pl-0"><span class="mx-2">Giới tính:</span>
            <div>
              <div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customerGender1" name="customerGender" class="custom-control-input" checked=""><label class="custom-control-label" for="customerGender1">Nam</label></div>
              <div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customerGender2" name="customerGender" class="custom-control-input"><label class="custom-control-label" for="customerGender2">Nữ</label></div>
            </div>
          </div><button type="button">Đăng ký</button>
        </form>
      </div>
      <div class="form-container Log-in-container">
        <form action="/checkLogin" method="post">
          {{ csrf_field() }}
          <h1>Đăng nhập</h1>
          <div class="social-container"><a href="a.html" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="a.html" class="social"><i class="fa fa-google" aria-hidden="true"></i></a><a href="a.html" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div><span>hoặc sử dụng tài khoản</span>
          <div class="w-100 position-relative">
            <div class="w-100">
              <input type="text" name="usr" id="usr" class="form-control " placeholder="Nhập Tên đăng nhập" required value="">
            </div>
          </div>
          <div class="w-100 position-relative">
            <div class="w-100">
              <input type="password" name="pwd" id="pwd" class="form-control " placeholder="Nhập Mật khẩu" required value="">
            </div>
          </div><a href="a.html">Quên mật khẩu</a>
          <button type="submit">Đăng nhập</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Bạn đã có tài khoản?</h1>
            <p>Để kết nối với chúng tôi, vui lòng đăng nhập.</p><button class="ghost" id="Login">Đăng nhập</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Khách hàng mới?</h1>
            <p>Đăng ký thông tin và tham gia cùng chúng tôi</p><button class="ghost" id="LogUp">Đăng ký</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop