@extends('layouts.admin.app')

@section('css')
    <style>
        .white-card {
            background: rgba(49, 79, 162, 0.15);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 7.5px );
            -webkit-backdrop-filter: blur( 7.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
@endsection

@section('main')
@include('sweetalert::alert')

    <div class="py-4 px-3 w-full">
        <h1 class="text-4xl text-gray-800 font-semibold">
            All Bookings
          </h1>
          <hr class="border-amber-500">
          <div class="flex  justify-end my-5">

            <a href="{{route('admin.bookings.index')}}" class="px-6 mx-2 py-2 bg-violet-800 hover:bg-indigo-700 text-white
            rounded-md shadowm-md">All</a>

            <a href="{{route('admin.canceled')}}" class="px-6 mx-2 py-2 bg-teal-600 hover:bg-blue-700 text-white
            rounded-md shadowm-md"> Canceled</a>
            
            <a href="{{route('admin.confirmed')}}" class="px-6 mx-2 py-2 bg-blue-700 hover:bg-slate-600 text-white
            rounded-md shadowm-md"> Confirmed</a>

            <a href="{{route('admin.completed')}}" class="px-6 mx-2 py-2 bg-red-800 hover:bg-black text-white
            rounded-md shadowm-md"> Completed</a>

           
        </div>
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
            @php
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
                    </td>

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
                        {{$booking->vehicle->name}}
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$booking->start_date}}
                    </td>
                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$booking->end_date}}
                    </td>
                    <td  class="py-2 border border-gray-300 px-2 w-44">
                        {{$booking->status}}
                    </td>
                    
                    <td class="border px-4 border-gray-200 w-52 flex">
                        <a href="{{route('admin.bookings.cancel',$booking->id)}}" title="Canceled"><i 
                            class=" text-2xl px-4 fas fa-times text-red-700 hover:text-purple-800"></i></a>
                            
                        <a href="{{route('admin.bookings.confirm',$booking->id)}}" title="Confirmed"><i 
                            class=" text-2xl fas fa-check-circle text-indigo-400 hover:text-indigo-600"></i></a>
    
                        <a href="{{route('admin.bookings.complete',$booking->id)}}" title="Completed"><i 
                            class=" text-2xl px-4 fa-solid fas fa-car text-violet-600 hover:text-blue-800"></i></a>
                    </td>
                    <td> 
                        <a href="{{route('admin.bookings.show',$booking->id)}}"><i class="text-xl px-2 mx-2  fas fa-eye text-white hover:text-black bg-violet-600 pt-2 pb-2" > Show</i>  </a>
                    </td>
    
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    
    

@endsection
