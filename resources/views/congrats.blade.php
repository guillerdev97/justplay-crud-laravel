@extends('layouts.app')

@section('content')


    
<h2 class="congrats-message" style="font-size: 60px;">
    Congrats! You are subscribed to {{ $event->title }} event!
</h2>
<p style="text-align: center; font-size: 32px;">Date: {{ $event->event_date }}</p>

@endsection
