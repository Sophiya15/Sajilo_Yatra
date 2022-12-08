@extends('layouts.admin.app')

@section('css')
<script src="https://cdn.tiny.cloud/1/t8ia743cjhnaxyxa9uf5fq2lmyfqrfj2zx4hw48yk3eo1ymb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('main')

    <div class="py-3 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold">
                Add New Vehicle  
            </h1>
            <a href="{{route('admin.vehicles.index')}}" class="bg-indigo-500 px-8 py-2 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
        </div>
          <hr class="border-amber-500">
          <form action="{{route('admin.vehicles.store')}}" method="post" enctype="multipart/form-data" class="py-5">
            @csrf
                <div class="my-2">
                    <label class="text-gray-500">Enter Vehicle Name</label>
                    <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Vehicle Name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Select Brand</label>

                    <select  name="brand_id" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                        <option disabled selected>-- Select Brand --</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    @error('brand_id')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>


                <div class="my-2 mt-5">
                    <label class="text-gray-500">Enter vehicle Type</label>
                    <input type="text" name="model" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter vehicle model" value="{{old('model')}}">
                    @error('model')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Enter Number of Seats </label>
                    <input type="text" name="seater" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter number of seat" value="{{old('seater')}}">
                    @error('seater')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Rental Price </label>
                    <input type="text" name="price" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter the rental price" value="{{old('price')}}">
                    @error('price')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                
                <div class="my-2 mt-5">
                    <label class="text-gray-500">Number Plate </label>
                    <input type="text" name="plate" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter the number of plate of car" value="{{old('plate')}}">
                    @error('plate')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                
                <div class="my-2 mt-5">
                    <label class="text-gray-500">Select Driver</label>

                    <select  name="driver" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                        <option disabled selected>-- Select Driver --</option>
                        @foreach ($drivers as $driver)
                            <option value="{{$driver->name}}">{{$driver->name}}</option>
                        @endforeach
                    </select>
                    @error('driver')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Fuel Type</label>

                    <select  name="fuelType" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                        <option disabled selected>-- Fuel Type --</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Petrol">Petrol</option>
                    </select>
                    @error('fuelType')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Is Available</label>

                    <select  name="isAvailable" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                        <option disabled selected>-- Is Available --</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                    </select>
                    @error('isAvailable')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="my-2 mt-5">
                    <label class="text-gray-500">Enter Extra Features</label>
                    <textarea name="extra" id="basic-example" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Car Extra Features">{{old('extra')}}</textarea>
                    @error('extra')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mt-5">
                    <label class="text-gray-500">Select First Photo </label>
                    <input type="file" name="photopath1" id="" class="mt-1 w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500 file:bg-amber-500 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-[#ff9a01] file:cursor-pointer ">
                    @error('photopath')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mt-5">
                    <label class="text-gray-500">Select Second Photo </label>
                    <input type="file" name="photopath2" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500 file:bg-amber-500 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-[#ff9a01] file:cursor-pointer ">
                    @error('photopath')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mt-5">
                    <label class="text-gray-500">Select Third Photo </label>
                    <input type="file" name="photopath3" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500 file:bg-amber-500 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-[#ff9a01] file:cursor-pointer ">
                    @error('photopath')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>


            <div class="flex my-6">
                <a href="{{route('admin.vehicles.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Save" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
            </div>

          </form>

          
    </div>
    
@endsection

@section('js')
    <script>
        function showD(){
            console.log("hello");
            document.getElementById("discounted").classList.remove("hidden");
        }
    </script>

    <script>
        tinymce.init({
            selector: 'textarea#basic-example',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });



    </script>
@endsection