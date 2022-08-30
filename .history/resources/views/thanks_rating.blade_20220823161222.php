@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="thanks__box">
  <h2>ご意見ありがとうございました。</h2>
  <a href="{{ route('my_page') }}"><div class="return">マイページへ</div></a>
</div>
@endsection