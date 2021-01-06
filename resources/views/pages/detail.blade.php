@extends('layouts.master') 

@section('title', 'Điện thoại '.$item->phoneName)

@section('content')
<div class="trangChu__cate">
  <div class="phone-detail">
    <ul class="phone-detail__breadcrumb">
      <li><a href="/">Trang chủ</a><span>›</span></li>
      <li><a href="/dtdd">Điện thoại </a><span>›</span></li>
      <li class="brand"><a href="/dtdd-samsung">iPhone </a></li>
    </ul>
    <div class="phone-detail__row-top d-flex">
      <h1>Điện thoại {{$item->phoneName}}</h1>
      <div class="rating-result">
        <?php renderStar($item->average) ?>
      </div>
    </div>
    <div class="phone-detail__demo">
      @include('partial.detail.left')
      @include('partial.detail.center')
      @include('partial.detail.right')
    </div>
    <div class="blog">
      @include('partial.blog.left')
      @include('partial.blog.right')
      <div class="clear-float"></div>
    </div>
  </div>
  @include('partial.cartModal')
</div>
@stop