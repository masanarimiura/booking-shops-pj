@extends('layouts.common')
@section('content')
@include('components.drawer')
@if($shop)
<div class="shop-detail">
  <div class="shop-detail__card__box">
    <div class="shop-detail__ttl">
      <a href="{{ route('index') }}"><div class="return__btn"></div></a>
      <h2>{{$shop->name}}</h2>
    </div>
    <div class="shop-detail__card">
      <div class="card__img">
        <img src="{{$shop->image_url}}" alt="No image">
      </div>
      <div class="tag">
        <p>#{{$shop->area->name}}</p>
        <p>#{{$shop->genre->name}}</p>
      </div>
      <div class="card__content">
        <p>{{$shop->comment}}</p>
      </div>
    </div>
  </div>
  <div class="book__card__box">
    <div class="book__card">
      <form action="{{ route('book') }}" method="post">
        @csrf
        <div class="book__ttl">
          <h2>予約</h2>
        </div>
        <div class="form__box">
            <input type="text" name="shop_id" value="{{$shop->id}}" style="display:none">
          <div class="input__box">
            <input type="date" name="date" id="today" value="" oninput="recheckBooking()">
          </div>
          <div class="select__box">
            <select name="time" oninput="recheckBooking()" id="booking-time">
              <option value="17:00:00">17:00</option>
              <option value="17:30:00">17:30</option>
              <option value="18:00:00">18:00</option>
              <option value="18:30:00">18:30</option>
              <option value="19:00:00">19:00</option>
              <option value="19:30v
">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="24:00">24:00</option>
            </select>
          </div>
          <div class="select__box">
            <select name="number" oninput="recheckBooking()" id="booking-number">
              <option value="1">1人</option>
              <option value="2">2人</option>
              <option value="3">3人</option>
              <option value="4">4人</option>
              <option value="5">5人</option>
              <option value="6">6人</option>
              <option value="7">7人</option>
              <option value="8">8人</option>
              <option value="9">9人</option>
              <option value="10">10人</option>
              <option value="11">11人</option>
              <option value="12">12人</option>
              <option value="13">13人</option>
              <option value="14">14人</option>
              <option value="15">15人</option>
              <option value="16">16人</option>
              <option value="17">17人</option>
              <option value="18">18人</option>
              <option value="19">19人</option>
              <option value="20">20人</option>
            </select>
          </div>
          <div class="book-data">
            <table>
              <tr>
                <td>Shop</td>
                <td>{{$shop->name}}</td>
              </tr>
              <tr>
                <td>Date</td>
                <td id="check-booking-date"></td>
              </tr>
              <tr>
                <td>Time</td>
                <td id="check-booking-time"></td>
              </tr>
              <tr>
                <td>Number</td>
                <td id="check-booking-number"></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="submit__btn__box">
          <input type="submit" class="submit__btn" value="予約する">
        </div>
      </form>
    </div>
  </div>
</div>
@else
  <p class="error">店舗情報が未掲載です。</p>
@endif
@endsection