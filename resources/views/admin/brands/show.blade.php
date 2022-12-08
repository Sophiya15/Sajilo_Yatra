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
    <div class="py-3 px-5 w-full">
        <div class="flex justify-between mt-4 ml-3">
            <h1 class="font-bold text-3xl">Brands Details</h1>
            <a href="{{route('admin.brands.index')}}" class="bg-indigo-500 px-8 py-2 mb-4 rounded-md shadow-md hover:shadow-lg hover:bg-[#225da5] text-white">
                Go Back
            </a>
         </div>
         

          <hr class="border-amber-500">
          <table class="w-full shadow-md mt-4" id="table">
                <tr class="border-2 h-10">
                         <th> ID </th>
                         <td>
                            {{$brand->id}}
                        </td>
                </tr>
                <tr class="border-2 h-10">
                    <th> Name </th>
                    <td>
                        {{$brand->name}}
                    </td>
                </tr>
                <tr class="border-2 h-10">
                    <th> Created At</th>
                    <td>
                        {{$brand->created_at}}
                    </td>
                </tr>
                <tr class="border-2 h-10">
                    <th> Updated At</th>
                    <td>
                        {{$brand->updated_at}}
                    </td>
                </tr>
                <tr class="border-2 ">
                    <th> Photo </th>
                    <td>
                        <img src="/storage/{{$brand->photopath}}">
                    </td>
                 </tr>
                 <tr class="border-2 h-10">
                    <th> Vehicles </th>
                    <td>
                    <table class="w-full shadow-md mt-4" id="table">       
                        <tr class="border-2 h-10 bg-violet-700 text-white">
                        <th class="border-2"> SN </th>
                        <th> Name </th>
                        </tr>
                        <tr class="border-2 h-10">
                            
                            <td class="text-center border-2">
                              
                            </td>
                            
                            <td> 
                               
                            </td>
                        </tr>
                    </table>
                </tr>
           
          </table>
    

    </div>
    <div class="fixed bottom-3 right-5">
        <a href="{{route('admin.brands.edit',$brand->id)}}">
            <div class="w-12 h-12 relative rounded-full bg-amber-500 hover:bg-amber-600 text-center shadow-md hover:shadow-lg cursor-pointer">
                <i class="fa fa-edit text-white text-xl center"></i>
            </div>
        </a>
  </div>

@endsection
