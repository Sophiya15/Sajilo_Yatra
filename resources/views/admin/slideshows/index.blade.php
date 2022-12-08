@extends('layouts.admin.app')

@section('main')
@include('sweetalert::alert')
<style>
        .white-card{
            background: rgba(49, 79, 162, 0.15);
            box-shadow: 0 8px 32px 0 rgba(49, 79, 162, 0.15);
            backdrop-filter: blur(8px);
            --webkit-backdrop-filter:blur(8px);

        }
    </style>

<div class="w-full px-4" >
    
        <div class="flex justify-between mt-4 ml-3">
            <h1 class="font-bold text-3xl">Slideshow</h1>
            <a href="{{route('admin.slideshows.create')}}" class="bg-indigo-700 text-white px-6 mr-5 rounded-md mb-2 py-1">Add</a>
        </div>
        <hr class="border-b border-b-amber-500 my-2">

        <table class="w-[130vh] border border-gray-300 mt-3 mx-[10%] ">
            <tr class="bg-violet-700 text-white h-10">
                <td class="border px-4 border-gray-200">ID</td>
                {{-- <td class="border px-4 border-gray-200">Title</td> --}}
                <td class="border px-4 border-gray-200">Photo</td>
                <td class="border px-4 border-gray-200">Action</td>
            </tr>
            @php
                $i = 1;

            @endphp
            @foreach ($slideshows as $slideshow)
            <tr class="h-10">
                <td class="border px-4 border-gray-200">
                    @php echo $i; $i++; 
                    @endphp
                </td>
                {{-- <td class="border px-4 border-gray-200 w-52">
                   {{$slideshow->title}}
                </td> --}}
                <td class="border px-4 border-gray-200 w-52">
                    <img src="/storage/{{$slideshow->photopath}}">
                </td>
                <td class="border px-4 border-gray-200">
                 
                    <a > <i class="text-xl px-2 fas fa-trash-alt text-white hover:text-black bg-red-600 pt-2 pb-2"
                         onclick="showdelete({{$slideshow->id}})"> Delete</i>  </a>
             
                    </form>
                </td>
            </tr>
            @endforeach
            
        </table>

        <div id="deletemodal" class="white-card hidden overflow-y-auto overflow-x-hidden fixed right-0
        left-0 top-20 z-50 justify-center items-center md:h-full md:inset-0 align-middle">
            <div class="relative px-4 w-full max-w-md h-full md:h-auto mx-auto">
                {{-- modal content --}}
                <div class="relative bg-white rounded-lg shadow pb-8">
                <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="Post" action="{{route('admin.slideshows.delete')}}">
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
    
    

    <div class="fixed bottom-5 right-5 ">
        <a href="{{route('admin.slideshows.create')}}">
            <div class="h-14 w-14 rounded-full bg-blue-900 shadow-lg relative  hover:bg-blue-800 cursor-pointer">
                <i class="fa fa-plus text-white text-xl  absolute top-[35%] right-[35%]"></i>
            </div>
        </a>
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