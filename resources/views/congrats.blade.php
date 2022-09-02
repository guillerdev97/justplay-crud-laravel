@extends('layouts.app')

@section('content')

<h2 class="congrats-message">
    Congrats! You are subscribed to {{ $event->title }} event!
</h2>
<p> Date: {{ $event->event_date }}</p>

@endsection
