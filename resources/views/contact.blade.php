@extends('layouts.website')


@section('main')
@include('sweetalert::alert')


    <div class="w-full h-[65vh] con">
        <h1 class="text-6xl text-center pt-[13%] font-bold font-sans  text-lime-400"> Contact Us!</h1>
        <p class="text-3xl text-white px-[40%] mt-3"> <a href="{{route('welcome')}}"> Home →<a href="{{route('contact')}}"> Contact Us </a></p>
    </div>


<h1 class="px-[20%] pb-5 pt-[5%] font-bold text-3xl bg-slate-100"> Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you. </h1>
<div class="grid grid-cols-2 px-[5%] font-bold text-3xl bg-slate-100 shadow-md">


    <div class="cont text-white pt-[5%] px-[15%]">
        <form method="post" action="{{route('feedbacks.store')}}" enctype="multipart/form-data">
            @csrf
          <div class="mr-3">
            <label for="name" class="block text-white text-2xl uppercase pt-[5%]">Full Name<span class="text-red-500 text-sm required">*</span> </label>
            <input type="text" name="name" value="" placeholder="Full Name" id="name" class=" bg-inherit w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-white  @if ($errors->has('name'))
            border-red-500 @endif" value="{{old('name')}}" >
        @error('name')
            <p class="text-white font-serif px-2 text-sm">
                {{$message}}
            </p>
        @enderror
          </div>

          <div class="mr-3">
            <label for="email" class="block text-white text-2xl uppercase pt-4">Email<span class="text-red-500 required">*</span> </label>
            <input type="email" name="email" value="" placeholder="Email here" id="email" class="border-gray-300 bg-inherit w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-white

            @if ($errors->has('email'))
             @endif" value="{{old('email')}}" >
        @error('email')
            <p class="text-white font-serif px-2 text-sm">
                {{$message}}
            </p>
        @enderror
          </div>

          <div class="mt-3">
            <label for="phone" class="block text-white text-2xl uppercase pt-4">Mobile Number <span class="text-red-500">*</span> </label>
                <div class="flex">
                <input type="text" value="+977" readonly="" class="border-gray-300 w-16 rounded-md mt-2 bg-inherit focus:border-indigo-300 focus:ring-indigo-300 text-whitemr-2 ">
                <input type="text" name="phone"  value="" id="phone" class="border-gray-300 bg-inherit w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-white">
                </div>
            </div>

            <div class="my-2 mt-5">
                <label for="message" class="block text-white text-2xl uppercase pt-4">Message<span class="text-red-500 required">*</span> </label>
                <textarea name="message" class="form-control border-gray-300 bg-inherit w-full rounded-md mt-2 focus:border-indigo-300 focus:ring-indigo-300 text-white" id="message" cols="50" rows="4" aria-describedby="textHelp" placeholder="Message" autocomplete="off"></textarea>
            </div>
            <div class="mt-3 mb-3">
                <button type="submit" class="rounded-md shadow-md bg-indigo-500 text-white  px-10 py-2 mt-3 cursor-pointer hover:bg-indigo-600" > Submit</button>
            </div>
        </form>

    </div>


    <div class="text-center pt-[12%]">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Gaindakot, Nawalpur</p>
                </li>

                <li><i class="fas fa-phone-alt mt-[5%] fa-2x"></i>
                    <p> +977 9864452090</p>
                </li>

                <li><i class="fas fa-envelope mt-[5%] fa-2x"></i>
                    <p>timilsena.sonia@gmail.com</p>
                </li>
            </ul>
    </div>
</div>





@endsection
