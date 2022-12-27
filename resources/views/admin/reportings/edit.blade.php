@extends('layouts.admin.app')

@section('css')
<script src="https://cdn.tiny.cloud/1/t8ia743cjhnaxyxa9uf5fq2lmyfqrfj2zx4hw48yk3eo1ymb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('main')

    <div class="py-3 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold">
               Ride Report: {{$reporting->vehicle_name}}
            </h1>
            <a href="{{route('admin.reportings.index')}}" class="bg-indigo-500 px-8 py-2 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
        </div>
          <hr class="border-amber-500">
          <form action="{{route('admin.reportings.update',$reporting->id)}}" method="post" enctype="multipart/form-data" class="py-5">
            @csrf
            @method('put')

            <div class="my-2 mt-5">
                <label class="text-gray-500">Select Vehicle Name</label>
    
                <select  name="vehicle_name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                    <option disabled selected>-- Select Vehicle --</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{$vehicle->name}}" @if($vehicle->name == $reporting->vehicle_name) selected @endif> {{$vehicle->name}} </option>
                    @endforeach
                </select>
                @error('vehicle_name')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="mt-3">
                <label for="phone" class="block text-gray-600 text-sm uppercase">Date <span class="text-red-500">*</span> </label>
                <input type="date" name="date" id="date" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500  form_control" value="{{$reporting->date}}">
                @error('date')
                    <p class="text-red-400 px-4">
                        {{$message}}
                    </p>
                @enderror
              </div>
    

            <div class="my-2 mt-5">
                <label class="text-gray-500">Driver </label>
            <select  name="driver_name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                <option disabled selected>-- Select Driver --</option>
                @foreach ($drivers as $driver)
                    <option value="{{$driver->name}}" @if($driver->name == $vehicle->driver) selected @endif>{{$driver->name}}</option>
                @endforeach
            </select>
            @error('driver_name')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="my-2 mt-5">
            <label class="text-gray-500">Select Driver Email</label>

            <select  name="driver_email" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                <option disabled selected>-- Select Driver Email --</option>
                @foreach ($drivers as $driver)
                    <option value="{{$driver->email}}" @if ($driver->email == $reporting->driver_email) selected @endif>{{$driver->email}}</option>
                @endforeach
            </select>
            @error('driver_email')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div class="my-2 mt-5">
            <label class="text-gray-500">Problem</label>
            <textarea name="problem" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Problems that arise during the ride">{{$reporting->problem}}</textarea>
            @error('problem')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div class="my-2 mt-5">
            <label class="text-gray-500">Solution</label>
            <textarea name="solution" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Solutions or measure taken">{{$reporting->solution}}</textarea>
            @error('solution')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mt-5">
            <label class="text-gray-500">Select Photo </label>
            <input type="file" name="photopath0" id="" class="mt-1 w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500 file:bg-amber-500 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-[#ff9a01] file:cursor-pointer " value="{{$reporting->photopath0}}">
            @error('photopath0')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="flex my-6">
            <a href="{{route('admin.reportings.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                Cancel
            </a>

            <input type="submit" value="Update" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
            
            
        </div>


          </form>

    </div>
@endsection


