@extends('layouts.admin.app')

<style>
    .img1{
        background-image: url('images/Border.jpg');
        background-size: cover;
    
    }
    .img2{
        background-image: url('images/Border-1.jpg');
        background-size: cover;
    
    }
    .img3{
        background-image: url('images/Border-2.jpg');
        background-size: cover;
    
    }
    .img4{
        background-image: url('images/Border-3.jpg');
        background-size: cover;
    
    }
    .img5{
        background-image: url('images/leaf.jpg');
        background-size: cover;
    
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

@section('main')
<div class="w-full px-4 flex-col" >

    <div class="flex justify-between mt-4 ml-3">
        <h1 class="font-bold text-3xl pt-5">Dashboard</h1>
      
    </div>
    <hr class="border-b border-b-green-800 my-2">


    <div class="grid grid-cols-4 px-4 gap-20 mt-8 ">

        <a href="{{route('admin.users.index')}}">
            <div class="rounded-md shadow-lg img1 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-users fa-lg px-2 pt-3 text-blue-500"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Users</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('users')->count()}}</h1>          
            </div>
        </a>

         </a>

        <a href="{{route('admin.brands.index')}}">
            <div class="rounded-md shadow-lg img4 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-fire fa-lg px-2 pt-3  text-red-500"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Brands</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('brands')->count()}}</h1>          
            </div>
        </a>

        <a href="{{route('admin.vehicles.index')}}">
            <div class="rounded-md shadow-lg img3 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-car-alt fa-lg px-2 pt-3  text-blue-500"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Vehicles</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('vehicles')->count()}}</h1>          
            </div>
        </a>

        <a href="{{route('admin.bookings.index')}}">
            <div class="rounded-md shadow-lg img5 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-list fa-lg px-2 pt-3  text-teal-500"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Bookings</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('bookings')->count()}}</h1>          
            </div>
        </a>

        <a href="{{route('admin.feedbacks.index')}}">
            <div class="rounded-md shadow-lg img2 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-comment fa-lg px-2 pt-3  text-black"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Feedbacks</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('feedbacks')->count()}}</h1>          
            </div>
        </a>

        <a href="{{route('admin.reviews.index')}}">
            <div class="rounded-md shadow-lg img3 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                <div class="flex justify-center">
                    <i class="fas fa-star fa-lg px-2 pt-3  text-yellow-500"></i>
                    <p class="text-2xl py-1 text-green-800 font-semibold">Total Reviews</p>
                </div>  
                <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('reviews')->count()}}</h1>          
            </div>
        </a>

            <a href="{{route('admin.drivers.index')}}">
                <div class="rounded-md shadow-lg img5 hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 py-16">
                    <div class="flex justify-center">
                        <i class="fas fa-user fa-lg px-2 pt-3  text-teal-500"></i>
                        <p class="text-2xl py-1 text-green-800 font-semibold">Total Drivers</p>
                    </div>  
                    <h1 class="text-4xl font-bold text-center text-green-800 mr-4">{{DB::table('drivers')->count()}}</h1>          
                </div>
            </a>

    
</div>

<!--
<div class="w-full px-4" >
    
    <div class="flex justify-between mt-4 ml-3">
        <h1 class="font-bold text-3xl">Recent Bookings</h1>
    
    </div>
    <hr class="border-b border-b-green-800 my-2">
    <table class="w-full shadow-md mt-4" id="table">
        <thead>
            <tr class="border border-gray-400 bg-violet-700 text-white ">
            
                <td class="py-2 border border-gray-300 px-2">
                    ID
                </td>
    
                <td class="py-2 border border-gray-300 px-2 w-32">
                    Name
                </td>

                {{-- <td class="py-2 border border-gray-300 px-2 w-32">
                    Address
                </td>

                <td class="py-2 border border-gray-300 px-2 w-32">
                    Phone
                </td>

                <td class="py-2 border border-gray-300 px-2 w-32">
                    From
                </td>

                <td class="py-2 border border-gray-300 px-2 w-32">
                    To
                </td> --}}

                <td class="py-2 border border-gray-300 px-2 w-32">
                    Vehicle Name
                </td>
                
                <td class="py-2 border border-gray-300 px-2 w-32">
                    Start Date
                </td>
                <td class="py-2 border border-gray-300 px-2 w-32">
                    End Date
                </td>
                <td class="py-2 border border-gray-300 px-2 w-32">
                    Status
                </td>
                <td class="py-2 border border-gray-300 px-2 w-32">
                    Action
                </td>
                <td class="py-2 border border-gray-300 px-2 w-32">
                    Action
                </td>
                {{-- <td class="py-2 border border-gray-300 px-2 w-32">
                    Action
                </td> --}}
                {{-- <td class="py-2 border border-gray-300 px-2 w-32">
                   Is Complete
                </td> --}}
            </tr>
        </thead>
        {{-- @php
            $i =1;
        @endphp
        <tbody>
            @foreach ($bookings as $booking)
            <tr class="border border-gray-400 ">
                
                <td class="py-2 border border-gray-300 px-2">
                    @php
                        echo $i++;
                    @endphp
                </td>
               
                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->name}}
                </td> --}}

                {{-- <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->address}}
                </td>

                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->phone}}
                </td>

                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->from}}
                </td>

                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->to}}
                </td> --}}

                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{-- {{$booking->vehicle->name}}
                </td>

                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->start_date}}
                </td>
                <td class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->end_date}}
                </td>
                <td  class="py-2 border border-gray-300 px-2 w-44">
                    {{$booking->status}} --}}
                </td>
                
                {{-- <td class="border px-4 border-gray-200 w-52 flex">
                    <a href="{{route('admin.bookings.cancel',$booking->id)}}" title="Canceled"><i 
                        class=" text-2xl px-4 fas fa-times text-red-700 hover:text-purple-800"></i></a>
                        
                    <a href="{{route('admin.bookings.confirm',$booking->id)}}" title="Confirmed"><i 
                        class=" text-2xl fas fa-check-circle text-indigo-400 hover:text-indigo-600"></i></a>

                    <a href="{{route('admin.bookings.complete',$booking->id)}}" title="Completed"><i 
                        class=" text-2xl px-4 fa-solid fas fa-car text-violet-600 hover:text-blue-800"></i></a>
                </td>
                <td> 
                    <a href="{{route('admin.bookings.show',$booking->id)}}"><i class="text-xl px-2 mx-2  fas fa-eye text-white hover:text-black bg-violet-600 pt-2 pb-2" > Show</i>  </a>
                </td> --}}
{{-- 
                
            </tr>
        @endforeach --}}
        </tbody>
    </table>
</div>
-->
</div>
        

@endsection