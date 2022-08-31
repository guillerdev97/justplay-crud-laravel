@extends('layouts.app')

@section('content')
<section class="m-10 grid justify-items-center text-3xl">
  <h2 class="text-center ">WHAT IS COMMING!</h2>
  <div class="bg-red-600 h-1 w-20"></div>
</section>



@if(Auth::check() && Auth::user()->isAdmin)
<a href="{{ route('createEvent') }}" class="flex item-center m-4 ">
  <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-green-800 dark:hover:bg-blue-700 dark:focus:ring-green-800">
    <img src="{{ asset('img/add.png') }}" alt="edit event" class="w-5 h-auto p-0">
  </button>
  <p class="m-2 text-lg">Add New Event</p>
</a>
@endif

<section class="m-6 grid justify-items-center text-2xl">
  <h2 class="text-center ">EVENT LIST</h2>
  <div class="bg-green-600 h-1 w-20"></div>
</section>
<section class="flex m-4">
  <a href="{{ route('home') }}">
    <h2 class="m-2 text-2xl">INCOMING EVENTS</h2>
  </a>
  <a href="{{ route('pastEvents') }}">
    <h2 class="m-2 text-2xl underline">PAST EVENTS</h2>
  </a>
</section>

<x-pastEvents :events="$events"></x-pastEvents>

@endsection
