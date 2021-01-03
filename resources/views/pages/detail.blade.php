@extends('layouts.master')

@section('title', 'Điện thoại iPhone 11 Pro Max 64 GB')

@section('content')
<div class="trangChu__cate">
  <div class="phone-detail">
    <ul class="phone-detail__breadcrumb">
      <li><a href="/">Trang chủ</a><span>›</span></li>
      <li><a href="/dtdd">Điện thoại </a><span>›</span></li>
      <li class="brand"><a href="/dtdd-samsung">iPhone </a></li>
    </ul>
    <div class="phone-detail__row-top d-flex">
      <h1>Điện thoại iPhone 11 Pro Max 64 GB</h1>
      <div class="rating-result"><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-ystar"></i><i class="ico-gstar"></i></div>
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