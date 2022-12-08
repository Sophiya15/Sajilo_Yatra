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
    <div class="py-3 px-4 w-full">
        <div class="flex justify-between mt-4 ml-3">
            <h1 class="font-bold text-3xl">All Cars</h1>
            <a href="{{route('admin.vehicles.create')}}" class="bg-indigo-700 text-white px-6 mr-5 rounded-md mb-2 py-1">Add</a>
        </div>

          <hr class="border-amber-500">
          <table class="w-full shadow-md mt-4" id="table">
            <thead>
                <tr class="border border-gray-400 bg-violet-700 text-white h-10">
                
                    <td class="py-2 border border-gray-300 px-2">
                        ID
                    </td>
        
                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Car Name
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Brand Name
                    </td>

                    {{-- <td class="py-2 border border-gray-300 px-2 w-32">
                        Car Type
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Car Fuel Type
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Car Seat
                    </td> --}}

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Rental Price
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Is Available
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-32">
                        Car Photo
                    </td>

                    
                    <td class="py-2 border border-gray-300 px-2">
                        Action
                    </td>
                    
                    
                </tr>
            </thead>
            @php
                $i =1;
            @endphp
            <tbody>
                @foreach ($vehicles as $vehicle)
                <tr class="border border-gray-400 ">
                    
                    <td class="py-2 border border-gray-300 px-2">
                        @php
                            echo $i++;
                        @endphp
                    </td>
                   
                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->name}}
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->brand->name}}
                    </td>

                    {{-- <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->type}}
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->fuelType==1 ? 'Diesel' : 'Petrol'}}
                    </td>

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->seater}}
                    </td> --}}

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->price}}
                    </td>
                   

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        {{$vehicle->isAvailable == 1 ? 'Yes' : 'No'}}
                    </td>

                    

                    <td class="py-2 border border-gray-300 px-2 w-44">
                        <img src="/storage/{{$vehicle->photopath1}}" class="w-32 h-32" >
                    </td>
                    
                    <td class="py-2  items-center px-2 flex">
                        <a href="{{route('admin.vehicles.edit',$vehicle->id)}}"><i class="text-xl px-2  fas fa-edit text-white hover:text-black bg-green-600 pt-2 pb-2" > Edit</i>  </a>
                        <a href="{{route('admin.vehicles.show',$vehicle->id)}}"><i class="text-xl px-2 mx-2  fas fa-eye text-white hover:text-black bg-violet-600 pt-2 pb-2" > Show</i>  </a>
    
                        <a > <i class="text-xl px-2 fas fa-trash-alt text-white hover:text-black bg-red-600 pt-2 pb-2" onclick="showdelete({{$vehicle->id}})"> Delete</i>  </a>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    
    
 {{-- Modal For Delete --}}
    
                        <!-- Main modal -->
                        <div id="deletemodal"  class="white-card hidden dark:bg-white dark:bg-opacity-10 overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-20 z-50 justify-center items-center md:h-full md:inset-0  align-middle"  >
                            <div class="relative px-4 w-full max-w-md h-full md:h-auto mx-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 pb-8">
                                
                                    <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST" action="{{route('admin.vehicles.delete')}}">
                                    @csrf
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white pt-6 mb-0 text-center">Are You Sure to Delete ?</h3>
                                        <p class="text-center mt-0 text-red-500">The action is irreversible</p>
                                        
                                        <input type="hidden" id="dataid" name="dataid">
                                        
                                        <div class="flex justify-center">
                                        <button type="submit" class="py-2 px-4 mx-2 rounded-md text-white bg-indigo-600 shadow-md shadow-indigo-200 hover:bg-indigo-800 hover:shadow-sm dark:shadow-gray-600">Yes ! Delete</button>
                                        <a class="py-2 px-4 mx-2 rounded-md cursor-pointer text-white bg-red-500 shadow-md shadow-red-200 hover:bg-red-600 hover:shadow-sm dark:shadow-gray-600" onclick="hidedelete()">Cancel</a>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div> 
            
            {{-- End Modal For Delete --}}
    

          <div class="fixed bottom-3 right-5">
                <a href="{{route('admin.vehicles.create')}}">
                    <div class="w-12 h-12 relative rounded-full bg-amber-500 hover:bg-amber-600 text-center shadow-md hover:shadow-lg cursor-pointer">
                        <i class="fa fa-plus text-white text-xl center"></i>
                    </div>
                </a>
          </div>
    </div>

@endsection

@section('js')

  
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
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
            });
    </script>
  
@endsection