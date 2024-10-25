
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



        {{--For icons Photo--}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('public/js/sweetalert.all.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <style>
            .img5{
                transition: .2s all ease-in-out;

            }
            .img4:hover .img5{
                transform: scale(1.08);
            }


            .img7{
                transition: .2s all ease-in-out;

            }
            .img6:hover .img7{
                transform: scale(1.08);
            }


            .img{
                    background-image: url('images/19.jpg');
                    background-size: cover;
                    width: screen;

                    position: absolute;
                }




            /* #videoMessage{
                    width: 100%;
                    height: 90%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: flex;

                    align-items: left;
                    flex-direction: column;
                } */



            .imgs{
                background-image: url('images/a.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .abt{
                background-image: url('images/cars/21.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }



            .ser{
                background-image: url('images/cars/24.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .car{
                background-image: url('images/37.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
            }


            .con{
                background-image: url('images/cars/30.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cont{
                background-image: url('images/cars/23.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }



            .log{
                background-image: url('images/cars/22.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .reg{
                background-image: url('images/cars/26.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>

        <style>
            /* Navbar container */
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
  overflow: hidden;
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


        @yield('css')
    </head>
        <body class="font-sans antialiased">
            <div class="w-full  bg-gray-100">


                    <div class="flex justify-between bg-amber-500 p-5">
                        <div>
                        <i class="fas fa-phone-alt fa-lg  px-3">9864452090</i>
                        </div>
                        <div>
                        <i class="fab fa-facebook fa-lg "></i>
                        <i class="fab fa-instagram fa-lg px-5"></i>
                        </div>



                    </div>


            {{--Navbar--}}
                    <div class="flex justify-between item-center px-2 py-2 w-full h-20 bg-gray-300 sticky top-0 z-20 ">

                        <h1 class="text-3xl text-red-800 font-serif font-bold px-5 py-2 mt-2 hover:text-violet-600 cursor-pointer"> SajiloYatra </h1>

                        <div class="text-black font-bold flex items-center">
                            <a  href="{{route('welcome')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Home
                            </a>
                            <a href="{{route('about')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                About
                            </a>
                            <a href="{{route('services')}}"  class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Services
                            </a>
                            <a href="{{route('cars')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Cars
                             </a>

                             <a href="{{route('search')}}" class="px-5 py-2 text-gray-600 hover:text-indigo-900 hover:font-bold ">
                                <i class="fas fa-search text-white"></i>
                            </a>
                            <a href="{{route('contact')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Contact
                            </a>

                            @guest
                            <a href="{{route('register')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Register
                             </a>
                             <a href="{{route('login')}}"  class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                 Login
                              </a>

                            @endguest


                            @auth
                            <div class="dropdown ">
                                <button class="dropbtn">Hey!,{{Auth::user()->name}}
                                  <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-content">
                                    <li>

                                    </li>
                                    <li>
                                        @auth
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{route('dashboard')}}"  class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                                Dashboard
                                            </a>
                                        @endif
                                        <form action="{{route('userBooking')}}" method="post"  class="hover:bg-black">
                                            @csrf
                                            <button type="submit" class="font-bold  px-5 py-2 hover:text-amber-700 cursor-pointer">My Booking</button>
                                        </form>
                                        <form action="{{route('profile')}}" method="get"  class="hover:bg-black">
                                            @csrf
                                            <button type="submit" class="font-bold  px-5 py-2 hover:text-amber-700 cursor-pointer">My Profile</button>
                                        </form>
                                        {{-- <form action="{{route('change-password')}}" method="get"  class="hover:bg-black">
                                            @csrf
                                            <button type="submit" class="font-bold  py-2 hover:text-amber-700 cursor-pointer">Change Password</button>
                                        </form> --}}
                                        <form action="{{route('logout')}}" method="post"  class="hover:bg-black">
                                            @csrf
                                            <button type="submit" class="font-bold  px-5 py-2 hover:text-amber-700 cursor-pointer">logout</button>
                                        </form>
                                        @endauth
                                    </li>
                                </ul>
                              </div>
                              @endauth

                            {{-- @guest
                            <a href="{{route('register')}}" class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                Register
                             </a>
                             <a href="{{route('login')}}"  class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                 Login
                              </a>



                            @endguest
                            @auth
                            @if (Auth::user()->role == 'admin')
                                <a href="{{route('dashboard')}}"  class="px-5 py-2  hover:text-amber-700 cursor-pointer">
                                    Dashboard
                                </a>
                            @endif
                            <form action="{{route('logout')}}" method="post"  class="inline-block">
                                @csrf
                                <button type="submit" class="font-bold hover:bg-white hover:text-blue-400 cursor-pointer px-5 py-2">logout</button>
                            </form>
                            @endauth --}}

                        </div>
                    </div>
                    {{--Navbar Close--}}

                    @yield('main')



                        {{--footer--}}


        <div class="pt-3   grid grid-cols-3 pb-5 px-[5%]">
            <div class="flex flex-col">
                <h1 class="text-black underline pt-5m text-2xl"> About </h1>
                <a href="{{route('about')}}" class="text-amber-700 p-2"> About Us </a>
                <a href="{{route('faq')}}" class="text-amber-700 p-2"> FAQs </a>
                <a href="{{route('contact')}}" class="text-amber-700 p-2"> Contact </a>
                <a href="{{route('services')}}" class="text-amber-700 p-2"> Services </a>
            </div>

            <div class="flex flex-col mt-5">
                <p class="py-2"><i class="fas fa-map-marker-alt fa-xl px-1 "></i> Gaindakot, Nawalpur</p>
                <p class="py-2"><i class="fas fa-phone-alt  fa-xl px-1"></i>+977 9864452090</p>
                <p class="py-2"><i class="fas fa-envelope  fa-xl px-1"></i>timilsena.sonia@gmail.com</p>
            </div>
            <div class="flex flex-col mt-5">
                <p class="py-2 px-5 pt-3 text-black text-3xl font-bold"> Do You Have Any Query?</p>
                <p class="py-2 px-10 text-black text-2xl">Then Mail Us At </p>
                <p class="py-2 text-violet-400 font-semibold px-11"><a href="{{route('contact')}}"> sajiloyatra@gmail.com </a> </p>

            </div>
            {{-- <div class=" text-black rounded-lg">
                <h1 class="text-2xl font-serif text-amber-500 mt-5"> Feedback</h1>
                    <form method="post" action="{{route('feedbacks.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-2">
                        <input type="name" placeholder="Enter your name" class="required text-black py-3 px-2 " required> <br>
                        </div>
                        <div class="mt-2">
                        <input type="email" placeholder="Enter your email" class="required text-black py-3 px-2" required>
                        </div>
                        <div class="mt-2">
                            <input type="number" placeholder="Enter Phone Number" class="required text-black py-3 px-2">
                            </div>

                        <h1 class="text-2xl  pt-2"> Message</h1> <br/>
                        <textarea rows="4" cols="45" class=" text-black"> </textarea> <br/>
                         <input type="submit" value="Submit" class="rounded-full bg-slate-500   px-4 text-xl mx-2 mt-5 mb-5">
                    </form>

            </div> --}}


    </div>

    <div class="grid grid-cols-2   bg-slate-800 py-4">
        <div class="w-11/12 mx-auto flex items-center">
            <p class="text-white">&copy; {{now()->year}}<a href="{{route('welcome')}}" class="px-2 hover:text-red-500">SajiloYatra</a>All Rights Reserved.</p>

        </div>

        <div>
            <div class=" flex flex-row-reverse px-3">
              <p class="text-white">With &hearts; by Sophiya Sharma</p>
            </div>

        </div>
    </div>

    @yield('js')

</body>
