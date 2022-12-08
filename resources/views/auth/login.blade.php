{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>  --}}

@extends('layouts.website')
 
@section('css')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
@endsection

@section('main')
    <div class="w-full mx-auto pt-5 pb-10 log">
        <div class="flex justify-center">
            
            
            
            <!-- Login -->
                <div class="shadow-xl bg-white lg:mr-5 mb-5 md:mb-0 p-11">
                    <h2 class="text-gray-500 text-2xl pt-10 px-10 font-bold uppercase">Login</h2>

                    <!-- Login Form Open -->
                        <div class="px-10 mt-5">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <!-- Email Box Open-->
                                    <div class="mt-6">
                                        <label for="email" class="block text-gray-600 text-sm uppercase">Email Address <span class="text-red-500">*</span> </label>
                                        <input type="email" name="email" id="email" class="w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('email'))
                                            border-red-500
                                        @endif" value="{{old('email')}}">
                                        @error('email')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Email Box Close -->

                                <!-- Password Box Open-->
                                    <div class="mt-6">
                                        <label for="password" class="block text-gray-600 text-sm uppercase">Password<span class="text-red-500">*</span> </label>
                                        <input type="password" name="password" id="password" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('password'))
                                        border-red-500
                                    @endif" value="{{old('password')}}">
                                    @error('password')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Password Box Close -->

                                <a href="{{route('password.request')}}" class="uppercase text-blue-600 text-xs">Forget Password?</a> <br>
                            <a href="{{route('register')}}" class="uppercase text-blue-600 text-xs hover:text-blue-700">Don't have an Account ? Sign Up now</a>


                                <input type="submit" value="Login" class="w-full rounded-md bg-indigo-300  hover:bg-indigo-500 py-1 my-5 cursor-pointer text-white">
                            </form>


                            {{-- <div class="grid grid-cols-2 mb-3">
                                <a class="bg-blue-800 hover:bg-blue-700 mx-2 text-center py-2 text-white rounded-md" href="{{ url('auth/facebook') }}">
                                    <i class="fab fa-facebook-f"></i> <span>Facebook</span>
                                </a>

                                <a class="bg-red-400 hover:bg-red-300 text-white py-2 text-center rounded-md" href="{{ url('auth/google') }}">
                                    <i class="fab fa-google"></i> <span>Google</span>
                                </a>
                            </div> --}}
                        </div>
                    
                    <!-- Login Form Open -->
                </div>
            <!-- Login Close -->

           
        </div>
    </div>
@endsection