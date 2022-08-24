@extends('layouts.app')

@section('content')

@foreach ($events as $event)
<p>{{ $event->title }}</p>
<p>{{ $event->description }}</p>
<p>{{ $event->img }}</p>
<p>{{ $event->spaces }}</p>
<p>{{ $event->event_date }}</p>

<form action="{{ route('delete', ['id' => $event->id]) }}" method="POST">
    @method('delete')
    @csrf

    <button type="submit" onclick="return confirm('Are you sure you want to delete this event? {{ $event->title }}')">Delete</button>
    </button>
</form>


@endforeach

@endsection
