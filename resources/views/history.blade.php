@extends('layouts.website')

@section('main')

<div class="w-full px-8">
    <div class="flex justify-between mt-4 ml-3">
        <h1 class="font-bold text-3xl">My History</h1>
    </div>         
    <hr class="border-b border-b-indigo-700 my-2">    
    <table class="w-full border border-gray-300 mb-[5%]">
        <tr class="bg-indigo-500 text-white">
            <td class="border px-4 border-gray-200 text-center">ID</td>
            <td class="border px-4 border-gray-200 text-center">Vehicle</td>
            <td class="border px-4 border-gray-200 text-center">Status</td>
            <td class="border px-4 border-gray-200 text-center">From</td>
            <td class="border px-4 border-gray-200 text-center">To</td>
            <td class="border px-4 border-gray-200 text-center">Start Date</td>
            <td class="border px-4 border-gray-200 text-center">End Date</td>
            <td class="border px-4 border-gray-200 text-center">Date</td>
        </tr>
    
        @php
        $i = 1;
         @endphp
     @foreach ($cobookings as $booking)
     <tr>
        <td class="border px-4 border-gray-300 text-center">
            @php echo $i; 
            $i++; 
            @endphp
        </td>
         <td class=" font-semibold border py-1 w-32">
             <p class="text-center">
                 {{$booking->vehicle->name}}
             </p>
         </td>
       
         <td class=" font-semibold border">
            <p class="text-center">
                {{$booking->status}}
            </p>
        </td>
        <td class=" font-semibold border">
            <p class="text-center">
                {{$booking->from}}
            </p>
        </td>
        <td class=" font-semibold border">
           <p class="text-center">
               {{$booking->to}}
           </p>
       </td>
       <td class=" font-semibold border">
        <p class="text-center">
            {{$booking->start_date}}
        </p>
         </td>
        <td class=" font-semibold border">
        <p class="text-center">
            {{$booking->end_date}}
        </p>
        </td>
         <td class=" font-semibold border">
             <p class="text-center">
                 {{ Carbon\Carbon::parse($booking->created_at)->format('d-m-Y') }}
             </p>
         </td>
     </tr>
 @endforeach
 @foreach ($cabookings as $booking)
 <tr>
    <td class="border px-4 border-gray-200">
        @php echo $i; $i++; 
        @endphp
    </td>
     <td class=" font-semibold border py-1 w-32">
         <p class="text-center">
             {{$booking->vehicle->name}}
         </p>
     </td>
                
                <td class=" font-semibold border">
                    <p class="text-center">
                        {{$booking->status}}
                    </p>
                </td>
                <td class=" font-semibold border">
                    <p class="text-center">
                        {{$booking->from}}
                    </p>
                </td>
                <td class=" font-semibold border">
                <p class="text-center">
                    {{$booking->to}}
                </p>
            </td>
            <td class=" font-semibold border">
                <p class="text-center">
                    {{$booking->start_date}}
                </p>
                </td>
                <td class=" font-semibold border">
                <p class="text-center">
                    {{$booking->end_date}}
                </p>
                </td>
     <td class=" font-semibold border">
         <p class="text-center">
             {{Carbon\Carbon::parse($booking->created_at)->format('d-m-Y')}}
         </p>
     </td>
 </tr>
@endforeach



     
 </table>
</div>
    

@endsection

