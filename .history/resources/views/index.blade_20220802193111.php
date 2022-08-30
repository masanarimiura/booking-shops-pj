@extends('layouts.common')
@section('content')
<div class="header__box">
  @include('components.drawer')
  <div class="search__box">
    <form method="get" action="{{ route('search') }}">
        <select name="area_id">
          <option value="">All area
          <option value="13">東京都
          <option value="27">大阪府
          <option value="40">福岡県
        </select>
        <select name="genre_id">
          <option value="">All genre
          <option value="1">寿司
          <option value="2">焼肉
          <option value="3">居酒屋
          <option value="4">イタリアン
          <option value="5">ラーメン
        </select>
      <input type="text" name="search_text" value="" placeholder="search ...">
    </form>
  </div>
</div>

<div class="shops">
  @if($shops )
  @foreach ($shops as $shop)
  <div class="shop__card">
    <div class="card__img">
        <img src="{{$shop->image_url}}" alt="No image">
    </div>
    <div class="card__content">
      <h2 class="card__ttl">{{$shop->name}}</h2>
      <div class="tag">
        <p class="card__tag">#{{$shop->area->name}}</p>
        <p class="card__tag">#{{$shop->genre->name}}</p>
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
  @else
  <p>検索に当てはまるものがありませんでした。他の条件でお探しください</p>
  @endif
</div>
@endsection