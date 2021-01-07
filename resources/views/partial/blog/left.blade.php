<?php
$totalRate = 0;
$totalMulti = 0;
for ($i = 5; $i > 0; $i--) {
  $totalRate += $rates[5 - $i]->tinh;
  $totalMulti += $rates[5 - $i]->tinh * $i;
}
?>
<div class="blog__left">
  <div>
    <h2>Đặc điểm nổi bật của {{$item->phoneName}}</h2>
    <div class="blogLeft_Article">
      <?php echo $item->article ?>
    </div>
    <div class="evaluate">
      <div class="evaluate__top">
        <h3><?php echo $totalRate ?> đánh giá</h3><input class="cmtKey" type="text" placeholder="Tìm theo nội dung đánh giá">
      </div>
      <div class="evaluate__center"><b><?php echo round($totalMulti / $totalRate, 1) ?><i class="iconcom-star-large "></i></b>
        <div class="rate-analyst">
          <table>
            <tbody>

              @for($i=5;$i>0;$i--)
              <tr>
                <td>{{$i}}</td>
                <td>
                  <div class="progressbar__out">
                    <div class="progressbar__in" style='width: {{($rates[5-$i]->tinh/$totalRate*100)}}%'></div>
                  </div>
                </td>
                <td><a href="/dtdd/200533/a.html"><b>{{$rates[5-$i]->tinh}}</b> đánh giá</a></td>
              </tr>
              @endfor 
            </tbody>
          </table>
        </div>
        <div class="btnEvaluate bg-yellow" data-toggle="modal" data-target="#cartModal">Mua ngay &amp; bình luận</div>
      </div>
      <div class="evaluate__bottom">
        @foreach($top3Evaluate as $item)
        <div class="evaluate__item">
          <div class="customer__name"><b>{{$item->fullname}}</b>
            <p>Đã mua tại TheGioiDiDong.com</p>
          </div>
          <div class="customer__comment">
            <?php renderStar($item->rate_star) ?>
            <i>
              {{$item->content}}
            </i>
          </div>
          <div class="customer__discuss">
            <i class="ico-like"></i><a href="ab.html">Hữu ích</a>
            <span>{{$item->time_up}}</span>
          </div>
        </div>
        @endforeach
      </div><a class="evaluate__all" href="/evaluate/200533/iphone-11-pro-max">Xem tất cả đánh giá</a>
    </div>
  </div>
</div>