@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register-login__box">
    <h2>Registration</h2>
    <div class="from__box">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input__box">
                <img src="{{ asset('/image/human.png')}}" alt="No image">
                <x-input placeholder="Username" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus>
            </div>
            <div class="input__box">
                <img src="{{ asset('/image/email.png')}}" alt="No image">
                <x-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
            </div>
            <div class="input__box">
                <img src="{{ asset('/image/key.png')}}" alt="No image">
                <x-input placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
            </div>

            <div class="flex items-center justify-end mt-4 submit__btn__box">
                <x-button class="ml-4 submit__btn">
                    {{ __('登録') }}
                </x-button>
            </div>
                
            <div class="submit__btn__box">
                <x-input type="submit" class="submit__btn" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection