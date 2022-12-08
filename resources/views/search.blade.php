@extends('layouts.website')

@section('css')
     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

     <style>
         .img{
             overflow: hidden;

         }
         .img img{
            transition: .2s all ease-in-out;

         }
         .img:hover img{
             transform: scale(1.08);


         }
     </style>
@endsection


@section('main')
    <div class="w-11/12 mx-auto pb-4">

        <div></div>

        <form class="mt-4 flex justify-center" action="{{route('search')}}" method="get">
            <div class="flex h-full">
                <input type="search" placeholder="Search" name="search" id="search" value="{{Request::input('search')}}" class=" border-gray-300  rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500">
                <button class="bg-indigo-800 text-white rounded-md mt-2 px-5 py-2 "><i class="fas fa-search"></i></button>
            </div>
        </form>

       
     
        <h2 class= "text-3xl py-2 font-bold">You search for: <span>"{{Request::input('search')}}"</span></h2>
            

        <hr class="text-gray-600 mt-2">

        @if (Request::input('search'))
                    @if(count($vehicles) == 0) 
                    <h2 class=" text-3xl py-2 font-bold text-center">The car you have searched is not available.</h2>
                @endif

                <div class="grid md:grid-cols-4  grid-cols-1 px-4 gap-20">
                    
                    @foreach ($vehicles as $vehicle)
                        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-white">
                                
                            <div class="flex justify-center group">
                                <img src="/storage/{{$vehicle->photopath1}}" class="group-hover:scale-110 transition-all duration-700 w-full h-40 ">
                            </div>
                            
                            <div class="flex justify-between px-2 py-1">
                                <h1 class="font-semibold  text-lg ">
                                    <a href="{{route('productview',$vehicle->id)}}">{{$vehicle->name}}</a>
                                </h1>
                            </div>  
                        </div> 
                    @endforeach
                    
                </div> 
        @endif
    </div>
@endsection