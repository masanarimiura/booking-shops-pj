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
        <p>#genre名</p>
      </div>
      <div class="card__content">
        <p>お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文お店の説明文</p>
      </div>
    </div>
  </div>
  <div class="book__card__box">
    <div class="book__card">
      <form action="" method="post">
        <div class="book__ttl">
          <h2>予約</h2>
        </div>
        <div class="form__box">
          <div class="input__box">
            <input type="date" name="date" id="today" value="">
          </div>
          <div class="select__box">
            <select name="">
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
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
            <select name="">
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
                <td>店名を持ってくる</td>
              </tr>
              <tr>
                <td>Date</td>
                <td>予約の日付</td>
              </tr>
              <tr>
                <td>Time</td>
                <td>予約の時間</td>
              </tr>
              <tr>
                <td>Number</td>
                <td>予約人数</td>
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
@endsection