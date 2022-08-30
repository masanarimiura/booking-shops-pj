@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="register__box__inner">
    <form action="" method="post">
      <div class>
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="submit" class="card__detail" value="詳しくみる">
      </div>
    </form>
  </div>
</div>
@endsection