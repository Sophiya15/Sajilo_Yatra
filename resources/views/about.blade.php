@extends('layouts.website')

@section('main')
<div class="bg-white">
<div class="w-full h-[85vh] abt shadow-lg"> 
    
    <h1 class="text-6xl  pt-[10%] font-bold px-7 font-sans  text-emerald-600"> About Us</h1>
    <p class="text-3xl text-teal-400 font-bold px-7 mt-3"><a href="{{route('welcome')}}"> Home</a> → <a href="{{route('about')}}"> About Us </a></p>
    <h2 class="text-4xl  pt-[1%] font-bold px-7 font-sans  text-black hover:text-violet-600 cursor-pointer"> Your friendly car rental providers. </h2>
</div>

<div class="bg-white">
    <h1 class="px-[20%] text-4xl pt-[6%] text-violet-900 "> Best valued deals you will ever find for your every need </h1>
    <p class="px-[20%] text-2xl pt-[3%]">Hire a car for a hassle free trip a trip whether for leisure or business, is an integral part of our life. We all want our excursion to be pleasing and hassle free. Let us see how to make your trip relaxing and comfortable while travelling in Nepal.</p>

    <p class="px-[20%] text-2xl pt-3">Nepal is an incredible place for excursion. It gives a wholesome holiday experience because of its diversity. It has everything the peaceful mountains and hills in the Eastern and western part, vast jungle safari trip in chitwan in the south West, wonderful flora faunas and royan bangal tiger in bardia in the far western. As well as Buddha’s birth places lumbini. You can find a new meaning to life with your trip to this wonderful land. If you want to discover the place in a better and soothing way then you should rent or hire a car for your day to day outing here. You can enjoy the scenic charm of Nepal with Hire car Nepal. You can get the freedom to go at your own pace, and choice with car hires Nepal. </p>
</div>

    <h1 class="pt-[10%] px-[30%] font-bold text-transparent text-4xl bg-clip-text b bg-gradient-to-r from-purple-400 to-black"> Customer Satisfaction Is Our Motto. </h1>
<div class="grid grid-cols-2 w-full bg-white pt-[3%]">

    <div>
        <img src="{{asset('images/19.jpg')}}">
    </div>

    <div>
        <h1 class="px-7 pt-[10%] font-bold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-emerald-400 to-violet-900">The Best Car Rental Service Providers </h1>
        <p class="px-7 pt-5  text-3xl font-sans"> We assure you to provide the best car rental services in the town by providing you the well maintained cars for your wonderful journey... Our car rental services comes with driver, fuels, parking fee so that you don’t have to pay any extra amount. </p>
    </div> 

</div>

</div>
  
@endsection