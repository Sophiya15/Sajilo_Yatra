@extends('layouts.admin.app')

@section('main')
@include('sweetalert::alert')
<div class="flex-1">
    <div class="w-full px-4 py-3">
        <div class="flex justify-between  item-center mt-4 ml-3">
            <h1 class="font-bold text-3xl">Add New Slideshow</h1>
            <a href="{{route('admin.slideshows.index')}}" class=" bg-indigo-700 text-white px-6 mr-5 rounded-md mb-2 py-1">Go back</a>
        
            </div>
            <hr class="border-b border-b-blue-500 my-2">
           
        
        
            <form action="{{route('admin.slideshows.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title" class="text-gray-800 text-lg font-semibold">Title</label>
                <input id="title" type="text" name="title" class="border mb-2 border-gray-200  text-gray-700 p-2  shadow-md  cursor-pointer bg-white w-full rounded-lg focus:border-gray-500 focus:ring-transparent" >
                @error('title')
                    <p class="text-red-500 text-sm font-bold">
                        {{$message}}
                    </p>
                @enderror

               <div class="mt-2">
                    <label for="photopath" class="text-gray-800 text-lg font-semibold ">Select Image</label>

                    <input type="file" name="photopath" class="file:border-none file:bg-blue-600 file:text-white file:p-2 file:rounded-md file:shadow-xl file:hover:bg-blue-700 file:cursor-pointer bg-white shadow-lg w-full rounded-lg" >
                    @error('photopath')
                        <p class="text-red-500 text-sm font-bold">
                            {{$message}}
                        </p>
                    @enderror
               </div>
            <div class="flex mt-5">
                <a href="{{route('admin.slideshows.index')}}" class="bg-red-500 hover:bg-red-600 text-white px-6 mr-5 rounded-md mb-2 py-1">Go back</a>
                <input type="submit" value="save" class="bg-indigo-700 cursor-pointer text-white px-6 mr-5 rounded-md mb-2 py-1">
        
            </div>
        </form>
    </div>
</div>
@endsection