@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="shop-detail">
  <div class="shop-detail__card__box">
    <div class="shop-detail__ttl">
      <a href=""><div class="return__btn"></div></a>
      <h2>店名</h2>
    </div>
    <div class="shop-detail__card">
      <div class="card__img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="No image">
      </div>
      <div class="tag">
        <p>#area名</p>
        <p class="card__tag">#genre名</p>
      </div>
      <div class="card__content">
        <p>料理長嚴選の食材办白作石寿司• 味• 個格、书客樣の满足度在徹底的《追及乚九书店 。特別お店の説明文</p>
      </div>
    </div>
  </div>
  <div class="book__card__box">
    <div class="book__card">
    </div>
  </div>
</div>
@endsection