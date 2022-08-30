@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="from__box">
    <form action="" method="post">
      <div class="input__box">
        <img src="{{ asset('/image/human.png')}}" alt="No image">
        <input type="text" placeholder="Username">
      </div>
      <div class="input__box">
        <img src="{{ asset('/image/email.png')}}" alt="No image">
        <input type="text">
      </div>
      <div class="input__box">
        <img src="{{ asset('/image/key.png')}}" alt="No image">
        <input type="text" placeholder="Username">
      </div>
      <div>
        <input type="submit" class="submit__btn" value="詳しくみる">
      </div>
    </form>
  </div>
</div>
@endsection