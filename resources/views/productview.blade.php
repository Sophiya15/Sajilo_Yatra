@extends('layouts.website')

@section('css')
<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    .custom-number-input input:focus {
    outline: none !important;
    }

    .custom-number-input button:focus {
    outline: none !important;
    }

    .glass{
        background: rgba(255, 255, 255, 0.24);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        border: 1px solid rgba(255, 255, 255, 0.4);
    }
</style>



@endsection

@section('main')
@include('sweetalert::alert')
<div class=" bg-white">
<div class="grid grid-cols-2 group p-5 shadow-md bg-white">
    <div class="m-4 overflow-hidden" >
        <div x-data="{ total: 3, current: 0, open: true }">
            <div x-show="open" class="">
              <div class="px-4 ">
                <img x-show="current == 0" src="/storage/{{$vehicle->photopath1}}" class=" w-full zoom1 max-h-[33rem]">
                <img x-show="current == 1" src="/storage/{{$vehicle->photopath2}}" class=" w-full zoom2 max-h-[33rem]">
                <img x-show="current == 2" src="/storage/{{$vehicle->photopath3}}" class=" w-full zoom3 max-h-[33rem]">
              </div>
            </div>
            <div class="flex mt-10 md:mt-0">
              <img width="100" @click="current = 0, open = true" src="/storage/{{$vehicle->photopath1}}" class="m-3 rounded-lg shadow-lg" :class="{'border-2 border-yellow-300': current == 0, 'border-white': current != 0}">
              @if($vehicle->photopath2)<img width="100" @click="current = 1, open = true" src="/storage/{{$vehicle->photopath2}}" class="m-3 rounded-lg shadow-lg" :class="{'border-2 border-yellow-300': current == 1, 'border-white': current != 1}">@endif
              @if($vehicle->photopath3)<img width="100" @click="current = 2, open = true" src="/storage/{{$vehicle->photopath3}}" class="m-3 rounded-lg shadow-lg" :class="{'border-2 border-yellow-300': current == 2, 'border-white': current != 2}">@endif
            </div>
          </div>
    </div>

    <div class="px-8 py-8">
        <h1 class=" text-3xl py-2">Name: {{$vehicle->name}}</h1>
        <div class="flex py-2">
            <p class="font-bold text-2xl">Brand:</p>
            <p class=" text-red-500 px-2 text-2xl">{{$vehicle->brand->name}}</p>
     
        </div>
        <div class="flex py-2">
          <p class="font-bold text-2xl"> Driver </p>
          <a href=""> <p class=" text-violet-500 px-2 text-2xl cursor-pointer">{{$vehicle->driver}}</p></a>
        </div>
        <p class="font-semibold text-2xl py-2">Fuel type: {{$vehicle->fuelType}}</p>
        <p class="font-semibold text-2xl py-2">Seat capacity: {{$vehicle->seater}}</p>
        <p class="font-semibold text-2xl py-2">Price/Per Day: {{$vehicle->price}}</p>
        <div>
        @if($vehicle->extra)
            <p class="font-semibold text-2xl py-2">Extras</p>
            <p class="font-semibold text-2xl py-2">{!! $vehicle->extra !!}</p>
        @endif
        </div>
        
        @auth
       

        <div x-data="{isOpen:false}">
      {{-- @if($isShow == 1) --}}

            <button   class="rounded-md shadow-md w-full bg-indigo-500 text-white px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600" @click="isOpen=true">Book Now</button>
      {{-- @endif                       --}}
            
            <div class="fixed overflow-auto top-0 left-0 w-full h-full pb-20 glass z-50" x-show="isOpen" x-on:click="window.scrollTo(0, 0 )">
                <div class="flex justify-center items-center">
                    <div class="mt-8 shadow-xl bg-white rounded-lg py-1 px-6 md:w-5/12">
  <h1 class="text-4xl py-4 text-center font-semibold text-blue-900">Proceed To Book Now</h1>

                      
  
                      <form method="post" action="{{route('bookings.store')}}" enctype="multipart/form-data">
                            @csrf
                           
                          <div class="mr-3">
                            <label for="name" class="block text-gray-600 text-sm uppercase">Full Name<span class="text-red-500 required">*</span> </label>
                            <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Full Name" id="name" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 ">
                          </div>

    
                          <div class="mt-3">
                            <label for="address" class="block text-gray-600 text-sm uppercase"> Address<span class="text-red-500">*</span> </label>
                            <input type="text" name="address" value="{{Auth::user()->address}}" id="address" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 " placeholder="Ex:- Sahidchowk">
                          </div>
  
                            <div class="mt-3">
                            <label for="phone" class="block text-gray-600 text-sm uppercase">Mobile Number <span class="text-red-500">*</span> </label>
                                <div class="flex">
                                <input type="text" value="+977" readonly="" class="border-gray-300 w-16 rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 mr-2 ">
                                <input type="text" name="phone" value="{{Auth::user()->phone}}" id="phone" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 ">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="from" class="block text-gray-600 text-sm uppercase"> From <span class="text-red-500">*</span> </label>
                                <input type="text" name="from" id="from" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 " placeholder="Ex:- Sahidchowk">
                            </div>

                            <div class="mt-3">
                                <label for="to" class="block text-gray-600 text-sm uppercase"> To<span class="text-red-500">*</span> </label>
                                <input type="text" name="to"  id="to" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 " placeholder="Ex:- Kathmandu">
                            </div>

                            <div class="mt-3">
                              <label for="phone" class="block text-gray-600 text-sm uppercase">Start Date <span class="text-red-500">*</span> </label>
                              <input type="date" name="start_date" id="start_date" class="form_control  w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500   @if ($errors->has('start_date'))
                                  border-red-500 @endif" value="{{old('start_date')}}" >
                              @error('start_date')
                                  <p class="text-red-400 px-4">
                                      {{$message}}
                                  </p>
                              @enderror
                           </div>

                            <div class="mt-3">
                              <label for="phone" class="block text-gray-600 text-sm uppercase">End Date <span class="text-red-500">*</span> </label>
                              <input type="date" name="end_date" id="end_date" class=" w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500  form_control  @if ($errors->has('end_date'))
                                  border-red-500
                              @endif" value="{{old('end_date')}}" >
                              @error('end_date')
                                  <p class="text-red-400 px-4">
                                      {{$message}}
                                  </p>
                              @enderror
                            </div>

                           

                            <div class="mt-3">
                                <input type="hidden" name="vehicle_id" id="vehicle_id" value="{{$vehicle->id}}" class="border-gray-300 w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-gray-500 " >
                            </div>
  

                            <div class="mt-3 mb-3">
                              <button type="submit" class="rounded-md shadow-md bg-indigo-500 text-white  px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600" > Book Now </button>
                            
                              <input value="Cancel" class="rounded-md shadow-md bg-red-500 text-white w-40 py-2 mt-3 text-center cursor-pointer hover:bg-red-600 px-1" @click="isOpen=false">
                            </div>
  
                      </form>
                    
                    </div>
                </div>
            </div>
        </div>
        @endauth
        
        @guest 
        <a href="{{route('login')}}">  <button   class="rounded-md shadow-md w-full bg-indigo-500 text-white px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600">Book Now</button>
        </a>
        
        @endguest

    </div>

    

</div>

<hr>
<!-- Display review section start -->
      <div data-spy="scroll" data-target="example" data-offset="0"  class="pt-[5%] px-[5%] h-auto"> 
            <div class="row mt-5">
              <h4 class="font-bold text-2xl">Reviews</h4>
              <div class="col-sm-12">
                  @foreach($vehicle->ReviewData as $review)
                  <div class=" review-content mt-6">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="avatar ">
                    <span class="font-weight-bold ml-1 uppercase font-bold">{{$review->name}}</span>
                    <p class="mt-1">
                        @for($i=1; $i<=$review->rating; $i++) 
                        <span><i class="fa fa-star text-warning text-yellow-600"></i></span>
                        @endfor
                        <span class="font ml-2">{{$review->email}}</span>
                    </p>
                    <p class="description ">
                      <h3 class="font-bold"> {{$review->comment}}</h3>
              
                    </p>
                  </div>
                  <hr >
                  @endforeach
              </div>
            </div> 
      </div>



<!-- Review store Section -->



          <div class="bg-green-800 h-[50vh] w-[145vh]  rounded-md mt-[5%] ml-[10%] pr-[5%] mb-7">
            <form method="post" action="{{route('reviews.store')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="vehicle_id" id="vehicle_id" value="{{$vehicle->id}}" >
            
              {{-- <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}"> --}}
                          {{-- <div class="row justify-content-end mb-1">
                              <div class="col-sm-8 float-right">
                                 @if(Session::has('flash_msg_success'))
                                 <div class="alert alert-success alert-dismissible p-2">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> {!! session('flash_msg_success')!!}.
                                 </div>
                                 @endif
                              </div>
                           </div>
              <h1 class="text-white text-2xl font-serif px-5 pt-3 "> Reviews </h1> --}}
              {{-- @if($booking->status === 'completed' ) --}}
              <div>
                  <div class="grid grid-cols-2">
                      <div class=" col-sm-6 mt-4 px-5">
                        <input type="text" name="name" value="" class="form-control bg-inherit border-white rounded-md mt-2 focus:border-violet-500 focus:ring-indigo-300 text-white id="name" placeholder="Name" maxlength="80" required />
                    </div>
                    <div class="col-sm-6  mt-4 px-2">
                        <input type="email" name="email" value="" class="form-control bg-inherit border-white rounded-md mt-2 focus:border-violet-500 focus:ring-indigo-300 text-white" id="email" placeholder="Email" maxlength="80" required />
                      </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="col-sm-6 ">
                      <h1 class="text-white  font-serif px-5 pt-5">Rate</h1>
                      <div class="rate px-5">
                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                        <label for="star1" title="text">1 star</label>
                      </div>
                  </div>
                    <div>
                      <h1 class=" text-white text-2xl font-serif pt-5"> Comment </h1>
                      <textarea name="comment" class="form-control border-gray-300 bg-inherit  rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-white" id="message" cols="50" rows="4" aria-describedby="textHelp" placeholder="Message" autocomplete="off" required></textarea>
                      {{-- @if(Auth::user()->name->$booking->status === 'completed' )  --}}
                      
                      <button type="submit" class="rounded-md shadow-md bg-indigo-500 text-white  px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600" > Submit</button>
                      {{-- @endif --}}
                    </div>
                  </div>
                 
                {{-- @endif --}}
              </div>
          </form>
          </div>


</div>

@endsection
<style>
  .rate {
       float: left;
       height: 50px;
       padding: 0 10px;
       }
       .rate:not(:checked) > input {
       position:absolute;
       display: none;
       }
       .rate:not(:checked) > label {
       float:right;
       width:1em;
       overflow:hidden;
       white-space:nowrap;
       cursor:pointer;
       font-size:50px;
       color:#ccc;
       }
       .rate:not(:checked) > label:before {
       content: '★ ';
       }
       .rate > input:checked ~ label {
       color: #ffc700;
       }
       .rate:not(:checked) > label:hover,
       .rate:not(:checked) > label:hover ~ label {
       color: #deb217;
       }
       .rate > input:checked + label:hover,
       .rate > input:checked + label:hover ~ label,
       .rate > input:checked ~ label:hover,
       .rate > input:checked ~ label:hover ~ label,
       .rate > label:hover ~ input:checked ~ label {
       color: #c59b08;
       }
       .rating-container .form-control:hover, .rating-container .form-control:focus{
       background: #fff;
       border: 1px solid #ced4da;
       }
       .rating-container textarea:focus, .rating-container input:focus {
       color: #000;
       }
  
       * {
       box-sizing: border-box;
       }
       /* Add a gray background color with some padding */
       /* body {
       font-family: Arial;
       padding: 20px;
       background: #f1f1f1;
       } */
       /* Header/Blog Title */
       .header {
       padding: 30px;
       font-size: 40px;
       text-align: center;
       background: white;
       }
       /* Create two unequal columns that floats next to each other */
       /* Left column */
       .leftcolumn {   
       float: left;
       width: 75%;
       }
       /* Right column */
       .rightcolumn {
       float: left;
       width: 25%;
       padding-left: 20px;
       }
       /* Fake image */
       .fakeimg {
       background-color: #aaa;
       width: 100%;
       padding: 20px;
       }
       /* Add a card effect for articles */
       .card {
       background-color: white;
       padding: 20px;
       margin-top: 20px;
       }
       /* Clear floats after the columns */
       .row:after {
       content: "";
       display: table;
       clear: both;
       }
       .avatar {
       vertical-align: middle;
       width: 50px;
       height: 50px;
       border-radius: 50%;
       }
  
       /* End */
   
  </style>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

