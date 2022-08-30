@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="shop-detail">
  <div class="shop-detail-card__box">
    <div class="shop-ttl">
      店名
    </div>
    <div class="shop-detail__card">
      <div class="shop__card">
    <div class="card__img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="No image">
    </div>
    <div class="card__content">
      <h2 class="card__ttl">店名</h2>
      <div class="tag">
        <p class="card__tag">#area名</p>
        <p class="card__tag">#genre名</p>
      </div>
      <div class="card__content__inner">
        <a href=""><div class="card__detail">詳しくみる</div></a>
        <a href=""><div class="heart__img">
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        </div></a>
      </div>
    </div>
  </div>
    </div>
  </div>
  <div class="book__card__box">
    <div class="book__card">
    </div>
  </div>
</div>
@endsection