@extends('layouts.website')

@section('css')
    <style>
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

    
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
@endsection

@section('main')

        <div class="w-10/12 mx-auto h-full">
            <div class="md:flex mt-8 py-5">
                <div class="flex-initial md:w-80 mb-5  pb-5 md:pb-0 md:mb-0  text-black rounded-md shadow-xl">
                    <!-- My Account Open -->
                        <h2 class=" text-3xl font-bold px-8 pt-2 text-black">Driver Details</h2>
                        <hr class="text-gray-400 mt-2">
                        <ul class="mt-2">
                            <li class="text-gray-700 hover:text-black pl-12 py-2">
                                <a href="">
                                    <i class="fas fa-user-cog pr-2"></i> Driver Information
                                </a>
                            </li>
                            <hr>
                            
                        </ul>
                    <!-- My Account close -->
                    <hr class="text-gray-600 mt-2">
                    
                    
                </div>
                <div class="flex-1 bg-white md:ml-5 pb-4">
                    <h2 class="text-gray-500 text-xl font-bold px-8 pt-2">My Information</h2>
                    <hr class="text-gray-600 mt-2">
                        <!-- Information Form Open -->
                            <div class="px-10 mt-5 my-5">
                                {{-- <div class="mt-6">
                                    <div class="rounded-full shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 w-[25vh] h-[25vh] justify-center">
                                    </div>
                                 </div> --}}
                                    <!-- Name Box Open-->
                                        <div class="mt-6">
                                            <label for="name" class="block text-gray-600 text-sm uppercase">Name </label>
                                            <input type="text" name="name" id="name" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::driver()->name}}" readonly>
                                        </div>
                                    <!-- Name Box Close -->
    
                                    <!-- Email Box Open-->
                                        <div class="mt-6">
                                            <label for="email" class="block text-gray-600 text-sm uppercase">Email Address </label>
                                            <input type="email" name="email" id="email" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" readonly value="{{Auth::driver()->email}}">
                                        </div>
                                    <!-- Email Box Close -->
    
                                    <!-- Mobile Box Open-->
                                        <div class="mt-6">
                                            <label for="mobile" class="block text-gray-600 text-sm uppercase">Mobile Number </label>
                                            <div class="flex">
                                                <input type="text" value="+977" readonly class="border-gray-300 w-16 rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2">
                                                <input type="number" name="phone" id="mobile" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500"  value="{{Auth::driver()->phone}}" readonly>
                                            </div>
                                        </div>
                                    <!-- Mobile Box Close -->


                                    <!--Address Box Open -->
                                                <div class="mt-6">
                                                    <label for="address" class="block text-gray-600 text-sm uppercase">Address </label>
                                                    
                                                    <input type="text" name="address" id="address" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::driver()->address}}" readonly>
                                                </div>
                                     <!--Address Box Close -->


                                        <!--Citizenship Box open -->
                                            <div class="mt-6">
                                                <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Number</label>
                                                <input type="text" name="citizenship" id="citizenship" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::driver()->citizenship}}" readonly>
                                               

                                            </div>
                                        <!--Citizenship Box Close -->
{{--                                         
                                            <div class="mt-6">
                                            <a href="" class="px-10 rounded-md bg-indigo-300 text-black hover:text-white hover:bg-indigo-500 py-1 my-5 cursor-pointer"> Edit Profile </a>
                                            </div> --}}
                                        </div>
                                    <!--  My Information Box Close -->
    
                                    
    
                                    {{-- <a href="{{route('profile.edit',$user->id)}}" class="px-10 rounded-md bg-indigo-300 text-black hover:text-white hover:bg-indigo-500 py-1 my-5 cursor-pointer"> Edit Profile </a> --}}
                                    
                            </div>
                        <!-- Information Form Close -->
                    
                </div>
            </div>
@endsection