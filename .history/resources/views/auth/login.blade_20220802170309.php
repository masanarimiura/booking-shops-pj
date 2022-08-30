@extends('layouts.common')
@section('content')
@include('components.drawer')
<div class="register-login__box">
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <!-- ↓非表示 -->
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"  style="display:none"/>
                <!-- ↑非表示 -->
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h2>Login</h2>
            <div class="from__box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mt-4 input__box">
                        <img src="{{ asset('/image/email.png')}}" alt="No image">
                        <x-label for="email" />
                        <x-input id="email" class="block mt-1 w-full x-input" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4 input__box">
                        <img src="{{ asset('/image/key.png')}}" alt="No image">
                        <x-label for="password" />
                        <x-input id="password" class="block mt-1 w-full x-input"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Password"/>
                    </div>

                    <!-- Remember Me -->
                    <!-- ↓非表示 -->
                    <div class="block mt-4" style="display:none">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <!-- 非表示 -->

                    <div class="flex items-center justify-end mt-4 submit__btn__box" style="display:none">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3 submit__btn">
                            {{ __('ログイン') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </x-auth-card>
    </x-guest-layout>
</div>
@endsection
