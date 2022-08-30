@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="thanks__box">
  <h2>会員登録ありがとうございます</h2>
  <a href="{{ route('register') }}"><div class="return">ログインする</div></a>
</div>
@endsection