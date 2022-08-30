@extends('layouts.common')
@section('content')
<div class="header__box">
  @include('components.drawer')
  <div class="search__box">
    <form method="get" action="">
        <select name="">
          <option value="all_area">All area
          <option value="">areaを取得して表示
        </select>
        <select name="">
          <option value="all_genre">All genre
          <option value="">genreを取得して表示
        </select>
      <input type="text" value="" placeholder="search ...">
    </form>
  </div>
</div>

<div class="shops">
  @foreach ($items as $item)
  <div class="shop__card">
    <div class="card__img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="No image">
    </div>
    <div class="card__content">
      <h2 class="card__ttl">{{$item->name}}店名</h2>
      <div class="tag">
        <p class="card__tag">#{{$item->area->name}}area名</p>
        <p class="card__tag">#{{$item->area->name}}genre名</p>
      </div>
      <div class="card__content__inner">
        <a href=""><div class="card__detail">詳しくみる</div></a>
        <a href=""><div class="heart__img">
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        </div></a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection