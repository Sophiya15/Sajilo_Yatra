@extends('layouts.website')

@section('main')

<div class="w-full h-[85vh] ser shadow-lg"> 
    <h1 class="text-6xl text-center pt-[13%] font-bold font-sans  text-teal-600"> Services we provide</h1>
    <p class="text-3xl text-white px-[41%] mt-3"> <a href="{{route('welcome')}}"> Home →<a href="{{route('services')}}"> Services </a></p>
    </div>

     
<div class="grid grid-cols-2 pt-[5%]">
 
    <div>
        <h1 class="pt-[10%] px-[5%] font-bold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-violet-900 to-black"> We Are Trusted Name in Car Renting Services </h1>
        <p class="pt-3 px-[5%] py-5 font-serif text-2xl">We assure you to provide the best car rental services in the town by providing you the well maintained cars for your wonderful journey... Our car rental services comes with driver, fuels, parking fee so that you don’t have to pay any extra amount..... Nepal is an incredible place for excursion. It gives a wholesome holiday experience because of its diversity. It has everything the peaceful mountains and hills in the Eastern and western part, vast jungle safari trip in chitwan in the south West, wonderful flora faunas and royan bangal tiger in bardia in the far western. 
            <br/> <br/>As well as Buddha’s birth places lumbini. You can find a new meaning to life with your trip to this wonderful land. If you want to discover the place in a better and soothing way then you should rent or hire a car for your day to day outing here. You can enjoy the scenic charm of Nepal with Hire car Nepal. You can get the freedom to go at your own pace, and choice with car hires Nepal.</p>
    </div>

    <div class="mt-[15%]">
        <img src="{{asset('images/10.jpg')}}" >
    </div>
</div>



    <div>
        <h1 class="text-5xl m-3 pt-[5%] text-center font-sans"> WHY CHOOSE US </h1>
        <p class="text-center text-slate-400"> No Hidden Charges  </p>
        <div class="grid grid-cols-4  py-[3%]">

            <div class="shadow-lg rounder-lg border-2 border-white pt-5 m-3 bg-yellow-300"> 
                <i class="far fa-thumbs-up px-5 text-2xl"></i>
                <b class="text-2xl font-serif"> Outstanding Services </b>
                <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
            </div>
    
            <div class="rounded-lg shadow-lg border-2 border-white pt-5 m-3 bg-yellow-300"> 
                <i class="fas fa-award px-5 text-2xl"></i>
               <b class="text-2xl font-serif"> Quality Assurance </b>
                <p class="px-5 p-6">Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
            </div>
    
            <div class="rounded-lg  shadow-lg border-2 border-white pt-5 m-3 bg-yellow-300"> 
                <i class="fas fa-phone-alt px-5 text-2xl"></i>
                  <b class="text-2xl font-serif">  24 Hours Supports </b>
                <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
            </div>

            <div class="rounded-lg shadow-lg border-2 border-white pt-5 m-3 bg-yellow-300">
                <i class="fas fa-car px-5 text-2xl"></i>
                <b class="text-2xl font-serif"> Well Maintained Cars</b>
                <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
            </div>
        </div>
    
        
    </div>
    

@endsection