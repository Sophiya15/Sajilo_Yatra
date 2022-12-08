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
            <h1 class="font-bold text-3xl">Cars Details</h1>
            <a href="{{route('admin.vehicles.index')}}" class="bg-indigo-500 px-8 py-2 mb-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
         </div>
         

          <hr class="border-amber-500">
          <table class="w-full shadow-md mt-4" id="table">
                <tr class="border-2 h-12">
                         <th> ID </th>
                         <td class="px-7">
                            {{$vehicle->id}}
                        </td>
                </tr>
                <tr class="border-2 h-12">
                    <th class="px-10"> Name </th>
                    <td class="px-7">
                        {{$vehicle->name}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                <th >  Brand Name </th>
                <td class="px-7">
                    {{$vehicle->brand->name}}
                </td>
                </tr>
                <tr class="border-2 h-12">
                    <th >  Driver Name </th>
                    <td class="px-7">
                        {{$vehicle->driver}}
                    </td>
                    </tr>

                    <tr class="border-2 h-12">
                        <th >  Number plate </th>
                        <td class="px-7">
                            {{$vehicle->plate}}
                        </td>
                        </tr>

                <tr class="border-2 h-12">
                    <th> Vehicle Model </th>
                    <td class="px-7">
                        {{$vehicle->model}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th> Seats </th>
                    <td class="px-7">
                        {{$vehicle->seater}}
                    </td>
                 </tr>
                 <tr class="border-2 h-12">
                    <th> Rental Price </th>
                    <td class="px-7">
                        {{$vehicle->price}}
                    </td>
                 </tr>
                 <tr class="border-2 h-12">
                    <th> Fuel Type </th>
                    <td class="px-7">
                        {{$vehicle->fuelType==1 ? 'Diesel' : 'Petrol'}}
                    </td>
                 </tr>

                 <tr class="border-2 h-12">
                    <th> Is Available</th>
                    <td class="px-7">
                        {{$vehicle->isAvailable == 1 ? 'Yes' : 'No'}}
                    </td>
                 </tr>

                <tr class="border-2 h-12">
                    <th> Created At</th>
                    <td class="px-7">
                        {{$vehicle->created_at}}
                    </td>
                </tr>
                <tr class="border-2 h-12">
                    <th> Updated At</th>
                    <td class="px-7">
                        {{$vehicle->updated_at}}
                    </td>
                </tr>
                <tr class="border-2 ">
                    <th> Photo </th>
                    <td class="px-7">
                        <img src="/storage/{{$vehicle->photopath1}}">
                    </td>
                 </tr>
                 
           
          </table>
    

    </div>

    <div class="fixed bottom-3 right-5">
        <a href="{{route('admin.vehicles.edit',$vehicle->id)}}">
            <div class="w-12 h-12 relative rounded-full bg-amber-500 hover:bg-amber-600 text-center shadow-md hover:shadow-lg cursor-pointer">
                <i class="fa fa-edit text-white text-xl center"></i>
            </div>
        </a>
  </div>

@endsection
