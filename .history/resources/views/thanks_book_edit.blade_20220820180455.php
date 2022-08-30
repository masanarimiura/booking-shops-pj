@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="thanks__box">
  <h2>予約内容を変更しました。</h2>
  <a href="{{ route('my_page') }}"><div class="return">マイページへ</div></a>
</div>
@endsection