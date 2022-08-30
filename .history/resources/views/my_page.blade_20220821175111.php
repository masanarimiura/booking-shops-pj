@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="my-page">
  <div class="booked__box">
    <div class="booked__ttl">
      <h2>予約状況</h2>
    </div>
    @if(count($user_bookings) >= 1)
    @php
    $i=1
    @endphp
    @foreach ($user_bookings as $booking)
    <div class="booked__card">
      <div class="card__ttl">
        <img src="{{ asset('/image/clock.png')}}" alt="No image">
        <h3>予約{{$i++}}</h3>
        <div class="edit__img">
          <input type="image" src="{{ asset('/image/edit.png')}}" alt="No image" class="edit openBtn-edit" >
        </div>
        <div class="cross__img">
          <input type="image" src="{{ asset('/image/cross.png')}}" alt="No image" class="cross openBtn-delete" >
        </div>
        <div class="modal-delete">
          <div class="modal__content">
            <div class="modal__content-inner">
              <p>下記の予約をキャンセルしてよろしいでしょうか？</p>
              <div class="modal__booked-data">
                <table>
                  <tr>
                    <td>Shop</td>
                    <td>{{$booking->shop->name}}</td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{$booking->datetime->format('Y-m-d')}}</td>
                  </tr>
                  <tr>
                    <td>Time</td>
                    <td>{{$booking->datetime->format('H:i')}}</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td>{{$booking->number}}人</td>
                  </tr>
                </table>
              </div>
              <form action="{{ route('destroyBooking') }}" method="post">
                @csrf
                <div>
                  <input type="text" name="booking_id" value="{{$booking->id}}" style="display:none">
                  <input type="submit" value="キャンセルする" class="cancel-btn">
                </div>
              </form>
              <input type="button" value="戻る" class="return-btn closeBtn-delete">
            </div>
          </div>
        </div>
      </div>
      <div class="booked-data">
        <table>
          <tr>
            <td>Shop</td>
            <td>{{$booking->shop->name}}</td>
          </tr>
          <tr>
            <td>Date</td>
            <td>{{$booking->datetime->format('Y-m-d')}}</td>
          </tr>
          <tr>
            <td>Time</td>
            <td>{{$booking->datetime->format('H:i')}}</td>
          </tr>
          <tr>
            <td>Number</td>
            <td>{{$booking->number}}人</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- editボタンを押した時のモーダル -->
    <div class="modal-edit">
      <div class="modal__content">
        <div class="modal__content-inner">
          <p>変更内容を選択してください</p>
          <form action="{{ route('editBooking') }}" method="post">
            @csrf
            <div class="modal__booked-data">
              <table>
                <tr>
                  <td>Shop</td>
                  <td>{{$booking->shop->name}}</td>
                </tr>
                <tr>
                  <td>Date</td>
                  <td>
                    <div class="input__box">
                      <input type="date" name="date" value="{{$booking->datetime->format('Y-m-d')}}">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Time</td>
                  <td>
                    <div class="select__box">
                      <select type="time" name="time" value="{{$booking->datetime->format('H:i')}}">
                        <option value="{{$booking->datetime->format('H:i')}}">{{$booking->datetime->format('H:i')}}</option>
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
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Number</td>
                  <td>
                    <div class="select__box">
                      <select name="number" value="{{$booking->number}}">
                        <option value="{{$booking->number}}">{{$booking->number}}人</option>
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
                  </td>
                </tr>
              </table>
            </div>
            <div>
              <input type="text" name="booking_id" value="{{$booking->id}}" style="display:none">
              <input type="text" name="shop_id" value="{{$booking->shop->id}}" style="display:none">
              <input type="submit" value="変更する" class="cancel-btn">
            </div>
          </form>
          <input type="button" value="戻る" class="return-btn closeBtn-edit">
        </div>
      </div>
    </div>
    @if($booking->datetime < now())
    <!-- 予約が現時刻を過ぎた場合に評価のモーダルを作る -->
    @endif
    @endforeach
    @else
    <p class="error">ご予約は登録されていません</p>
    @endif
  </div>
  @if ($errors->any())
  <!-- 予約変更に失敗したらエラーをモーダルで出す -->
  <div class="error-message">
      <ul>
      @foreach($errors->all() as $error)
        <li>※ご予約の変更ができませんでした。ご予約の変更を希望される場合は、{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

  <div class="liked__box">
    <div class="username">
      <h2>名前を表示</h2>
    </div>
    <div class="liked__ttl">
      <h2>お気に入り店舗</h2>
    </div>
    <div class="liked__card__box">
    @if(count($user_likes) >= 1)
    @foreach ($user_likes as $like)
    <div class="shop__card">
      <div class="card__img">
          <img src="{{$like->shop->image_url}}" alt="No image">
      </div>
      <div class="card__content">
        <h2 class="card__ttl">{{$like->shop->name}}</h2>
        <div class="tag">
          <p class="card__tag">#{{$like->shop->area->name}}</p>
          <p class="card__tag">#{{$like->shop->genre->name}}</p>
        </div>
        <div class="card__content__inner">
          <form method="get" action="{{ route('detail') }}">
            @csrf
            <input type="text" name="shop_id" value="{{$like->shop->id}}" style="display:none">
            <div>
              <input type="submit" value="詳しくみる" class="card__detail">
            </div>
          </form>
          <form action="{{ route('my_page_dislike') }}" method="post">
            @csrf
              <div class="heart__img">
                <input type="text" name="shop_id" value="{{$like->shop->id}}" style="display:none">
                <input type="image" src="{{ asset('/image/heart.png')}}" alt="No image">
              </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <p class="error">お気に入りは登録されていません</p>
    @endif
    </div>
  </div>
</div>
@endsection