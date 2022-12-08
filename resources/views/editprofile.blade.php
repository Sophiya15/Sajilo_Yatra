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
{{-- @include('layouts.message') --}}
    <div class="">
        <div class="w-10/12 mx-auto ">
            <div class="md:flex mt-8 py-5">
                <div class="flex-initial md:w-80 mb-5  pb-5 md:pb-0 md:mb-0  rounded-md shadow-xl"> 
                    <!-- My Account Open -->
                        <h2 class=" text-3xl font-bold px-8 pt-2 text-gray-900">My Account</h2>
                        <hr class="text-gray-400 mt-2">
                        <ul class="mt-2">
                            <li class="text-gray-700 hover:text-gray-900 pl-12 py-2">
                                <a href="">
                                    <i class="fas fa-user-cog pr-2"></i> My Information
                                </a>
                            </li>
                            <li class="text-gray-700 hover:text-gray-900 pl-12 mt-1 py-2">
                                <a href="#gotoshipping">
                                    <i class="far fa-address-book pr-2"></i> Address Book
                                </a>
                            </li>
                            <li class="text-gray-700 hover:text-gray-900 pl-12 mt-1 py-2">
                                <a href="#gotopassword">
                                    <i class="fas fa-unlock-alt pr-2"></i> Password
                                </a>
                            </li>
                        </ul>
                    <!-- My Account close -->
                    <hr class="text-gray-600 mt-2">
                    
                    {{-- <!-- booking Open -->
                       <div class="pt-3 mx-auto w-11/12">
                        <a href="" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-400 rounded-md shadow-md text-whites mt-16">
                            My bookings
                        </a>
                       </div>
                        
                    <!-- booking Open --> --}}
                </div> 
                <div class="flex-1 bg-white md:ml-5">
                    <h2 class="text-gray-500 text-xl font-bold px-8 pt-2">Information</h2>
                    <hr class="text-gray-600 mt-2">
                        <!-- Information Form Open -->
                            <div class="px-10 mt-5">
                                <form action="{{route('profileupdate')}}" method="post">
                                    @csrf
                                    <!-- id Box Open-->
                                        <div class="mt-6">
                                            <input type="hidden" name="id" id="id" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{$user->id}}">
                                        </div>
                                    <!-- id Box Close -->
    
                                    <!-- Name Box Open-->
                                        <div class="mt-6">
                                            <label for="name" class="block text-gray-600 text-sm uppercase">Name </label>
                                            <input type="text" name="name" id="name" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{$user->name}}">
                                        </div>
                                    <!-- Name Box Close -->
    
                                    <!-- Email Box Open-->
                                        <div class="mt-6">
                                            <label for="email" class="block text-gray-600 text-sm uppercase">Email Address </label>
                                            <input type="email" name="email" id="email" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500" readonly value="{{$user->email}}">
                                        </div>
                                    <!-- Email Box Close -->
    
                                    <!-- Mobile Box Open-->
                                        <div class="mt-6">
                                            <label for="mobile" class="block text-gray-600 text-sm uppercase">Mobile Number </label>
                                            <div class="flex">
                                                <input type="text" value="+977" readonly class="bbooking-gray-300 w-16 rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2">
                                                <input type="number" name="phone" id="mobile" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500"  value="{{$user->phone}}">
                                            </div>
                                        </div>
                                    <!-- Mobile Box Close -->

    
                                    <!-- Shipping Address Open -->
                                        <div id="gotoshipping">
                                            <h2 class="text-gray-500 text-xl font-bold mt-2 pt-2">Delivery Address</h2>
                                            <hr class="text-gray-600 mt-2">
    
                                            <!-- Shipping Box Open-->
                                                <div class="mt-6">
                                                    <label for="address" class="block text-gray-600 text-sm uppercase">Delivery Address </label>
                                                    <input type="text" name="address" id="address" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{$user->address}}">
                                                </div>
                                            <!-- Shipping Box Close -->
                                        </div>
                                    <!-- Shipping Address Close -->
    
                                    <!-- Password Changing Open -->
                                        <div id="gotopassword">
                                            <h2 class="text-gray-500 text-xl font-bold mt-2 pt-2">Password</h2>
                                            <hr class="text-gray-600 mt-2">
    
                                            <!-- Old Password Box Open-->
                                                <div class="mt-6">
                                                    <label for="oldpassword" class="block text-gray-600 text-sm uppercase">Old Password</label>
                                                    <input type="password" name="oldpassword" id="oldpassword" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500">
                                                </div>
                                            <!-- Old Password Box Close -->
    
                                            <!-- new Password Box Open-->
                                                <div class="mt-6">
                                                    <label for="newpassword" class="block text-gray-600 text-sm uppercase">New Password</label>
                                                    <input type="password" name="newpassword" id="newpassword" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500">
                                                </div>
                                            <!-- new Password Box Close -->
    
                                            <!-- Confirm Password Box Open-->
                                                <div class="mt-6">
                                                    <label for="cpassword" class="block text-gray-600 text-sm uppercase">Confirm Password</label>
                                                    <input type="password" name="cpassword" id="cpassword" class="bbooking-gray-300 w-full rounded-md mt-2 focus:bbooking-indigo-300 focus:ring-indigo-300 text-gray-500">
                                                </div>
                                            <!-- Confirm Password Box Close -->
                                        </div>
                                    <!-- Password Changing Close -->
    
                                    <input type="submit" value="Save" class="px-10 rounded-md bg-indigo-300 text-black hover:bg-indigo-500 py-1 my-5 cursor-pointer">
                                    
                                </form>
                            </div>
                        <!-- Information Form Close -->
                    
                </div>
            </div>
        </div>
    </div>
@endsection



