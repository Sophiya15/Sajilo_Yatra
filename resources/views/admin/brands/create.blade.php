@extends('layouts.admin.app')

@section('main')


    <div class="py-3 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold">
                Add New Brand  
            </h1>
            <a href="{{route('admin.brands.index')}}" class="bg-indigo-500 px-8 py-2 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
        </div>
          <hr class="border-amber-500">
          <form action="{{route('admin.brands.store')}}" method="post" enctype="multipart/form-data" class="py-5">
            @csrf
             <div class="my-2">
                <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Brand Name" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="mt-2">
                <label for="photopath" class="text-gray-800 text-lg font-semibold ">Select Image</label>

                <input type="file" name="photopath" class="file:border-none file:bg-blue-600 file:text-white file:p-2 file:rounded-md file:shadow-xl file:hover:bg-blue-700 file:cursor-pointer bg-white shadow-lg w-full rounded-lg" >
                @error('photopath')
                    <p class="text-red-500 text-sm font-bold">
                        {{$message}}
                    </p>
                @enderror
           </div>

           

            <div class="flex my-6">
                <a href="{{route('admin.brands.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Save" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
               
            </div>

          </form>

          
    </div>
@endsection

