@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register__box">
  <h2>Registration</h2>
  <div class="register__inner">
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
      <input type="submit" class="card__detail" value="詳しくみる"Z>
    </form>
  </div>
</div>
@endsection