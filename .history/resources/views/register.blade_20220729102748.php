@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  
  
</div>

<div class="shop__card">
    <div class="card__img">
      <h2>Registration</h2>
    </div>
    <div class="card__content">
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
      <div class="card__content__inner">
        <a href=""><div class="card__detail">詳しくみる</div></a>
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        </div></a>
      </div>
    </div>





@endsection