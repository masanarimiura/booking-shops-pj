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
          <div class="input__box">
            <input type="text" placeholder="Email">
          </div>
          <div class="input__box">
            <input type="text" placeholder="Password">
          </div>
          <div class="input__box">
            <input type="text" placeholder="Password">
          </div>
          <div class="book-data">
            <table>
              <tr>
                <td>hop</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="submit__btn__box">
            <input type="submit" class="submit__btn" value="ログイン">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection