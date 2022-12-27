
@extends('layouts.website')

@section('css')

     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('main')



<!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($slideshows as $slideshow)
                <div class="swiper-slide relative">
                    <img src="/storage/{{$slideshow->photopath}}" class="h-[100vh] w-full">
                    <p class="absolute text-5xl top-[50%] text-left font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-slate-600 px-9 w-full py-2">
                        THE ROYAL ESSENCE OF JOURNEY
                        <h1 class=" absolute top-[58%] px-10 py-3 font-extrabold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-green-900 to-purple-300"> RELAXED JOURNEY EVER </h1>
                        <p class="absolute top-[66%] text-xl text-white px-10 text-justify"> We offer you the delightful Journey within affordable prices.</p>
                    </p>
                </div>
            @endforeach
        
        
        </div>
    </div>
<!-- swipper close -->
<div> 
    <h1 class="text-center pt-[10%] font-bold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-teal-400 to-slate-600"> Welcome To SajiloYatra </h1>
    <p class="text-2xl px-[20%] pt-5 pr-[15%]"> First of all thank you visiting our sites. Travelling is an amazing way to learn a lot of things in life. A lot of people around the world travel every year to many places. With the help of our car rental services you can book your own car and travel to various palces of nepal. We provide you the best cars within the affordable prices thats makes lifestyle even easier.. </p>
</div>      


<div>
    <h1 class="text-5xl m-3 pt-[10%] text-center"> What services we offer to our clients. </h1>
    <p class="text-center text-slate-400"> Who are in extremely in love with eco friendly system. </p>
    <div class="grid grid-cols-3 py-[5%] bg-slate-100 gap-20">
        <div class="rounded-lg shadow-lg"> 
            <i class="fas fa-user px-5"></i>
            <b class="text-2xl font-serif"> Expert Technicians </b>
            <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>

        <div class="rounded-lg shadow-lg"> 
            <i class="fas fa-gem px-5"></i>
           <b class="text-2xl font-serif"> Highly Recommended </b>
            <p class="px-5 p-6">Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>

        <div class="rounded-lg shadow-lg"> 
            <i class="fa fa-cogs px-5" aria-hidden="true"></i>
              <b class="text-2xl font-serif">  Technical Skills </b>
            <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>
    

    
        <div class="rounded-lg shadow-lg">
            <i class="fas fa-comments px-5"></i>
            <b class="text-2xl font-serif"> Positive Reviews </b>
            <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>

        <div class="rounded-lg shadow-lg"> 
            <i class="fas fa-phone-alt px-5"></i>
              <b class="text-2xl font-serif">  Great Support </b>
            <p class="px-5 p-6"> Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>

        <div class="rounded-lg shadow-lg"> 
            <i class="fas fa-user-tie px-5"></i>
           <b class="text-2xl font-serif"> Professional Service </b>
            <p class="px-5 p-6">Usage of the Internet is becoming more common due to rapid advancement of technology and power. </p>
        </div>
    
</div>
</div>



<h1 class="text-center mt-[5%] text-3xl font-serif text-yellow-500"> How SajiloYatra Works </h1>
<div class="grid grid-cols-2 pt-5">

<div >
  
    <img src="{{asset('images/19.jpg')}}">
  
</div>

<div class="mt-[5%] ml-3">
  <div>
  <div class="flex flex-row">
  <p class=" text-white bg-violet-600 rounded-full w-10 h-10 text-center pt-2 mx-5">1 </p>
     <p class="text-black px-2 pt-2 font-mono">  First of all visit our site </p> 
  </div>
  <p class="text-black mx-[12%]"> You should first browse our site for effective journey. </p>
  </div>

  <div class="mt-4">
    <div class="flex flex-row">
    <p class=" text-white bg-violet-600 rounded-full w-10 h-10 text-center pt-2 mx-5">2 </p>
       <p class="text-black px-2 pt-2 font-mono">  Select Your Desired Car</p> 
    </div>
    <p class="text-black mx-[12%]"> You can Select the brand and the cars you want for your trip. </p>
    </div>
    <div>
      
      <div class="mt-4">
        <div class="flex flex-row">
        <p class=" text-white bg-violet-600 rounded-full w-10 h-10 text-center pt-2 mx-5">3 </p>
           <p class="text-black px-2 pt-2 font-mono"> Click On Book Button</p> 
        </div>
        <p class="text-black mx-[12%]"> After you click on the button then you can select the date when you want the car.. </p>
        </div>
        
        <div class="mt-4">
          <div class="flex flex-row">
          <p class=" text-white bg-violet-600 rounded-full w-10 h-10 text-center pt-2 mx-5">4 </p>
             <p class="text-black px-2 pt-2 font-mono"> Hit The Road</p> 
          </div>
          <p class="text-black mx-[12%]"> Then you can enjoy your trip.. </p>
          </div>
</div>

</div>

</div>







        <div class="bg-gray-200 py-16">
            <div class="w-11/12 mx-auto">
                <p class="font-bold font-serif text-5xl text-center py-8">Choose your desired car</p>
                <div class="grid md:grid-cols-4  grid-cols-1 px-4 gap-20">
                    
                    @foreach ($vehicles as $vehicle)
                        <div class="rounded-md shadow-lg hover:shadow-xl flex-col scale overflow-hidden bg-white">
                          
                            <a href="{{route('productview',$vehicle->id)}}">   
                                <div class="flex justify-center group">
                                     <img src="/storage/{{$vehicle->photopath1}}" class="group-hover:scale-110 transition-all duration-700 w-full h-40 ">
                                 </div>
                                </a>

                            <div class="flex justify-between px-2 py-1">
                                <h1 class="font-semibold  text-lg ">
                                    <a href="{{route('productview',$vehicle->id)}}">{{$vehicle->name}}</a>
                                </h1>
                            </div>  
                        </div> 
                    @endforeach
                    
                </div>   
            </div>    
        </div>


       

        <div class="grid grid-cols-2 pt-8 pb-5">
            <div> 
                <img src="{{asset('images/5.jpg')}}" class="rounded-full shadow-lg">
             </div> 
            <div>
                <h1 class="px-7 pt-[20%]  pr-[20%] text-5xl font-sans"> Globally Connected by Large Network </h1>
                <p class="px-7 pr-[20%] pt-3 pb-2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, velit dignissimos eaque est fugit at culpa numquam tempora repellendus, accusantium, sapiente iusto. Quasi qui alias accusamus repudiandae vitae voluptate inventore. </p>
                <a href="{{route('contact')}}" class="px-10 py-2 m-5 bg-teal-600 text-black rounded-full hover:bg-black hover:text-white cursor-pointer"> 
                    Get Details
                </a>
            </div> 
        </div>
    
    <div class="w-full h-[65vh] imgs"> 
        <h1 class="text-5xl text-center pt-[15%] font-bold font-sans shadow-lg text-lime-400 hl"> Experience Great Support </h1>
        <p class="text-2xl text-white px-[10%] mt-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore nostrum similique quam quas aliquid dolore quo doloribus nisi accusantium. Dolores iusto velit iste omnis similique eos itaque laborum distinctio incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos inventore et doloribus quasi? Incidunt veritatis ipsa labore doloremque nemo! Vel praesentium, culpa ipsam distinctio magni consequatur quasi et tenetur molestias! </p>
    </div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>

@endsection
