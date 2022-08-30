@extends('layouts.common')
@section('content')
@include('components.drawer')
@foreach ($users as $user)
<div class="my-page">
  <div class="booked__box">
    <div class="booked__ttl">
      <h2>予約状況</h2>
    </div>
    @php
    $i=1
    @endphp
    @foreach ($user->bookings as $booking)
    <div class="booked__card">
      <div class="card__ttl">
        <img src="{{ asset('/image/clock.png')}}" alt="No image">
        <h3>予約{{$i++}}</h3>
        <img src="{{ asset('/image/cross.png')}}" alt="No image" class="cross">
      </div>
      <div class="booked-data">
        <table>
          <tr>
            <td>Shop</td>
            <td>{{$booking->shop->name}}</td>
          </tr>
          <tr>
            <td>Date</td>
            <td>{{$booking->datetime}}</td>
          </tr>
          <tr>
            <td>Time</td>
            <td>{{$booking->datetime}}</td>
          </tr>
          <tr>
            <td>Number</td>
            <td>{{$booking->number}}</td>
          </tr>
        </table>
      </div>
    </div>
    @endforeach
  </div>
  <div class="liked__box">
    <div class="username">
      <h2>名前を表示</h2>
    </div>
    <div class="liked__ttl">
      <h2>お気に入り店舗</h2>
    </div>
    <div class="liked__card__box">
    @if(count($users-) >= 1)
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
            <input type="text" value="{{$shop->id}}" style="display:none">
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
  </div>
</div>
@endforeach
@endsection