@extends('layouts.admin.app')

@section('main')
<div class="flex justify-between mt-4 ml-3">
    <h1 class="font-bold text-3xl">Dashboard</h1>

</div>
<hr class="border-b border-b-blue-500 my-2">


   
    <div class="grid grid-cols-4 px-4 gap-20 mt-[10%]">
        <a href="{{route('admin.users.index')}}">
        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
            <div class="flex justify-center">
                <i class="fas fa-users fa-lg px-2 pt-4 text-violet-800"></i>
                {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($users)}}</h1> --}}
                <p class="text-xl pt-3 pr-4">Users</p>
            </div>            
        </div>
    </a>

    <a href="{{route('admin.brands.index')}}">
        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
            <div class="flex justify-center">
                <i class="fas fa-fire fa-lg px-2 pt-4 text-red-900"></i>
                {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($brands)}}</h1> --}}
                <p class="text-xl pt-3 pr-4">Total Brands</p>
            </div>            
        </div>
    </a>

    <a href="{{route('admin.vehicles.index')}}">
        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
            <div class="flex justify-center">
                <i class="fas fa-car fa-lg px-2 pt-4 text-green-600"></i>
                {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($vehicles)}}</h1> --}}
                <p class="text-xl  pt-3 pr-4">Total vehicle</p>
            </div>            
        </div>
        
    </a>

    <a href="{{route('admin.bookings.index')}}">
        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
            <div class="flex justify-center">
                <i class="fas fa-list fa-lg px-2 pt-4"></i>
                {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($bookings)}}</h1> --}}
                <p class="text-xl pt-3 pr-4">Total bookings</p>
            </div>            
        </div>
    </a>
    <a href="{{route('admin.feedbacks.index')}}">
        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
            <div class="flex justify-center">
                <i class="fas fa-comment-alt fa-lg px-2 pt-4 text-red-500"></i>
                {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($feedbacks)}}</h1> --}}
                <p class="text-xl  pt-3 pr-4">Feedback</p>
            </div>            
        </div>
        <a href="{{route('admin.completed')}}">
            <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-times text-red-700 hover:text-purple-800 fa-lg px-2 pt-4"></i>
                    {{-- <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($cancelled)}}</h1> --}}
                    <p class="text-xl  pt-3 pr-2">Completed</p>
                </div>            
            </div>

   

    
</div>


        

@endsection