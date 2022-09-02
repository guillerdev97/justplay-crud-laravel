@extends('layouts.app')

@section('content')
<?php
header('refresh:2;url=/');
?>
<h2 class="congrats-message">
    Congrats! You are subscribed to {{ $event->title }} event!
</h2>
<p class="date_info"> Date: {{ $event->event_date }}</p>

@endsection
