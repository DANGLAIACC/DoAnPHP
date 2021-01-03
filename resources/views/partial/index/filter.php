<?php
$manus = array(
  "iphone" => "iPhone-(Apple)42-b_16.jpg",
  "samsung" => "Samsung42-b_25.jpg",
  "oppo" => "OPPO42-b_27.png",
  "xiaomi" => "Xiaomi42-b_45.jpg",
  "vivo" => "Vivo42-b_50.jpg",
  "realme" => "Realme42-b_37.png",
  "vsmart" => "Vsmart42-b_40.png",
  "nokia" => "Nokia42-b_21.jpg",
);

function manu_onClick($manuId)
{
  echo "
    <script>
      console.log({$manuId});
    </script>
  ";
}
?>

<div class="filter">
  <div class="filter__manufacturer">
    <?php
    foreach ($manus as $id => $img) {
      echo "<a>
      <img src='https://cdn.tgdd.vn/Brand/1/{$img}' alt={x.manuId} />
    </a>";
    }
    ?>
  </div>
  <div class="d-flex">
    <div class="filter__left d-flex">
      <div class="filter__price">
        <label>Chọn mức giá: </label>
        <a href="/dtdd?p=duoi-2-trieu" data-id="7">
          Dưới 2 triệu
        </a>
        <a href="/dtdd?p=tu-2-4-trieu" data-id="9">
          Từ 2 - 4 triệu
        </a>
        <a href="/dtdd?p=tu-4-7-trieu" data-id="289">
          Từ 4 - 7 triệu
        </a>
        <a href="/dtdd?p=tu-7-13-trieu" data-id="562">
          Từ 7 - 13 triệu
        </a>
        <a href="/dtdd?p=tren-13-trieu" data-id="253">
          Trên 13 triệu
        </a>
      </div>

      <div class="filter__feature">
        <span class="muiTenXanh">Bộ lọc</span>
        <div class="property muiTenTrang d-none">
          <i class="ico-close"></i>
          <div class="prop">
            <strong>Loại điện thoại</strong>
            <a href="/dtdd?g=dien-thoai-pho-thong" class="" data-id="62879">
              <i class="ico-checkbox"></i>
              Điện thoại phổ thông
            </a>
            <a href="/dtdd?g=android" class="" data-id="39237">
              <i class="ico-checkbox"></i>
              Android
            </a>
            <a href="/dtdd?g=iphone-ios" class="" data-id="39238">
              <i class="ico-checkbox"></i>
              iPhone (iOS)
            </a>
          </div>
          <div class="prop">
            <strong>Dung lượng pin</strong>
            <a href="/dtdd-pin-3000-den-5000-mah" class="" data-id="163466">
              <i class="ico-checkbox"></i>
              Từ 3000 đến 5000 mAh
            </a>
            <a href="/dtdd-pin-khung" class="" data-id="163467">
              <i class="ico-checkbox"></i>
              Pin khủng trên 5000 mAh
            </a>
          </div>
          <div class="prop">
            <strong>Dung lượng RAM</strong>
            <a href="/dtdd-ram-duoi-4gb" class="" data-id="172937">
              <i class="ico-checkbox"></i>
              Dưới 4 GB
            </a>
            <a href="/dtdd-ram-4-den-6gb" class="" data-id="172938">
              <i class="ico-checkbox"></i>
              Từ 4 - 6 GB
            </a>
            <a href="/dtdd-ram-8gb-tro-len" class="" data-id="172939">
              <i class="ico-checkbox"></i>8 GB trở lên
            </a>
          </div>
          <div class="prop">
            <strong>Bộ nhớ trong</strong>
            <a href="/dtdd-rom-duoi-32gb" class="" data-id="172941">
              <i class="ico-checkbox"></i>
              Dưới 32 GB
            </a>
            <a href="/dtdd-rom-32-den-64gb" class="" data-id="172942">
              <i class="ico-checkbox"></i>
              Từ 32 - 64 GB
            </a>
            <a href="/dtdd-rom-128-den-256gb" class="" data-id="172943">
              <i class="ico-checkbox"></i>
              Từ 128 - 256 GB
            </a>
            <a href="/dtdd-rom-512gb-tro-len" class="" data-id="172944">
              <i class="ico-checkbox"></i>
              512 GB trở lên
            </a>
          </div>
          <div class="prop">
            <strong>Tính năng camera</strong>
            <a href="/dtdd-camera-goc-rong" class="" data-id="140894">
              <i class="ico-checkbox"></i>
              Camera góc rộng
            </a>
            <a href="/dtdd-camera-xoa-phong" class="" data-id="140895">
              <i class="ico-checkbox"></i>
              Camera xóa phông
            </a>
            <a href="/dtdd-camera-zoom" class="" data-id="140896">
              <i class="ico-checkbox"></i>
              Camera zoom chụp xa
            </a>
            <a href="/dtdd-camera-macro" class="" data-id="163409">
              <i class="ico-checkbox"></i>
              Camera macro chụp cận cảnh
            </a>
          </div>
          <div class="prop">
            <strong>Tính năng đặc biệt</strong>
            <a href="/dtdd-bao-mat-khuon-mat" class="" data-id="173170">
              <i class="ico-checkbox"></i>
              Bảo mật khuôn mặt
            </a>
            <a href="/dtdd-bao-mat-van-tay" class="" data-id="173171">
              <i class="ico-checkbox"></i>
              Bảo mật vân tay
            </a>
            <a href="/dtdd-sac-pin-nhanh" class="" data-id="173172">
              <i class="ico-checkbox"></i>
              Sạc pin nhanh
            </a>
            <a href="/dtdd-sac-khong-day" class="" data-id="173173">
              <i class="ico-checkbox"></i>
              Sạc không dây
            </a>
            <a href="/dtdd-chong-nuoc-bui" class="" data-id="173174">
              <i class="ico-checkbox"></i>
              Chống nước, bụi
            </a>
          </div>

          <div class="prop">
            <strong>Kiểu màn hình</strong>
            <a href="/dtdd-man-hinh-sieu-tran-vien" class="" data-id="140891">
              <i class="ico-checkbox"></i>
              Siêu tràn viền
            </a>
            <a href="/dtdd-man-hinh-tran-vien" class="" data-id="140890">
              <i class="ico-checkbox"></i>
              Tràn viền (tai thỏ, giọt nước...)
            </a>
          </div>
          <div class="prop">
            <strong>Kích thước màn hình</strong>
            <a href="/dtdd-tu-6-inch" class="" data-id="40435">
              <i class="ico-checkbox"></i>
              Màn hình lớn 6 inch trở lên
            </a>
            <a href="/dtdd-nho-gon" class="" data-id="163351">
              <i class="ico-checkbox"></i>
              Nhỏ gọn dễ cầm
            </a>
          </div>
          <div class="prop">
            <strong>Chất liệu vỏ</strong>
            <a href="/dtdd?g=kim-loai-nguyen-khoi" class="" data-id="57279">
              <i class="ico-checkbox"></i>
              Kim loại
            </a>
            <a href="/dtdd?g=kim-loai-va-kinh" class="" data-id="57311">
              <i class="ico-checkbox"></i>
              Kim loại và kính
            </a>
          </div>
        </div>
      </div>

      <div class="filter__barpage">
        <a href="?s=moi-ra-mat" data-id="moi-ra-mat" class="check">
          <i class="ico-checkbox"></i> Mới
        </a>
        <a href="?s=tra-gop-0-phan-tram" data-id="tra-gop-0-phan-tram" class="">
          <i class="ico-checkbox"></i> Trả góp 0%
        </a>
        <a href="?s=doc-quyen" data-id="doc-quyen" class="">
          <i class="ico-checkbox"></i> Độc quyền
          <span class="n">MỚI</span>
        </a>
      </div>
    </div>

    <div class="filter__right">
      <span class="muiTenXanh">Sắp xếp</span>
      <div class="muiTenTrang" style="display: none;">
        {/* style={{ display: 'none' }} */}
        <i class="ico-close"></i>
        <a href="a.html" class="check" data-id="5">
          <i class="ico-checklist"></i>Nổi bật nhất
        </a>
        <a href="a.html" data-id="6">
          <i class="ico-checklist"></i>Bán chạy nhất
        </a>
        <a href="a.html" data-id="1">
          <i class="ico-checklist"></i>Giá cao đến thấp
        </a>
        <a href="a.html" data-id="2">
          <i class="ico-checklist"></i>Giá thấp đến cao
        </a>
      </div>
    </div>
  </div>
</div>