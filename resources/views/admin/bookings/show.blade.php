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
    <div class="py-3 px-5 w-full">
        <div class="flex justify-between mt-4 ml-3">
            <h1 class="font-bold text-3xl">Bookings Details</h1>
            <a href="{{route('admin.bookings.index')}}" class="bg-indigo-500 px-8 py-2 mb-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
         </div>
        
         <hr class="border-amber-500">
         <table class="w-full shadow-md mt-4" id="table">
               <tr class="border-2 h-12">
                        <th> ID </th>
                        <td class="px-7">
                           {{$booking->id}}
                       </td>
               </tr>
               <tr class="border-2 h-12">
                   <th class="px-10"> Name </th>
                   <td class="px-7">
                       {{$booking->name}}
                   </td>
               </tr>
            
               <tr class="border-2 h-12">
                    <th class="px-10"> Address </th>
                    <td class="px-7">
                        {{$booking->address}}
                    </td>
                </tr>

                <tr class="border-2 h-12">
                    <th class="px-10"> Phone </th>
                    <td class="px-7">
                        {{$booking->phone}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> From </th>
                    <td class="px-7">
                        {{$booking->from}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> To </th>
                    <td class="px-7">
                        {{$booking->to}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> Vehicle Name </th>
                    <td class="px-7">
                        {{$booking->vehicle->name}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> Start Date </th>
                    <td class="px-7">
                        {{$booking->start_date}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> End Date </th>
                    <td class="px-7">
                        {{$booking->end_date}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> Status </th>
                    <td class="px-7">
                        {{$booking->status}}
                    </td>
                </tr>
         </table> 
    </div>

@endsection