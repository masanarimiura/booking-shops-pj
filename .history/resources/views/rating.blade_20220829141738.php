@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="modal-rating">
  <div class="modal__content">
    @php
    p($shop)
    @endphp
  </div>
</div>
@endsection