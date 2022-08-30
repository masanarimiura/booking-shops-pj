@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="modal-rating">
  <div class="modal__content">
    @php
    print_r($shop->name)
    @endphp
  </div>
</div>
@endsection