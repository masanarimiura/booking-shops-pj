@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="from__box">
    <form action="" method="post">
      <div class="input__box">
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
        <input type="submit" class="submit" value="詳しくみる">
      </div>
    </form>
  </div>
</div>
@endsection