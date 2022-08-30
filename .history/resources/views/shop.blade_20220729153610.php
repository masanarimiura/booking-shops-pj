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
      <div class="book__ttl">
        <h2>予約</h2>
      </div>
      <div class="from__box">
        <form action="" method="post">
          <div class="input-date">
            <input type="date" name="date" id="today" value="">
          </div>
        </select>
        <select name="">
          <option value="17:00">17:00
          <option value="10:00">10:00</option>
          <option value="10:30">10:30</option>
          <option value="11:00">11:00</option>
          <option value="11:30">11:30</option>
          <option value="12:00">12:00</option>
          <option value="12:30">12:30</option>
          <option value="13:00">13:00</option>
          <option value="13:30">13:30</option>
          <option value="14:00">14:00</option>
          <option value="14:30">14:30</option>
          <option value="15:00">15:00</option>
          <option value="15:30">15:30</option>
          <option value="16:00">16:00</option>
        </select>
        <select name="">
          <option value="">1人
          <option value="">人数を取得して表示
        </select>
          <div class="book-data">
            <table>
              <tr>
                <td>Shop</td>
                <td>店名を持ってくる</td>
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
          <div class="submit__btn__box">
            <input type="submit" class="submit__btn" value="予約する">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection