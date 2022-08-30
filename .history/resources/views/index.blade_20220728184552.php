@extends('layouts.common')
@section('content')
<div class="shops">
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
        <a href=""></a><div class="card__detail">詳しくみる</div>
        <div class="heart__img">
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        </div>
      </div>
    </div>
  </div>
  
</div>
  
</div>

@endsection