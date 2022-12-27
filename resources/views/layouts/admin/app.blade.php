<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title class="logo">{{ config('app.name', 'SajiloYatra') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .scale img{
                transition: all .2s ease-in-out;
            }
            .scale:hover img{
                transform: scale(1.06);
                transition: all .2s ease-in-out;

            }
            .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial;
            }

            /* Links inside the navbar */
            .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            /* The dropdown container */
            .dropdown {
            float: left;
            overflow: visible;
            position:absolute;
             
            right:50px;
            }

            /* Dropdown button */
            .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            font: bold;
            outline: #ebe7ed;
            color: black;
            padding: 14px 16px;
            font-size: 20px;
            
            font-family: inherit; /* Important for vertical align on mobile phones */
            margin: 0; /* Important for vertical align on mobile phones */
            }

            /* Add a red background color to navbar links on hover */
            .navbar a:hover, .dropdown:hover .dropbtn {
            
            }

            /* Dropdown content (hidden by default) */
            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #bcb2b2;
            min-width: 130px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            /* Add a grey background color to dropdown links on hover */
            .dropdown-content a:hover {
            background-color: black;
            }

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
            display: block;
            }
        
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <style>
            .dash{
                background-color: #260869;
            }

            </style>
            @yield('css')
    </head>
    <body class="font-sans antialiased bg">
        <div class="bg-gray-100 w-full flex">
            {{--code for head --}}
            <div class="grid grid-cols-2">
                    <p class="font-serif text-3xl p-3">SajiloYatra</p>
                    <div class="font-serif text-3xl py-3 pt-2">
                        <img src="{{asset('images/cars/logo.jpg')}}" class="h-10 rounded-full"> 
                    </div>
                
                        @auth
                    <div class="dropdown">
                        <button class="dropbtn">Hey!,{{Auth::user()->name}}
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{route('welcome')}}" class="font-bold  px-5 py-2 hover:text-amber-700 cursor-pointer">
                                   Home
                                 </a>   
                            <form action="{{route('logout')}}" method="post"  class="hover:bg-black">
                                @csrf
                                <button type="submit" class="font-bold  px-5 py-2 hover:text-amber-700 cursor-pointer">logout</button>
                            </form>
                        @endauth</li>
                        </ul>
                     </div>
            </div>  
        
        </div>
        <hr>
    <div class="bg-gray-100 w-full flex">
        
             {{--code ends here --}}
             <div class="w-64 ">  
                <div class="w-64 min-h-screen max-h-full h-full dash"> 
    
                    <ul class="text-white py-3 px-2">
                        <li class="py-1 my-2 w-full px-3 {{request()->routeIs('dashboard') ? 'bg-white text-blue-800' : ''}}">
                            <a href="{{route('dashboard')}}" class="text-xl no-underline fas fa-tachometer-alt py-2 "> Dashboard</a>
                    </li>

                    <li class="py-1 my-2  w-full px-3 {{request()->routeIs('admin.slideshows.*') ? 'bg-white text-blue-800' : ''}}">
                        <a href="{{route('admin.slideshows.index')}}" class="text-xl no-underline fab fa-slideshare py-2"> SlideShow</a>
                    </li>

                    <li class="py-2 px-2 {{request()->routeIs('admin.brands.*') ? 'bg-white text-blue-800' : ''}}">
                        <a href="{{route('admin.brands.index')}}" class="text-xl no-underline fas fa-fire py-2"> Brands</a>
                    </li>

                    <li class="py-2 px-2  {{request()->routeIs('admin.vehicles.*') ? 'bg-white text-blue-800' : ''}}">
                        <a href="{{route('admin.vehicles.index')}}" class="text-xl no-underline py-2 fas fa-car-alt"> Vehicle</a>
                    </li>

                    <li class="py-2 px-2 {{request()->routeIs('admin.bookings.*') ? 'bg-white text-blue-800' : ''}}">
                        <a href="{{route('admin.bookings.index')}}" class="text-xl no-underline fas fa-list py-2"> Booking</a>
                    </li>
                    
                    <li class="py-2 px-2 {{request()->routeIs('admin.users.*') ? 'bg-white text-blue-800' : ''}} ">
                        <a href="{{route('admin.users.index')}}" class="text-xl no-underline fas fa-users py-2"> Reg Users</a>
                    </li>
                    <li class="py-2 px-2 {{request()->routeIs('admin.feedbacks.*') ? 'bg-white text-blue-800' : ''}} ">
                        <a href="{{route('admin.feedbacks.index')}}" class="text-xl no-underline fas fa-comment-alt py-2"> Feedbacks</a>
                    </li>
                    <li class="py-2 px-2 {{request()->routeIs('admin.drivers.*') ? 'bg-white text-blue-800' : ''}} ">
                        <a href="{{route('admin.drivers.index')}}" class="text-xl no-underline fas fa-user-alt py-2"> Drivers</a>
                    </li>
                    <li class="py-2 px-2 {{request()->routeIs('admin.reportings.*') ? 'bg-white text-blue-800' : ''}} ">
                        <a href="{{route('admin.reportings.index')}}" class="text-xl no-underline fas fa-file py-2"> Ride Reporting</a>
                    </li>
                    <li class="py-2 px-2 {{request()->routeIs('admin.reviews.*') ? 'bg-white text-blue-800' : ''}} ">
                        <a href="{{route('admin.reviews.index')}}" class="text-xl no-underline fas fa-star py-2"> Review</a>
                    </li>
                </ul>
                
             </div>
             </div>
            
        

     @yield('main')
    </div>
    
     @yield('js')
    </body>
    </html>
        