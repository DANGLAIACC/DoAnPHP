@extends('layouts.master')

@section('title', 'Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng')

@section('content')
<div class="trangChu__cate">
  @include('partial.index.banner')
  @include('partial.index.filter')
  @include('partial.index.listPhone')
</div>
@stop