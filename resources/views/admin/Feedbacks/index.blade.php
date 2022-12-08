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
            All Feedbacks
          </h1>
          <hr class="border-amber-500">
          <table class="w-full shadow-md mt-4" id="table">
            <thead>
                <tr class="border border-gray-400 bg-violet-700 text-white h-10">
                <td class="py-2 border border-gray-300 px-2"> ID </td>
                <td class="border px-2 py-2 border-slate-300">Name</td>
                <td class="border px-2 py-2 border-slate-300">Email</td>
                <td class="border px-2 py-2 border-slate-300">Contact Number</td>
                <td class="border px-2 py-2 border-slate-300"> Message</td>
                <td class="border px-2 py-2 border-slate-300"> Action</td>
                </tr>
             </thead>
       
        <tbody>
            @foreach ($feedbacks as $feedback)
            <tr class="border border-gray-400 ">
                
                <td class="py-2 border border-gray-300 px-2">
                   {{$feedback->id}}
                </td>
               
                <td class="py-2 border border-gray-300 px-2 ">
                    {{$feedback->name}}
                </td>
                <td class="py-2 border border-gray-300 px-2 ">
                    {{$feedback->email}}
                </td>
                <td class="py-2 border border-gray-300 px-2 ">
                    {{$feedback->phone}}
                </td>
                <td class="py-2 border border-gray-300 px-2 ">
                    {{$feedback->message}}
                </td>
                <td>
                    <a > <i class="text-xl  mx-4 py-2 px-2 fas fa-trash-alt text-white hover:text-black bg-red-600 pt-2  pb-2" onclick="showdelete({{$feedback->id}})"> Delete</i>  </a>
                </td>

            </tr>
         @endforeach
        </tbody>
    </table>
    <div id="deletemodal" class="white-card hidden overflow-y-auto overflow-x-hidden fixed right-0
    left-0 top-20 z-50 justify-center items-center md:h-full md:inset-0 align-middle">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto mx-auto">
            {{-- modal content --}}
            <div class="relative bg-white rounded-lg shadow pb-8">
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="Post" action="{{route('admin.feedbacks.delete')}}">
                @csrf
                <h3 class="text-2xl font-bold text-gray-900 pt-6 mb-0 text-center">Are you sure to delete?</h3>
                <p class="text-center mt-0 text-red-500">The action is irreversible</p>

                <input type="hidden" id="dataid" name="dataid">
                <div class="flex justify-center">
                    <button type="submit" class="py-2 px-4 mx-2 rounded-md text-white bg-indigo-600 shadow-md
                    shadow-indigo-200 hover:bg-indigo-800 hover:shadow-sm ">Yes! Delete</button>
                    <a class="py-2 px-4 mx-2 rounded-md cursor-pointer text-white bg-red-500 shadow-md shadow-red-200
                     hover:bg-red-600 hover:shadow-sm" onclick="hidedelete()">Cancel</a>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>


</div>

<script>
function showdelete($id){
    document.getElementById("deletemodal").classList.remove('hidden');
    document.getElementById("deletemodal").classList.add('flex');
    document.getElementById('dataid').value = $id;
}
function hidedelete(){
    document.getElementById("deletemodal").classList.remove('flex');
    document.getElementById("deletemodal").classList.add('hidden');
}
</script>


    
    

@endsection




