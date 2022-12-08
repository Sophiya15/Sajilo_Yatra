@extends('layouts.website')

@section('css')
    <style>
        .active{
            background-color: rgb(130, 180, 238); 
            border: none;
        }
    </style>
@endsection

@section('main')
    <div class="w-10/12 mx-auto pb-5">
        <div class="md:flex mt-8 py-5">
            <div class=" md:flex-initial bg-white md:w-80 w-full pb-5 md:pb-0">
                <!-- My Booking Open -->
                    <h2 class=" text-2xl font-bold px-8 pt-2">My Booking</h2>
                    <hr class=" mt-2">
                    <button class="tablinks w-56 mt-2 py-2 px-5 border border-gray-600 rounded-md ml-10 active" onclick="openCity(event, 'activebooking')">Active Booking</button>
                    <button class="tablinks w-56 mt-2 py-2 px-5 border border-gray-600 rounded-md ml-10" onclick="openCity(event, 'cancelbooking')">Cancelled Booking</button>
                    <button class="tablinks w-56 mt-2 py-2 px-5 border border-gray-600 rounded-md ml-10 " onclick="openCity(event, 'completedbooking')">Completed Booking</button>
                    
                <!-- My Booking close -->
                
            </div>
            <div class="flex-1 bg-white md:ml-5 mt-8 md:mt-0 pb-[15%]">
                
                <!-- Active Booking open-->
                <div id="activebooking" class="px-5 tabcontent">
                    <h2 class=" text-xl font-bold px-8 pt-2">Active Booking</h2>
                    <hr class="text-gray-600 mt-2">
                    <table class="border border-gray-400 mt-8 w-full border-collapse ">
                        <thead>
                            <tr class="border border-gray-400 bg-violet-700 text-white ">
                            
                                <td class="py-2 border border-gray-300 px-2">
                                    Vehicle Name
                                </td>
                    
                                <td class="py-2 border border-gray-300 px-2 w-32">
                                    Photo
                                </td>
            
                                <td class="py-2 border border-gray-300 px-2 w-32">
                                    Status
                                </td>
                                
                                <td class="py-2 border border-gray-300 px-2 w-32">
                                    Start Date
                                </td>
                                <td class="py-2 border border-gray-300 px-2 w-32">
                                    End Date
                                </td>
                                <td class="py-2 border border-gray-300 px-2 w-32">
                                    Created At
                            </tr>
                        </thead>
                        @foreach ($cbookings as $booking)
                        @if ($booking->status == 'pending' OR $booking->status == 'confirmed')
                            <tr>
                                <td class=" font-semibold border"> 
                                    <p class="text-center">
                                        {{$booking->vehicle->name}}
                                    </p>
                                </td>
                                <td class=" font-semibold border py-1 w-32">
                                    <p class="text-center">
                                        <img src="/storage/{{$booking->vehicle->photopath1}}" alt="">
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->status}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->start_date}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->end_date}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{Carbon\Carbon::parse($booking->created_at)->format('d-m-Y')}}
                                    </p>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        
                        
                    </table>
                </div>
            <!-- Active Booking close -->

                <!-- Completed Booking open-->
                    <div id="completedbooking" class="px-5 tabcontent hidden">
                        <h2 class=" text-xl font-bold px-8 pt-2">Completed Booking</h2>
                        <hr class="text-gray-600 mt-2">

                        <table class="border border-gray-400 mt-8 w-full border-collapse mb-2">
                            <thead>
                                <tr class="border border-gray-400 bg-violet-700 text-white ">
                                
                                    <td class="py-2 border border-gray-300 px-2">
                                        Vehicle Name
                                    </td>
                        
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Photo
                                    </td>
                
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Status
                                    </td>
                                    
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Start Date
                                    </td>
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        End Date
                                    </td>
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Created At
                                </tr>
                            </thead>
                            @foreach ($cobookings as $booking)
                            <tr>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->vehicle->name}}
                                    </p>
                                </td>
                                <td class=" font-semibold border py-1 w-32">
                                    <p class="text-center">
                                        <img src="/storage/{{$booking->vehicle->photopath1}}" alt="">
                                    </p>
                                </td>
                                
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->status}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->start_date}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->end_date}}
                                    </p>
                                </td>
                               
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{Carbon\Carbon::parse($booking->created_at)->format('d-m-Y')}}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                <!-- Completed Booking close -->

                

                <!-- Cancle Booking open-->
                    <div id="cancelbooking" class="px-5 tabcontent hidden">
                        <h2 class=" text-xl font-bold px-8 pt-2">Cancelled Booking</h2>
                        <hr class="text-gray-600 mt-2">

                        <table class="border border-gray-400 mt-8 w-full border-collapse ">
                            <thead>
                                <tr class="border border-gray-400 bg-violet-700 text-white ">
                                
                                    <td class="py-2 border border-gray-300 px-2">
                                        Vehicle Name
                                    </td>
                        
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Photo
                                    </td>
                
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Status
                                    </td>
                                    
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Start Date
                                    </td>
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        End Date
                                    </td>
                                    <td class="py-2 border border-gray-300 px-2 w-32">
                                        Created At
                                </tr>
                            </thead>
                            @foreach ($cabookings as $booking)
                            <tr>
                            
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->vehicle->name}}
                                    </p>
                                </td>
                                <td class="text-gray-600 font-semibold border py-1 w-32">
                                    <p class="text-center">
                                        <img src="/storage/{{$booking->vehicle->photopath1}}" alt="">
                                    </p>
                                </td>

                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->status}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->start_date}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{$booking->end_date}}
                                    </p>
                                </td>
                                <td class=" font-semibold border">
                                    <p class="text-center">
                                        {{Carbon\Carbon::parse($booking->created_at)->format('d-m-Y')}}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                <!-- Cancel Booking close -->
                
            </div>
        </div>
    </div>
    @endsection

    @section('js')
        <script>
            function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
        </script>
        {{-- Smooth Scroll --}}
        <script>
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top
                    }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                    });
                }
                }
            });
        </script>
    @endsection