@extends('layouts.app')

@section('title', 'MY EVENTS')

@section('content')

  <div class="my_events_page inline-flex mx-2 ">
    <div class="My Events  ml-0 mr-20 p-3 hover:font-bold">
      <button type="button">My Events</button>
    </div>
    <div class="Past Events ml-20 p-3 hover:font-bold">
      <a href="{{ route('myPastEvents') }}"><button type="button">Past Events</button></a>
    </div>
  </div>

  
  
    @foreach ($eventsOfUser as $eventOfUser) 
    @if ($eventOfUser->event_date > now())
    
      <a href="{{ route('showEvent', $eventOfUser->id) }}" class="flex flex-col items-center mx-20 md:flex-row md:max-w-sm opacity-1 ">
        <img class="object-cover w-full h-200 rounded-t-sm ms:h-auto sm:w-48 sm:rounded-none md:rounded-none sm" src="{{ $eventOfUser->img }}" alt="Event Image">

      <div class="flex flex-col justify-between p-4 leading-normal max-w-screen-md">
        <div class="max-w-screen-sm flex justify-between items-center w-screen bg-green-200 p-2 mt-4 title">
          <h5 class="w-full text-xl font-bold tracking-tight text-gray-900 dark:text-white uppercase">{{$eventOfUser->title}}</h5>
          <button type="submit" class="w-1/3 text-xs p-1 border-4 font-bold border-white text-red-600" id="unsubscribebutton">UNSUBSCRIBE</button>
        </div>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 bg-gray-200 p-2 ">{{ $eventOfUser->description }} </p>
      </div>

      <div class="flex flex-center px-10 spaces  ">
        <p>Places</p>
        <p class="border border-black rounded-xl bg-gray-200 px-4 my-3 ">{{$eventOfUser->spaces}}</p>
      </div>
      </a>
      @endif
    @endforeach
  
@endsection
