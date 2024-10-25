@extends('layouts.website')
@section('main')

<x-guest-layout>
<div>
    <x-auth-card>
        <x-slot name="logo" >
            <h1 class="text-2xl text-violet-700 font-bold font-serif"> SajiloYatra Password Reset </h1>
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <div class="mb-4 text-2xl text-black">
            {{ __('Please enter your email address to reset the password') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    
</x-guest-layout>
</div>
@endsection