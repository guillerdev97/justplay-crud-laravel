@extends('layouts.app')

@section('content')

<!-- <h2 class="text-center">Listado de Eventos</h2> -->

<a href="{{ route('home') }}">Incoming Events</a>
<p>Past Events</p>

<x-pastEvents :events="$events"></x-pastEvents>

@endsection
