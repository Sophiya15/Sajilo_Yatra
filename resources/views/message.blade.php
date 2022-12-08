@if($errors->any())
    @foreach($errors as $error)
        <div class="dismissible fixed right-8 top-4">
            <div class="w-auto rounded-md p-2 shadow-lg bg-gray-100 ">
                <p class="border-l-4 border-red-400 text-red-900 font-bold px-4" >
                    {{$error}}
                </p>
            </div>
        </div>
        <script>
            $(function(){
                setTimeout(function() {
                    $(".dismissible").fadeOut(1000)
                }, 2000);
            });
        </script>
    @endforeach
@endif

@if(Session::has('success'))
<div class=" dismissible fixed right-8 top-4">
    <div class="w-auto rounded-md p-2 shadow-lg bg-indigo-500 ">
        <p class="border-l-4 border-r-4 border-indigo-400 text-white text-2xl font-bold px-4" >
            {{session('success')}}
        </p>
    </div>
</div>
<script>
$(function(){
    setTimeout(function() {
        $(".dismissible").fadeOut(1000)
    }, 2000);
});
</script>

@endif