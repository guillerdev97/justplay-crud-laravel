@extends('layouts.app')

@section('title', 'PAST EVENTS')

@section('content')

<div class="my_events_page inline-flex mx-2 ">
  <div class="My Events  ml-0 mr-20 p-3 hover:font-bold">
    <a href="{{ route('myEvents') }}"><button type="button">My Events</button></a>
  </div>
  <div class="Past Events ml-20 p-3 hover:font-bold">
    <button type="button">Past Events</button>
  </div>
</div>

<div>
  @foreach ($eventsOfUser as $eventOfUser)
  @if ($eventOfUser->event_date < now()) <a href="{{ route('showEvent', $eventOfUser->id) }}" class="flex flex-col items-center mx-20 md:flex-row md:max-w-sm opacity-1 ">
    <img class="object-cover w-full h-200 rounded-t-sm ms:h-auto sm:w-48 sm:rounded-none md:rounded-none sm" src="{{ $eventOfUser->img }}" alt="Event Image">

    <div id="paragraph" class="flex flex-col justify-between p-4 leading-normal max-w-screen-md">
      <div class="max-w-screen-sm flex justify-between items-center w-screen bg-gray-400 p-2 mt-4 title">
        <h5 class="w-full text-xl font-bold tracking-tight text-gray-900  uppercase">{{$eventOfUser->title}}</h5>
      </div>
      <p class="mb-3 font-normal text-gray-700  bg-gray-200 p-2 "> {{ $eventOfUser->description }}</p>
    </div>

    <div id="spaces" class="flex flex-center px-10">
      <p>Spaces</p>
      <p class="border border-black rounded-xl bg-gray-200 px-4 my-3 ">{{$eventOfUser->spaces}}</p>
    </div>
    </a>
    @endif
    @endforeach
</div>
@endsection