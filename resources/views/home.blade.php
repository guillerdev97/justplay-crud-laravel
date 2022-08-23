@extends('layouts.app')

@section('content')

@foreach ($events as $event)
<p>{{ $event->name }}</p>
<p>{{ $event->description }}</p>
<p>{{ $event->img }}</p>
<p>{{ $event->spaces }}</p>
<p>{{ $event->event_date }}</p>   
@endforeach

@endsection
