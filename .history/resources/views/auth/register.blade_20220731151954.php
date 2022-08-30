@extends('layouts.common')
@section('content')
@include('components.drawer')
    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>
    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>
    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Register') }}
        </x-button>
    </div>


<div class="register-login__box">
    <h2>Registration</h2>
    <div class="from__box">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input__box">
                <img src="{{ asset('/image/human.png')}}" alt="No image">
                <x-input type="text" placeholder="Username">
            </div>
            <div class="input__box">
                <img src="{{ asset('/image/email.png')}}" alt="No image">
                <x-input type="text" placeholder="Email">
            </div>
            <div class="input__box">
                <img src="{{ asset('/image/key.png')}}" alt="No image">
                <x-input type="text" placeholder="Password">
            </div>
                <div class="submit__btn__box">
                <input type="submit" class="submit__btn" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection