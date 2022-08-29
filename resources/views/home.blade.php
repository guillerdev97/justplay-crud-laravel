@extends('layouts.app')
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> -->
@section('content')

<h2 class="text-center">Eventos destacados</h2>
<!--Carrousel-->
<div id="controls-carousel" class="relative m-4" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96" id="slider">
      @foreach ($events as $event)
        <figure class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <a href="{{ route('showEvent', $event->id) }}">
              <img src="{{ $event->img }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
            <figcaption class="absolute w-full bottom-6 px-4 text-lg text-white">
              <h4>{{ $event->title }}</h4>
              <div class="flex w-full justify-between">
                <p>{{ $event->event_date }}</p>
                <p>{{ $event->spaces }} cupos</p>
              </div>
            </figcatpion>
        </figure>
      @endforeach
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>




<!--Seccion listado de favoritos-->
<h2 class="text-center">Listado de Eventos</h2>

@if(Auth::check() && Auth::user()->isAdmin)
<a href="{{ route('createEvent') }}"><button class="btn btn-primary" >Add new event</button></a>
@endif
<div id="box" class="grid md:grid-cols-3 justify-items-center">
@foreach ($events as $event)
<div class="max-w-xs m-4 bg-white rounded-lg border border-gray-200 shadow-md  dark:border-gray-700">
    <div class="relative"> 
      <a href="{{ route('showEvent', $event->id) }}">
      <button class="absolute p-1 w-full flex justify-end" type="button">
        <img src="{{ asset('img/information.png') }}" alt="information" width="30" height="30">
      </button>
      </a>
      <a href="#">
        <img class="rounded-t-lg" src="{{ $event->img }}" alt="" />
      </a>
    </div> 
    <div class="p-3">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $event->title }}</h5>
        </a>
        <p class="mb-3 font-semibold text-black-700 dark:text-black-400">{{ $event->event_date }}</p>
        <p class="mb-3 font-semibold text-black-700 dark:text-black-400">{{ $event->spaces }} cupos</p>
        <div class="d-flex">
          <a href="#" class="me-auto items-center py-2 px-3 ml-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Subscribe
          </a>
          
          @if(Auth::check() && Auth::user()->isAdmin)
          <a href="#">
          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
            <img src="{{ asset('img/favorite.png') }}" alt="edit event" width="16" height="16">
          </button>
          </a>
          @endif

          @if(Auth::check() && Auth::user()->isAdmin)
          <a href="{{ route('editEvent', ['id' => $event->id])}}">
          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-green-800 dark:hover:bg-blue-700 dark:focus:ring-green-800">
            <img src="{{ asset('img/edit.png') }}" alt="edit event" width="16" height="16">
          </button>
          </a>
          @endif

          @if(Auth::check() && Auth::user()->isAdmin)
          <form action="{{ route('delete', ['id' => $event->id]) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="focus:outline-none  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  px-2 py-2 mr-1  dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-red-900" onclick="return confirm('Are you sure you want to delete this event? {{ $event->title }}')">
              <img src="{{ asset('img/delete.png') }}" alt="delete event" width="16" height="16">
            </button>
          </form>
          @endif
          
        </div>
    </div>
</div>
@endforeach
</div>

@endsection
