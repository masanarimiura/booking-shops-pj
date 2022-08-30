@extends('layouts.common')
@section('content')
<div class="header__box">
  @include('components.drawer')
  <div class="search__box">
    <form method="get" action="{{ route('search') }}" name="search_shops_form" onchange="searchShops()">
      @if($request ?? '')
      <select name="area_id" id="search_area_id">
        <option value="" @if($request->area_id == '') selected @endif >All area
        <option value="13" @if($request->area_id == 13) selected @endif >東京都
        <option value="27" @if($request->area_id == 27) selected @endif >大阪府
        <option value="40" @if($request->area_id == 40) selected @endif >福岡県
      </select>
      <select name="genre_id">
        <option value="" @if($request->genre_id == '') selected @endif >All genre
        <option value="1" @if($request->genre_id == 1) selected @endif >寿司
        <option value="2" @if($request->genre_id == 2) selected @endif >焼肉
        <option value="3" @if($request->genre_id == 3) selected @endif >居酒屋
        <option value="4" @if($request->genre_id == 4) selected @endif >イタリアン
        <option value="5" @if($request->genre_id == 5) selected @endif >ラーメン
      </select>
      <input type="text" name="search_text" value="{{ $request->search_text }}" placeholder="search ...">
      @else
      <select name="area_id" id="search_area_id" value="">
        <option value="">All area
        <option value="13">東京都
        <option value="27">大阪府
        <option value="40">福岡県
      </select>
      <select name="genre_id" value="">
        <option value="">All genre
        <option value="1">寿司
        <option value="2">焼肉
        <option value="3">居酒屋
        <option value="4">イタリアン
        <option value="5">ラーメン
      </select>
      <input type="text" name="search_text" value="" placeholder="search ...">
      @endif
    </form>
  </div>
</div>

<div class="shops">
  @if(count($shops) >= 1)
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
        <form method="get" action="{{ route('detail') }}">
          @csrf
          <input type="text" name="shop_id" value="{{$shop->id}}" style="display:none">
          <div>
            <input type="submit" value="詳しくみる" class="card__detail">
          </div>
        </form>
        @if(Auth::check())
          @if(array_search(Auth::id(), array_column($shop->likes->toArray(), 'user_id')) !== false )
            <form action="{{ route('dislike') }}" method="post">
              @csrf
                <div class="heart__img">
                  <input type="text" name="shop_id" value="{{$shop->id}}" style="display:none">
                  <input type="text" name="search_text" value="{{ $request->search_text }}" style="display:none">
                  <input type="text" name="area_id" value="{{ $request->area_id }}" style="display:none">
                  <input type="text" name="search_text" value="{{ $request->search_text }}" style="display:none">
                  <input type="image" src="{{ asset('/image/heart.png')}}" alt="No image">
                </div>
            </form>
          @else
            <form action="{{ route('like') }}" method="post">
              @csrf
                <div class="heart__img">
                  <input type="text" name="shop_id" value="{{$shop->id}}" style="display:none">
                  <input type="image" src="{{ asset('/image/grey-heart.png')}}" alt="No image">
                </div>
            </form>
          @endif
        @else
          <a href="{{ route('register') }}">
            <div class="heart__img">
              <img src="{{ asset('/image/grey-heart.png')}}" alt="No image">
            </div>
          </a>
        @endif
      </div>
    </div>
  </div>
  @endforeach
  @else
  <p class="error">検索に当てはまるものがありませんでした。他の条件でお探しください</p>
  @endif
</div>
@endsection