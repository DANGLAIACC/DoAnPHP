<?php
include '../db_connection.php';
$conn = OpenCon();
$result = mysqli_query($conn, "SELECT * FROM modal");
CloseCon($conn);
?>

<div class="phone">
  <h1 class="h1">Điện thoại nổi bật nhất</h1>
  <ul class="phone__ul">
    <li class="phone__ul__li large"><a href="/dtdd/samsung-galaxy-a71"><img src="https://cdn.tgdd.vn/Products/Images/42/210246/Feature/samsung-galaxy-a71-spec-fixed-720x333.jpg" alt="abc">
        <h3>Galaxy A71</h3>
        <div class="d-flex justify-content-space-between">
          <div class="price"><strong>10.490.000₫</strong></div><label class="installment">Trả góp 0%</label>
        </div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>344 đánh giá</span></div>
      </a></li> 
      @foreach($result as $item) 
    <li class="phone__ul__li"><a class="large" href="/dtdd/200533/iphone-11-pro-max"><img src="https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-green-600x600.jpg" alt="a">
        <h3>{{$item->strtext}}</h3>
        <div class="price"><strong>{{$item->price}}</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>

    <li class="phone__ul__li"><a class="large" href="/dtdd/210653/iphone-11-pro-max-256gb"><img src="https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-black-600x600.jpg" alt="a">
        <h3>iPhone 11 Pro Max 256 GB</h3>
        <div class="price"><strong>37.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>29 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/210654/iphone-11-pro-max-512gb"><img src="https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-600x600.jpg" alt="a">
        <h3>iPhone 11 Pro Max 512 GB</h3>
        <div class="price"><strong>41.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>23 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/190323/iphone-xs"><img src="https://cdn.tgdd.vn/Products/Images/42/190323/iphone-xs-gold-600x600-2-600x600.jpg" alt="a">
        <h3>iPhone Xs 64 GB</h3>
        <div class="price"><strong>19.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/222512/samsung-galaxy-a21s-3gb"><img src="https://cdn.tgdd.vn/Products/Images/42/222512/samsung-galaxy-a21s-3gb-055520-045548-600x600.jpg" alt="a">
        <h3>Samsung Galaxy A21s 3GB/32GB</h3>
        <div class="price"><strong>4.090.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/219314/samsung-galaxy-a21s"><img src="https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-055620-045659-600x600.jpg" alt="a">
        <h3>Samsung Galaxy A21s 6GB/64GB</h3>
        <div class="price"><strong>4.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/206176/samsung-galaxy-note-10-plus"><img src="https://cdn.tgdd.vn/Products/Images/42/206176/samsung-galaxy-note-10-plus-171220-101247-600x600.jpg" alt="a">
        <h3>Samsung Galaxy Note 10 Plus</h3>
        <div class="price"><strong>17.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/214909/samsung-galaxy-note-10-lite"><img src="https://cdn.tgdd.vn/Products/Images/42/214909/samsung-galaxy-note-10-lite-thumb-600x600.jpg" alt="a">
        <h3>Samsung Galaxy Note 10 Lite</h3>
        <div class="price"><strong>11.490.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/225158/vsmart-star-4-3gb"><img src="https://cdn.tgdd.vn/Products/Images/42/225158/vsmart-star-4-3gb-071220-101201-600x600.jpg" alt="a">
        <h3>Vsmart Star 4 3GB/32GB</h3>
        <div class="price"><strong>2.290.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>15 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/224949/vsmart-star-4-den"><img src="https://cdn.tgdd.vn/Products/Images/42/224949/vsmart-star-4-den-600x600-2-600x600.jpg" alt="a">
        <h3>Vsmart Star 4 2GB/32GB</h3>
        <div class="price"><strong>2.090.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>9 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/217438/vsmart-active-3-6gb"><img src="https://cdn.tgdd.vn/Products/Images/42/217438/vsmart-active-3-6gb-emerald-green-600x600-600x600.jpg" alt="a">
        <h3>Vsmart Active 3 6GB/64GB</h3>
        <div class="price"><strong>3.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/225734/iphone-8-plus-128gb"><img src="https://cdn.tgdd.vn/Products/Images/42/225734/iphone-8-plus-128gb-082720-052716-600x600.jpg" alt="a">
        <h3>iPhone 8 Plus 128 GB</h3>
        <div class="price"><strong>16.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>20 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/217935/samsung-galaxy-s20"><img src="https://cdn.tgdd.vn/Products/Images/42/217935/samsung-galaxy-s20-600x600-hong-600x600.jpg" alt="a">
        <h3>Samsung Galaxy S20 </h3>
        <div class="price"><strong>18.490.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>4 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/217936/samsung-galaxy-s20-plus"><img src="https://cdn.tgdd.vn/Products/Images/42/217936/samsung-galaxy-s20-plus-600x600-fix-600x600.jpg" alt="a">
        <h3>Samsung Galaxy S20 Plus</h3>
        <div class="price"><strong>23.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/210648/iphone-11-256gb"><img src="https://cdn.tgdd.vn/Products/Images/42/210648/iphone-11-256gb-black-600x600.jpg" alt="a">
        <h3>iPhone 11 256GB</h3>
        <div class="price"><strong>23.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><span>4 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/210644/iphone-11-128gb"><img src="https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-green-600x600.jpg" alt="a">
        <h3>iPhone 11 128GB</h3>
        <div class="price"><strong>21.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>37 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/218662/oppo-a31"><img src="https://cdn.tgdd.vn/Products/Images/42/218662/oppo-a31-2020-128gb-den-600x600-1-600x600.jpg" alt="a">
        <h3>Oppo A31 RAM 6 GB</h3>
        <div class="price"><strong>4.790.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>35 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/225063/samsung-galaxy-note-20-5g"><img src="https://cdn.tgdd.vn/Products/Images/42/225063/samsung-galaxy-note-20-ultra-5g-063420-123447-600x600.jpg" alt="a">
        <h3>Samsung Galaxy Note 20 Ultra Note 20 Ultra 5G</h3>
        <div class="price"><strong>27.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><span>17 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/220522/samsung-galaxy-note-20"><img src="https://cdn.tgdd.vn/Products/Images/42/220522/samsung-galaxy-note-20-ultra-5g-051920-101934-600x600.jpg" alt="a">
        <h3>Samsung Galaxy Note 20 Ultra Note 20 Ultra</h3>
        <div class="price"><strong>24.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><span>28 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/218355/samsung-galaxy-note-20"><img src="https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg" alt="a">
        <h3>Samsung Galaxy Note 20 Ultra Note 20</h3>
        <div class="price"><strong>18.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>31 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/222596/oppo-reno4"><img src="https://cdn.tgdd.vn/Products/Images/42/222596/TimerThumb/oppo-reno4-(2)-600x600.jpg" alt="a">
        <h3>Oppo Reno 4 Reno 4</h3>
        <div class="price"><strong>7.210.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/223497/oppo-reno4-pro"><img src="https://cdn.tgdd.vn/Products/Images/42/223497/oppo-reno4-pro-274720-034747-600x600.jpg" alt="a">
        <h3>Oppo Reno 4 Reno 4 Pro</h3>
        <div class="price"><strong>10.190.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>41 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/213591/oppo-reno3"><img src="https://cdn.tgdd.vn/Products/Images/42/213591/oppo-reno3-trang-600x600-600x600.jpg" alt="a">
        <h3>Oppo Reno 3 Reno3</h3>
        <div class="price"><strong>8.990.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/216172/oppo-reno3-pro"><img src="https://cdn.tgdd.vn/Products/Images/42/216172/TimerThumb/oppo-reno3-pro-(6)-600x600.jpg" alt="a">
        <h3>Oppo Reno 3 Reno 3 Pro</h3>
        <div class="price"><strong>8.490.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>18 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/217856/oppo-a31-4gb"><img src="https://cdn.tgdd.vn/Products/Images/42/217856/oppo-a31-2020-trang-600x600-1-600x600.jpg" alt="a">
        <h3>Oppo A31 RAM 4 GB</h3>
        <div class="price"><strong>4.490.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/217308/xiaomi-redmi-9"><img src="https://cdn.tgdd.vn/Products/Images/42/217308/TimerThumb/xiaomi-redmi-9-(24)-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi 9 4GB/64GB</h3>
        <div class="price"><strong>3.390.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/224290/xiaomi-redmi-9-3gb"><img src="https://cdn.tgdd.vn/Products/Images/42/224290/xiaomi-redmi-9-3gb-114620-094621-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi 9 3GB/32GB</h3>
        <div class="price"><strong>3.390.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>22 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/221817/xiaomi-redmi-note-9-pro"><img src="https://cdn.tgdd.vn/Products/Images/42/221817/xiaomi-redmi-note-9-pro-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 9 Pro 6GB/64GB</h3>
        <div class="price"><strong>6.190.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>49 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/221820/xiaomi-redmi-note-9-pro-128gb"><img src="https://cdn.tgdd.vn/Products/Images/42/221820/xiaomi-redmi-note-9-pro-128gb-white-600x600-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 9 Pro 6GB/128GB</h3>
        <div class="price"><strong>6.690.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/212247/xiaomi-redmi-note-8-32gb"><img src="https://cdn.tgdd.vn/Products/Images/42/212247/xiaomi-redmi-note-8-32gb-white-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 8 3GB/32GB</h3>
        <div class="price"><strong>3.790.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/209535/xiaomi-redmi-note-8"><img src="https://cdn.tgdd.vn/Products/Images/42/209535/xiaomi-redmi-note-8-white-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 8 4GB/64GB</h3>
        <div class="price"><strong>4.290.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/212374/xiaomi-redmi-note-8-128gb"><img src="https://cdn.tgdd.vn/Products/Images/42/212374/xiaomi-redmi-note-8-128gb-black-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 8 4GB/128GB</h3>
        <div class="price"><strong>4.790.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/209797/xiaomi-redmi-note-8-pro"><img src="https://cdn.tgdd.vn/Products/Images/42/209797/xiaomi-redmi-note-8-pro-white-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 8 Pro 6GB/64GB</h3>
        <div class="price"><strong>5.190.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    <li class="phone__ul__li"><a class="large" href="/dtdd/214418/xiaomi-redmi-note-8-pro-6gb-128gb"><img src="https://cdn.tgdd.vn/Products/Images/42/214418/xiaomi-redmi-note-8-pro-6gb-128gb-white-600x600.jpg" alt="a">
        <h3>Xiaomi Redmi Note 8 Pro 6GB/128GB</h3>
        <div class="price"><strong>5.690.000₫</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>50 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
  </ul>
</div>