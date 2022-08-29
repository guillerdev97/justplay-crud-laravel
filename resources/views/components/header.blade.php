<header>

    <a href="{{ url('/') }}">
    <div class="left-header" >
        
            <img src="{{URL::asset('/img/icono.png')}}" />
            <img class="h-50 p-2" src="{{URL::asset('/img/justplay.png')}}" />
    </div> 
    </a>   
    
    <h1 class="text-white fs-2 justify-content-center">@yield('title', 'FIND YOUR SPORTS PARTNER')</h1>

    <div class="right-header">
        <img src="{{URL::asset('/img/myevents.png')}}" />
        <img src="{{URL::asset('/img/register.png')}}" />
        <img src="{{URL::asset('/img/login.png')}}" />
    </div>



    

</header>
