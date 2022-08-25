@extends('layouts.app')

@section('content')

<section>
<form action="{{ route('updateEvent', $event-> id) }}" method="post">
    @method('PATCH')
    @csrf
    <div class="left">
        <div>
            <label for="title">Event name</label><br>
            <input type="text" name="title" id="title" value="{{$event->title}}">
        </div>

        <div>
            <label for="event_date">Event date</label><br>
            <input type="text" name="event_date" id="event_date" value="{{$event->event_date}}">
        </div>

        <div>
            <label for="description">Event description</label><br>
            <textarea name="description" id="description" class="textarea" >{{$event->description}}</textarea>
        </div>
    </div>

    <div class="right">
        <div>
            <label for="">Insert image 📷</label><br>
            <input type="text" name="img" id="img" value="{{$event->img}}">
        </div>

        <img src="https://mejorconsalud.as.com/wp-content/uploads/2018/06/saludo-sol-yoga.jpg" alt="">

        <div>
            <label for="">Spaces</label>
            <input type="text" name="spaces" class="spaces" value="{{$event->spaces}}">
        </div>

        <div class="buttons">
            <div>
                <a href="{{ route('home') }}">Cancel</a>
            </div>

            <div>
                <input type="reset" value="Reset">
            </div>

            <div>
                <button type="submit">Edit</button>
            </div>
        </div>
</form>
</section>

@endsection