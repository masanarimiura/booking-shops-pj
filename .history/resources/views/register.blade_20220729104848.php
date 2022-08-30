@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="register__box__inner">
    <form action="" method="post">
      <div>
        <input type="text">
      </div>
      <div>
        <input type="text">
      </div>
      <div>
          <input type="text">
      </div>
      
      <input type="submit" class="card__detail" value="詳しくみる">
    </form>
  </div>
</div>
@endsection