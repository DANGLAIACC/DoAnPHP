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
    @foreach($modals as $i)

    <li class="phone__ul__li"><a class="large" href="/dtdd/{{$i->id}}/{{$i->manu_id}}-{{$i->version_id}}{{$i->url !== '' ? (-$i->url):'' }}"><img src="https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-black-600x600.jpg" alt="a">
        <h3>{{$i->strtext}}</h3>
        <div class="price"><strong>{{$i->price}}</strong></div>
        <div class="ratingresult"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i><span>29 đánh giá</span></div>
        <div class="promo noimage">
          <p>Giảm thêm <b>9.000.000₫</b></p>
        </div><label class="installment">Trả góp 0%</label>
      </a></li>
    @endforeach 
  </ul>
</div>