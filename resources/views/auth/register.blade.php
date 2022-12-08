{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

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

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



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
@include('sweetalert::alert')
    <div class="w-full mx-auto pt-5 pb-5 reg">
        <div class="flex justify-center shadow-md ">
           

            <!-- Register -->
                <div class=" bg-white">
                    <p  class="text-gray-400 text-xs mt-5 px-10 font-bold uppercase">
                        <a href="{{route('login')}}" class="hover:text-gray-600">Already have an account ? Login Now</a>
                    </p>
                    <h2 class="text-gray-500 text-2xl pt-5 px-10 font-bold uppercase">Register</h2>

                    <!-- Register Form Open -->
                        <div class="px-10 mt-5">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <!-- Name Box Open-->
                                    <div>
                                        <label for="name" class="block text-gray-600 text-sm uppercase">Name <span class="text-red-500">*</span> </label>
                                        <input type="text" name="name" id="name" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('name'))
                                            border-red-500
                                        @endif" value="{{old('name')}}">
                                        @error('name')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Name Box Close -->

                                <!-- Email Box Open-->
                                    <div class="mt-2">
                                        <label for="email" class="block text-gray-600 text-sm uppercase">Email Address <span class="text-red-500">*</span> </label>
                                        <input type="email" name="email" id="email" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('email'))
                                        border-red-500
                                    @endif" value="{{old('email')}}">
                                    @error('email')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Email Box Close -->

                                <!-- Mobile Box Open-->
                                    <div class="mt-2">
                                        <label for="phone" class="block text-gray-600 text-sm uppercase">Mobile Number <span class="text-red-500">*</span> </label>
                                        <div class="flex">
                                            <input type="text" value="+977" readonly class=" w-16 rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2 @if ($errors->has('phone'))
                                            border-red-500
                                        @endif">
                                            <input type="number" name="phone" id="phone" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('phone'))
                                            border-red-500
                                        @endif" value="{{old('phone')}}">
                                        </div>
                                    </div>
                                <!-- Mobile Box Close -->

                                <!-- Password Box Open-->
                                    <div class="mt-2">
                                        <label for="password" class="block text-gray-600 text-sm uppercase">Password<span class="text-red-500">*</span> </label>
                                        <input type="password" name="password" id="password" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('password'))
                                        border-red-500
                                    @endif">
                                    @error('password')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Password Box Close -->

                                <!-- Confirm Password Box Open-->
                                    <div class="mt-2">
                                        <label for="password_confirmation" class="block text-gray-600 text-sm uppercase">Confirm Password<span class="text-red-500">*</span> </label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500">
                                        @error('password_confirmation')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                    
                                <!-- Confirm Password Box Close -->

                                <!-- address Box Open-->
                                    <div class="my-2">
                                        <label for="address" class="block text-gray-600 text-sm uppercase">Address <span class="text-red-500">*</span></label>
                                        <input type="text" name="address" id="address" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('address'))
                                       
                                    @endif" value="{{old('address')}}">
                                    @error('address')
                                            <p class="text-red-400 px-4">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                <!-- Address Box Close -->

                                    <!-- Citizenship Box Open-->
                                    <div class="mt-2">
                                        <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Number <span class="text-red-500">*</span> </label>
                                        <input type="number" name="citizenship" id="citizenship" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('citizenship'))
                                       
                                        @endif" value="{{old('citizenship')}}">
                                       
                                    </div>
                                    <div>
                                        <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Photo <span class="text-red-500">*</span> </label>
                                        <input type="file" name="photopath0" id="photopath0" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @if ($errors->has('photopath0'))
                                        border-red-500
                                    @endif" value="{{old('photopath0')}}">
                                   
                                    </div>
                                <!-- Citizenship Box Close -->

                                <input type="submit" value="Register" id="myFormSubmit"class="w-full rounded-md bg-indigo-300 text-black hover:bg-indigo-500 py-1 my-5 cursor-pointer ">
                                
                            </form>


                        </div>
                    <!-- Register Form Close -->
                    
                </div>
            <!-- Register Close -->
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
// $(function() {
//     $('#myFormSubmit').click(function (e) {
//        //How to send Image from here to backend
//    });
// });
// </script>