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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


            <h2>Registration</h2>
            <div class="from__box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="input__box">
                        <img src="{{ asset('/image/human.png')}}" alt="No image">
                        <x-label for="name" />
                        <x-input id="name" class="block mt-1 w-full x-input" type="text" name="name" :value="old('name')" required autofocus  placeholder="Username"/>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 input__box">
                        <img src="{{ asset('/image/email.png')}}" alt="No image">
                        <x-label for="email" />
                        <x-input id="email" class="block mt-1 w-full x-input" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4 input__box">
                        <img src="{{ asset('/image/key.png')}}" alt="No image">
                        <x-label for="password" />
                        <x-input id="password" class="block mt-1 w-full x-input"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" 
                                        placeholder="Password"/>
                    </div>

                    <div class="flex items-center justify-end mt-4 submit__btn__box">
                        <!-- ↓非表示 -->
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"  style="display:none">
                            {{ __('Already registered?') }}
                        </a>
                        <!-- ↑非表示 -->

                        <x-button class="ml-4 submit__btn">
                            {{ __('登録') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection
