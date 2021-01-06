<?php
function formatMoney($money)
{
    return str_replace(',', '.', number_format($money, 0)) . '₫';
}
function renderStar($active)
{
    for ($i = 0; $i < $active; $i++) {
        echo '<i class="ico-ystar"></i>';
    }
    $deactive = 5 - $active;
    while ($deactive-- > 0) {
        echo '<i class="ico-gstar"></i>';
    }
}
