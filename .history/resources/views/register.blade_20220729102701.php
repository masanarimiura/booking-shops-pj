@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  
  <form action="" method="post">
    <ul>
      <li>
        <input type="text">
      </li>
      <li>
        <input type="text">
      </li>
      <li>
        <input type="text">
      </li>
    </ul>
  </form>
</div>

<div class="shop__card">
    <div class="card__img">
      <h2>Registration</h2>
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





@endsection