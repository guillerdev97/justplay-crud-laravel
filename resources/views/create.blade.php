@extends('layouts.app')

@section('content')

<h2 class="cardTitle">Create a new event</h2>
<form class="justify-content-center" action="{{ route('storeEvent') }}" method="post">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="title"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <input class="form-control" type="text" name="img">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Spaces</span>
        <input class="form-control" type="text" name="spaces">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
        <input class="form-control" type="text" name="event_date">
    </div>

    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('home') }}">Cancel</a>
    </div>

    <div class="btnCreate">
        <button type="submit" class="btn btn-outline-success">Create</button>
    </div>
</form>


@endsection
