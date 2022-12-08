@extends('layouts.admin.app')

@section('css')
<script src="https://cdn.tiny.cloud/1/t8ia743cjhnaxyxa9uf5fq2lmyfqrfj2zx4hw48yk3eo1ymb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('main')

    <div class="py-3 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold">
                Add Driver
            </h1>
            <a href="{{route('admin.drivers.index')}}" class="bg-indigo-500 px-8 py-2 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
        </div>
          <hr class="border-amber-500">
          <form action="{{route('admin.drivers.store')}}" method="post" enctype="multipart/form-data" class="py-5">
            @csrf
            <div class="px-10 mt-5">

                    <!-- Name Box Open-->
                        <div class="mt-2">
                            <label for="name" class="block text-gray-600 text-sm uppercase"> Name  </label>
                            <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Driver Name" value="{{old('name')}}">
                            @error('name')
                                <p class="text-red-500 p-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    <!-- Name Box Close -->

                    <!-- Email Box Open-->
                        <div class="mt-4">
                            <label for="name" class="block text-gray-600 text-sm uppercase">Email  </label>
                           
                            <input type="email" name="email" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Email" value="{{old('email')}}">
                            @error('email')
                                <p class="text-red-500 p-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    <!-- Email Box Close -->

                    <!-- Mobile Box Open-->
                        <div class="mt-4">
                            <label for="phone" class="block text-gray-600 text-sm uppercase">Mobile Number  </label>
                            <div class="flex">
                                <input type="text" value="+977" readonly class=" w-16 rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2 @if ($errors->has('phone'))
                                border-red-500
                            @endif">
                            <input type="number" name="phone" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Phone No" value="{{old('phone')}}">
                            @error('phone')
                                <p class="text-red-500 p-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    <!-- Mobile Box Close -->

                    <!-- address Box Open-->
                        <div class="my-4">
                            <label for="address" class="block text-gray-600 text-sm uppercase">Address </label>
                            <input type="text" name="address" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Address" value="{{old('address')}}">
                            @error('address')
                                <p class="text-red-500 p-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    <!-- Address Box Close -->

                     <!-- Age Box Open-->
                     <div class="my-4">
                        <label for="age" class="block text-gray-600 text-sm uppercase">Age </label>
                        <input type="number" name="age" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter age" value="{{old('age')}}">
                        @error('age')
                            <p class="text-red-500 p-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                <!-- Age Box Close -->

                 <!-- License Box Open-->
                 <div class="my-4">
                    <label for="license" class="block text-gray-600 text-sm uppercase">license </label>
                    <input type="number" name="license" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter license" value="{{old('license')}}">
                    @error('license')
                        <p class="text-red-500 p-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>
            <!-- License Box Close -->

             <!-- Experience Box Open-->
             <div class="my-4">
                <label for="experience" class="block text-gray-600 text-sm uppercase"> Experience </label>
                <input type="number" name="experience" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter experience" value="{{old('experience')}}">
                @error('experience')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>
        <!-- Experience Box Close -->
        

                        <!-- Citizenship Box Open-->
                        <div class="mt-4">
                            <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Number  </label>
                            <input type="number" name="citizenship" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500" placeholder="Enter Citizenship" value="{{old('citizenship')}}">
                            @error('citizenship')
                                <p class="text-red-500 p-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Photo  </label>
                            <input type="file" name="photopath0" class="file:border-none file:bg-blue-600 file:text-white file:p-2 file:rounded-md file:shadow-xl file:hover:bg-blue-700 file:cursor-pointer bg-white shadow-lg w-full rounded-lg" >
                            @error('photopath0')
                                <p class="text-red-500 text-sm font-bold">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    <!-- Citizenship Box Close -->
                    <div class="flex my-6">
                        <a href="{{route('admin.drivers.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                            Cancel
                        </a>
        
                        <input type="submit" value="Save" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                       
                    </div>
        
                </form>


            </div>
        
        
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