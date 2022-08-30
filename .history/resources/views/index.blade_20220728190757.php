@extends('layouts.common')
@section('content')
<div class="search__box">
  <form method="get" action="">
    <select id="blood" name="">
      <option value="all_area">all area
      <option value="">areaを取得して表示
    </select>
    <select id="birth" name="">
      <option value="all_genre">all genre
      <option value="/1/">1月
      <option value="/2/">2月
      <option value="/3/">3月
      <option value="/4/">4月
      <option value="/5/">5月
      <option value="/6/">6月
      <option value="/7/">7月
      <option value="/8/">8月
      <option value="/9/">9月
      <option value="/10/">10月
      <option value="/11/">11月
      <option value="/12/">12月
    </select>
    <input type="button" value="絞り込む" id="button"> <input type="button" value="すべて表示" id="button2">
  </form>
</div>
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
        <a href=""><div class="card__detail">詳しくみる</div></a>
        <a href=""><div class="heart__img">
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        </div></a>
      </div>
    </div>
  </div>
</div>
@endsection