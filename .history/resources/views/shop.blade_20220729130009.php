@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="shop-detail">
  <div class="shop-detail__card__box">
    <div class="shop-detail__ttl">
      <a href="">div.</a>
      <h2>店名</h2>
    </div>
    <div class="shop-detail__card">
      <div class="card__img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="No image">
      </div>
      <div class="card__content">
          <p class="card__tag">#area名</p>
      </div>
    </div>
  </div>
  <div class="book__card__box">
    <div class="book__card">
    </div>
  </div>
</div>
@endsection