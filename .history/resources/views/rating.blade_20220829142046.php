@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="modal-rating">
  <div class="modal__content">

    @foreach ($shop as $shop)
    @php
    print_r($shop)
    @endphp
    @endforeach
  </div>
</div>
@endsection