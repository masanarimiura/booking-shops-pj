@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="modal-rating">
  <div class="modal__content">
    <div class="modal__content-inner">
      <p>下記の予約でご利用されたお店はいかがだったでしょうか？</p>
      @php
      print_r($shop->)
      @endphp
      <form method="post" action="{{ route('rating') }}">
      @csrf
        <div class="rating-inner">
          <div class="rating-star-box" id="stars">
            <span class="star" data-star="1">☆</span>
            <span class="star" data-star="2">☆</span>
            <span class="star" data-star="3">☆</span>
            <span class="star" data-star="4">☆</span>
            <span class="star" data-star="5">☆</span>
          </div>
          <div class="rating-score-box">
            <p class="rating-score-p">…</p><p>点</p>
          </div>
        </div>
        <div>
          <p>ご意見等あればご記入ください</p>
          <textarea name="comment" cols="67" rows="5" value="{{old('comment')}}"></textarea>
        </div>
        <div>
          <input type="text" name="shop_id" value="" style="display:none">
          <input type="text" name="rating" value="" class="rating-score-value" style="display:none">
          <input type="submit" value="送信する" class="cancel-btn">
        </div>
      </form>
      <div class="modal__booked-data">
        <table>
          <tr>
            <td>Shop</td>
            <td></td>
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
            <td>人</td>
          </tr>
        </table>
      </div>
      <div>
        <a href="{{ route('my_page') }}">
          <input type="submit" value="評価せずにマイページへ戻る" class="return-btn closeBtn-rating">
        </a>
      </div>
    </div>
  </div>
</div>
@endsection