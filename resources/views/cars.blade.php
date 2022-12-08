@extends('layouts.website')

@section('main')

    {{-- <div class="w-full mx-auto bg-white"> 
        <div class="py-4 w-11/12 mx-auto ">
            <h1 class="text-4xl font-bold">Cars </h1>
        </div>
        
    </div> --}}

    

    {{-- <div class="w-11/12 mx-auto my-4 flex flex-wrap">
        @foreach ($vehicles as $vehicle)
            <a href="{{route('productview',$vehicle->id)}}">
                <div class="bg-white rounded-md shadow-md border-none hover:shadow-lg hover:-translate-y-2 ease-in-out duration-500 transition-all  pt-6 pb-1 px-6 w-64 mx-4 h-auto">
                    <img src="/storage/{{$vehicle->photopath1}}" alt="">
                    <p class="text-gray-700 text-sm">{{$vehicle->brand->name}}</p>
                    <h5 class="text-3xl font-bold mb-2 mt-0">{{$vehicle->name}}</h5>
                </div>
            </a>
        @endforeach
    </div> --}}

    <div class="bg-gray-200 py-16">
        <div class="w-11/12 mx-auto">
            <p class="font-bold font-serif text-5xl text-center py-8">Choose your desired car</p>
            <div>
{{--                
                    <div class="my-2 mt-5 px-[30%]">
                    <form class="mt-4 flex justify-center" action="{{route('search')}}" method="get">
                       <label class="text-gray-500 mt-2 pr-1">Select Vehicle</label> 
                         <select  name="vehicle_id" id="" class="w-[50vh] px-5 border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-amber-500">
                            <option disabled selected>-- Select Vehicle --</option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="rounded-md shadow-md bg-green-600 text-white px-5 cursor-pointer hover:bg-violet-600" >Search </button>
                    </form>
                        
                    </div>
                     --}}
                   
            </div>

            <div class="grid md:grid-cols-4  grid-cols-1 mt-[5%] px-4 gap-20">
                
                @foreach ($vehicles as $vehicle)
                    <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-white">
                        <a href="{{route('productview',$vehicle->id)}}">   
                        <div class="flex justify-center group">
                             <img src="/storage/{{$vehicle->photopath1}}" class="group-hover:scale-110 transition-all duration-700 w-full h-40 ">
                         </div>
                        
                         
                        <div class="flex px-2 py-1">
                            <h1 class="font-semibold  text-lg ">
                                <a href="{{route('productview',$vehicle->id)}}">{{$vehicle->name}}</a>
                            </h1>
                        </div>  
                    </div> 
                @endforeach
                
            </div>   
        </div>    
    </div>

@endsection