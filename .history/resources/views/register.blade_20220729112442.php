@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="from__box">
    <form action="" method="post">
      <div class="input-image__box">
        <div>
          <img src="{{ asset('/image/heart.png')}}" alt="No image">
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="submit" class="submit__btn" value="詳しくみる">
      </div>
    </form>
  </div>
</div>
@endsection