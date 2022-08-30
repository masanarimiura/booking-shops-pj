@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="thanks__box">
  <h2>ご予約内容を変更しました。再度内容の確認マイページにて内容の確認ができます。</h2>
  <a href="{{ route('my_page') }}"><div class="return">マイページへ</div></a>
</div>
@endsection