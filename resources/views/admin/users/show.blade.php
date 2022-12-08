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
            <h1 class="font-bold text-3xl">Users Details</h1>
            <a href="{{route('admin.users.index')}}" class="bg-indigo-500 px-8 py-2 mb-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
         </div>

         <hr class="border-amber-500">
         <table class="w-full shadow-md mt-4" id="table">
               <tr class="border-2 h-12">
                        <th> ID </th>
                        <td class="px-7">
                           {{$user->id}}
                       </td>
               </tr>
               <tr class="border-2 h-12">
                   <th class="px-10"> Name </th>
                   <td class="px-7">
                       {{$user->name}}
                   </td>
               </tr>
                <tr class="border-2 h-12">
                              <th> Email </th>
                              <td class="px-7">
                                 {{$user->email}}
                             </td>
                     </tr>
                     <tr class="border-2 h-12">
                         <th class="px-10"> Phone </th>
                         <td class="px-7">
                             {{$user->phone}}
                         </td>
                     </tr>
                     <tr class="border-2 h-12">
                        <th class="px-10"> Address </th>
                        <td class="px-7">
                            {{$user->address}}
                        </td>
                    </tr>
                    <tr class="border-2 h-12">
                        <th class="px-10"> Role </th>
                        <td class="px-7">
                            {{$user->role}}
                        </td>
                    </tr>
                    <tr class="border-2 h-12">
                        <th class="px-10"> Citizenship No. </th>
                        <td class="px-7">
                            {{$user->citizenship}}
                        </td>
                    </tr>
                    <tr class="border-2 h-12">
                        <th class="px-10"> Photo </th>
                        <td class="px-7">
                            {{$user->photopath0}}
                        </td>
                    </tr>  
                    <tr class="border-2 h-12">
                        <th class="px-10"> Photo </th>
                        <td class="px-7">
                            <img src="/storage/{{$user->photopath0}}">
                        </td>
                     </tr>
                    <tr class="border-2 h-12">
                        <th> Created At</th>
                        <td class="px-7">
                            {{$user->created_at}}
                        </td>
                    </tr>
                    <tr class="border-2 h-12">
                        <th> Updated At</th>
                        <td class="px-7">
                            {{$user->updated_at}}
                        </td>
                    </tr>
                  

@endsection