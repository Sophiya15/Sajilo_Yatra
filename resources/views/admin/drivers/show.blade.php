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
<div class="py-3 px-8 w-full">
    <div class="flex justify-between mt-4 ml-3">
        <h1 class="font-bold text-3xl">Drivers Details</h1>
        <a href="{{route('admin.drivers.index')}}" class="bg-indigo-500 px-8 py-2 mb-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
            Go Back
        </a>
     </div>
       
         <hr class="border-amber-500">
         <table class="w-full shadow-md mt-4"  id="table">
            <tr class="border-2 h-12">
                <th class="p-2"> ID </th>
                <td class="px-[5%]">
                   {{$driver->id}}
               </td>
            </tr>
               <tr class="border-2 h-12">
                   <th  class="p-2"> Name </th>
                   <td class="px-[5%]">
                       {{$driver->name}}
                   </td>
               </tr>
               <tr class="border-2 h-12">
                <th  class="p-3"> Address </th>
                <td class="px-[5%]">
                    {{$driver->address}}
                </td>
                 </tr>
                 <tr class="border-2 h-12">
                    <th  class="p-3"> Phone </th>
                    <td class="px-[5%]">
                        {{$driver->phone}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th  class="p-3"> Age </th>
                    <td class="px-[5%]">
                        {{$driver->age}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th  class="p-3"> license No </th>
                    <td class="px-[5%]">
                        {{$driver->license}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th  class="p-3"> Experience </th>
                    <td class="px-[5%]">
                        {{$driver->experience}}
                    </td>
                </tr>
               <tr class="border-2 h-12">
                <th  class="p-3"> Citizenship </th>
                <td class="px-[5%]">
                    {{$driver->citizenship}}
                </td>
            </tr>
               <tr class="border-2 h-12">
                <th class="p-2">Created</th>
                <td class="px-[5%]">
                    {{$driver->created_at}}
                </td>
                </tr>
               <tr class="border-2 h-12">
                   <th class="p-2"> Updated</th>
                   <td class="px-[5%]">
                       {{$driver->updated_at}}
                   </td>
               </tr>
               <tr class="border-2 h-[20vh]">
                   <th> Photo </th>
                   <td class="px-[5%]">
                       <img src="/storage/{{$driver->photopath0}}">
                   </td>
                </tr>
              
          
         </table>
   

   </div>
   <div class="fixed bottom-3 right-5">
       <a href="{{route('admin.drivers.edit',$driver->id)}}">
           <div class="w-12 h-12 relative rounded-full bg-amber-500 hover:bg-amber-600 text-center shadow-md hover:shadow-lg cursor-pointer">
               <i class="fa fa-edit text-white text-xl center"></i>
           </div>
       </a>
 </div>

@endsection
