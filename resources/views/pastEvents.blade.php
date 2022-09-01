@extends('layouts.app')

@section('content')


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
