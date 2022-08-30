@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="my-page">
  <div class="booked__box">
    <div class="booked__ttl">
      <h2>予約状況</h2>
    </div>
    @foreach ($bookings as $user)
      @php
        print_r($user->bookings);
      @endphp
    <div class="booked__card">
      <div class="card__ttl">
        <img src="{{ asset('/image/clock.png')}}" alt="No image">
        <h3>予約１←数字変える</h3>
        <img src="{{ asset('/image/cross.png')}}" alt="No image" class="cross">
      </div>
      <div class="booked-data">
        <table>
          <tr>
            <td>Shop</td>
            <td>店名を引っ張ってくる</td>
          </tr>
          <tr>
            <td>Date</td>
            <td></td>
          </tr>
          <tr>
            <td>Time</td>
            <td></td>
          </tr>
          <tr>
            <td>Number</td>
            <td></td>
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
</div>
@endsection