@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register-login__box">
  <h2>Login</h2>
  <div class="from__box">
    <form action="" method="post">
      <div class="input__box">
        <img src="{{ asset('/image/email.png')}}" alt="No image">
        <input type="text" placeholder="Email">
      </div>
      <div class="input__box">
        <img src="{{ asset('/image/key.png')}}" alt="No image">
        <input type="text" placeholder="Password">
      </div>
      <div class="submit__btn__box">
        <input type="submit" class="submit__btn" value="ログイン">
      </div>
    </form>
  </div>
</div>
@endsection