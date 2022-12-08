<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SajiloYatra') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
        <body class="font-sans antialiased bg-slate-100 w-full h-full">
         <div class="w-8/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 mt-[15%] shadow-lg">
              <div class="w-full  bg-orange-600 px-8 py-5">
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-orange-900 rounded-full">
                  </div>
                  <i class="fas fa-car-side text-orange-300 text-2xl -ml-3"></i>
                </div> 
                <h3 class="text-orange-100 font-mono uppercase text-3xl py-5 font-semibold"> Sedan </h3> 
                  <p class="text-orange-50 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium facere ut doloremque possimus saepe voluptatum quas dolorum laborum recusandae molestiae fugit optio cum vitae consequatur, deleniti hic dignissimos quo magni.
                  </p>
                 <div class="my-5">
                  <a class="py-2 px-8 bg-white text-orange-400 rounded-full hover:bg-orange-900 hover:text-white cursor-pointer">
                    Learn more
                  </a>
                </div>
              </div>
            <div class="w-full  bg-teal-700 px-8 py-5">
    
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-teal-900 rounded-full">
                  </div>
                  <i class="fas fa-truck-pickup text-teal-300 text-2xl -ml-3"></i>
                </div> 
                <h3 class="text-teal-100 font-mono uppercase text-3xl py-5 font-semibold"> Suvs </h3> 
                  <p class="text-teal-50 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium facere ut doloremque possimus saepe voluptatum quas dolorum laborum recusandae molestiae fugit optio cum vitae consequatur, deleniti hic dignissimos quo magni.
                  </p>
                 <div class="my-5">
                  <a class="py-2 px-8 bg-white text-teal-400 rounded-full hover:bg-teal-900 hover:text-white cursor-pointer">
                    Learn more
                  </a>
                </div>
      
            </div>
            <div class="w-full  bg-emerald-600 px-8 py-5">
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-emerald-900 rounded-full">
                  </div>
                  <i class="fas fa-car text-emerald-300 text-2xl -ml-3"></i>
                </div> 
                <h3 class="text-emerald-100 font-mono uppercase text-3xl py-5 font-semibold"> Luxury </h3> 
                  <p class="text-emerald-50 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium facere ut doloremque possimus saepe voluptatum quas dolorum laborum recusandae molestiae fugit optio cum vitae consequatur, deleniti hic dignissimos quo magni.
                  </p>
                 <div class="my-5">
                  <a class="py-2 px-8 bg-white text-emerald-400 rounded-full hover:bg-emerald-900 hover:text-white cursor-pointer">
                    Learn more
                  </a>
                </div>
            </div>
            </div>
          </div>
            </body> 