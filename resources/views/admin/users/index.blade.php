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

<div class="py-3 px-3 w-full">
    <h1 class="text-4xl text-gray-800 font-semibold">
        Registered Users
      </h1>
      <hr class="border-amber-500">
      <table class="w-full shadow-md mt-4" id="table">
        <thead>
            <tr class="border border-gray-400 bg-violet-700 text-white h-10">
            <td class="py-2 border border-gray-300 px-2"> ID </td>
            <td class="border px-2 py-2 border-slate-300">Name</td>
            <td class="border px-2 py-2 border-slate-300">Email</td>
            <td class="border px-2 py-2 border-slate-300">Contact Number</td>
            <td class="border px-2 py-2 border-slate-300"> Address</td>
            <td class="border px-2 py-2 border-slate-300"> Role</td>
            <td class="border px-2 py-2 border-slate-300"> Citizenship</td>
            {{-- <td class="border px-2 py-2 border-slate-300"> Photo</td> --}}
            <td class="border px-2 py-2 border-slate-300"> Status</td>
            </tr>
         </thead>

        @php
        $i=1;
        @endphp

        @foreach ($users as $user )
        <tr class="border border-gray-400">
            <td class="border px-2 py-2 border-slate-400">
                @php echo $i;
                $i++
                @endphp
            </td>

            <td class="border px-2 py-2 border-slate-400">
                {{$user->name}}
            </td>

            <td class="border px-2 py-2 border-slate-400">
                {{$user->email}}
            </td>
            <td class="border px-2 py-2 border-slate-400">
                {{$user->phone}}
            </td>
            <td class="border px-2 py-2 border-slate-400">
                {{$user->address}}
            </td>
            <td class="border px-2 py-2 border-slate-400">
                {{$user->role}}

            </td>
            <td class="border px-2 py-2 border-slate-400">
                {{$user->citizenship}}
            </td>
            {{-- <td class="py-2 border border-slate-400 px-2  w-44">
                <img src="/storage/{{$user->photopath0}}" class="w-32 h-32" >
            </td> --}}
            <td class="py-2 h-full items-center px-2 flex">
                <a href="{{route('admin.users.show',$user->id)}}"><i class="text-xl px-2 mx-2  fas fa-eye text-white hover:text-black bg-violet-600 pt-2 pb-2" > Show</i>  </a>
            </td>
        </tr>

            
        @endforeach

</table>



</div>

</div>

@endsection
