@extends('layouts.app')

@section('content')

<h2 class="text-center">Eventos destacados</h2>

<x-carousel :events="$events"></x-carousel>

@if(Auth::check() && Auth::user()->isAdmin)
<a href="{{ route('createEvent') }}"><button class="btn btn-primary" >Add new event</button></a>
@endif

<!-- <h2 class="text-center">Listado de Eventos</h2> -->

<p>Incoming Events</p>
<a href="{{ route('pastEvents') }}">Past Events</a>

<x-currentEvents :events="$events"></x-currentEvents>

@endsection
