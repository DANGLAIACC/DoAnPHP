<div class="cart-modal">
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Giỏ hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if(session('cart'))
          @foreach(session('cart') as $id => $item)
          <div class="cart__item d-flex">
            <div class="cart__item__img cart__item__img d-flex flex-column"><img alt="{{$item['name']}}" src="https://cdn.tgdd.vn/Products/Images/42/{{ $id }}/{{$item['photo']}}-600x600.jpg" class="img-fluid"></div>
            <div class="cart__item__content w-100 mr-4">
              <div class="cart__item__description"><a class="cart__item__name text-decoration-none" href="/dtdd/{{ $id }}/abc">{{$item['name']}}</a>
                <div class="d-flex justify-content-between">
                  <div class="cart__item__color dropdown"><span>Màu: Xám</span>
                    
                  </div>
                  <div class="btn text-danger d-flex align-items-center"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle mr-2" fill="#dc3545">
                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>Xóa</div>
                </div>
              </div>
            </div>
            <div class="cart__item__quantity d-flex">
              <div class="abate "></div>
              <div class="number">{{$item['quantity']}}</div>
              <div class="augment"></div>
            </div>
            <div class="cart__item__price">
              <b class="d-block text-right">
                <?php
                echo formatMoney($item['price'])
                ?>
              </b>
              <div class="cart__item__discount text-right"><del>23.990.000đ</del><span>-27%</span></div>
            </div>
          </div>
          @endforeach

          <button type="button" class="btn p-0 cart__empty__btn text-center" data-dismiss="modal">Đặt hàng &amp; thanh toán</button>
          @else
          <div class="cart__empty text-center"><img src="https://salt.tikicdn.com/desktop/img/mascot@2x.png" alt="cart__empty" class="cart__empty__img">
            <p class="cart__empty__note">Không có sản phẩm nào trong giỏ hàng của bạn.</p><button type="button" class="btn p-0 cart__empty__btn text-center" data-dismiss="modal">TIẾP TỤC MUA SẮM</button>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>