@extends('layouts.website')

@section('css')
    <style>
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

    
        input[type=number] {
        -moz-appearance: textfield;
        }

        .active{
            background-color: rgb(130, 180, 238); 
            border: none;
        }


    </style>
@endsection

@section('main')
@include('sweetalert::alert')
    <div class="w-10/12 mx-auto pb-5">
            <div class="md:flex mt-8 py-5">
                <div class=" md:flex-initial bg-white md:w-80 w-full pb-5 md:pb-0">
                    <!-- My Booking Open -->
                        <h2 class=" text-2xl font-bold px-8 pt-2">My Profile</h2>
                        <hr class=" mt-2">
                        <button class="tablinks w-56 mt-2 py-2 px-5 border border-gray-600 rounded-md ml-10 active" onclick="openCity(event, 'myprofile')">My Information</button>

                    <!-- My Booking close -->
                    
                </div>
              

                <div class="flex-1 bg-white md:ml-5 md:mt-0 pb-[5%]">
                    <div class="px-[80%]"> 
                        <button class =  " rounded-md shadow-md bg-indigo-500 text-white  px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600"> <a href="{{route('myhistory')}}">History </a> </button>
                    </div> 
                    <div id="myprofile" class="px-5 tabcontent">
                    <h2 class="text-gray-500 text-xl font-bold px-8 pt-2">My Information</h2>
            
                    <hr class="text-gray-600 mt-2">
                        <!-- Information Form Open -->
                            <div class="px-10 mt-5 my-5">
                                {{-- <div class="mt-6 px-[40]">
                                    <div class="rounded-full shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-gray-300 w-[25vh] h-[25vh] justify-center">
                                    </div>
                                 </div> --}}
                                    <!-- Name Box Open-->
                                        <div class="mt-6">
                                            <label for="name" class="block text-gray-600 text-sm uppercase">Name </label>
                                            <input type="text" name="name" id="name" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::user()->name}}" readonly>
                                        </div>
                                    <!-- Name Box Close -->
    
                                    <!-- Email Box Open-->
                                        <div class="mt-6">
                                            <label for="email" class="block text-gray-600 text-sm uppercase">Email Address </label>
                                            <input type="email" name="email" id="email" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" readonly value="{{Auth::user()->email}}">
                                        </div>
                                    <!-- Email Box Close -->
    
                                    <!-- Mobile Box Open-->
                                        <div class="mt-6">
                                            <label for="mobile" class="block text-gray-600 text-sm uppercase">Mobile Number </label>
                                            <div class="flex">
                                                <input type="text" value="+977" readonly class="border-gray-300 w-16 rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2">
                                                <input type="number" name="phone" id="mobile" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500"  value="{{Auth::user()->phone}}" readonly>
                                            </div>
                                        </div>
                                    <!-- Mobile Box Close -->

    
                                    
                                                <div class="mt-6">
                                                    <label for="address" class="block text-gray-600 text-sm uppercase">Address </label>
                                                    
                                                    <input type="text" name="address" id="address" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::user()->address}}" readonly>
                                                </div>
                                            <!--Address Box Close -->

                                            <div class="mt-6">
                                                <label for="citizenship" class="block text-gray-600 text-sm uppercase">Citizenship Number</label>
                                                <input type="text" name="citizenship" id="citizenship" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" value="{{Auth::user()->citizenship}}" readonly>
                                               
                                            </div>


                                            <div class="mt-6">
                                            <a href="{{route('profile.edit',Auth::user()->id)}}" class="px-10 rounded-md bg-indigo-300 text-black hover:text-white hover:bg-indigo-500 py-1 my-5 cursor-pointer"> Edit Profile </a>
                                            </div>
                                        <!--Citizenship Box Close -->
                                        </div>
                                     </div>
                                    <!--  My Information Box Close -->
    



                                    <div id="updatePassword" class="px-5 tabcontent hidden mb-6">
                                        <h2 class=" text-xl font-bold px-8 pt-2">Change Password</h2>
                                        <hr class="text-gray-600 mt-2">
                                        <form action="{{ route('update-password') }}" method="POST" class="pb-5">
                                            @csrf
                                            <div class="card-body mt-3">
                                                @if (session('status'))
                                                    <div class="alert alert-success text-red-600" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @elseif (session('error'))
                                                    <div class="alert alert-danger text-red-600" role="alert">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                    
                                                <div class="mb-3 justify-center">
                                                    <label for="oldPasswordInput" class="form-label p-5">Old Password</label>
                                                    <div class="px-5 pt-1">
                                                    <input name="old_password" type="password" class="form-control  rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                        placeholder="Old Password">
                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="newPasswordInput" class="form-label p-5">New Password</label>
                                                   <div class="px-5 pt-1">
                                                    <input name="new_password" type="password" class="form-control rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                                        placeholder="New Password">
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                 </div>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="confirmNewPasswordInput" class="form-label p-5">Confirm New Password</label>
                                                    <div class="px-5 pt-1">
                                                    <input name="new_password_confirmation" type="password" class="form-control rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500" id="confirmNewPasswordInput"
                                                        placeholder="Confirm New Password"
                                                        > </div>
                                                </div>
                    
                                            </div>
                    
                                            <div class="card-footer px-5">
                                                <button type="submit" class="rounded-md shadow-md bg-indigo-500 text-white  px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600" > Submit </button>
                         
                                            </div>
                    
                                        </form>


                                    
                                    </div>
                                    {{-- <a href="{{route('profile.edit',$user->id)}}" class="px-10 rounded-md bg-indigo-300 text-black hover:text-white hover:bg-indigo-500 py-1 my-5 cursor-pointer"> Edit Profile </a> --}}
                                    
                            




                        </div>
                     </div>
                        <!-- Information Form Close -->
                        

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
