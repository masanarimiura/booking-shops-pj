@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="thanks__box">
  <h2>ご予約内容を変更しました。再度内容のご確認したい場合はマイページにて内容のご確認を</h2>
  <a href="{{ route('my_page') }}"><div class="return">戻る</div></a>
</div>
@endsection