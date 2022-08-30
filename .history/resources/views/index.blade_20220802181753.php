@extends('layouts.common')
@section('content')
<div class="header__box">
  @include('components.drawer')
  <div class="search__box">
    <form method="get" action="">
        <select name="">
          <option value="all_area">All area
          @foreach ($items as $item)
          <option value="{{$item->area->name}}">{{$item->area->name}}
          @endforeach
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
  @foreach ($items as $shop)
  <div class="shop__card">
    <div class="card__img">
        <img src="{{$item->image_url}}" alt="No image">
    </div>
    <div class="card__content">
      <h2 class="card__ttl">{{$shop->name}}</h2>
      <div class="tag">
        <p class="card__tag">#{{$item->area->name}}</p>
        <p class="card__tag">#{{$item->genre->name}}</p>
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