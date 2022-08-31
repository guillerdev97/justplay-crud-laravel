@extends('layouts.app')

@section('title', 'CREATE EVENT')

@section('content')

<form id="createEditForm" action="{{ route('storeEvent') }}" method="post">
    @csrf
    <div class="leftSide">
        <div class="problemBox">
            <label id="problemLabel" for="title">Event name</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="event_date">Event date</label><br>
            <input type="text" name="event_date" id="event_date">
        </div>

        <div>
            <label for="description">Event description</label><br>
            <textarea name="description" id="description" class="textarea"></textarea>
        </div>
    </div>

    <div class="rightSide">
        <div class="imageBox">
            <label for="">Insert image 📷</label><br>
            <input type="text" name="img" id="img" placeholder="Insert an url">
        </div>

        <img src="https://mejorconsalud.as.com/wp-content/uploads/2018/06/saludo-sol-yoga.jpg" alt="">

        <div class="flexCarousel">
            <div class="spaces">
                <label for="">Spaces</label>
                <input type="text" name="spaces">
            </div>
            <div id="carousel" class="form-check form-switch sliderCB">
                <label class="form-check-label" for="flexSwitchCheckChecked">Carousel</label>
                <input class="form-check-input" name="carousel" type="checkbox">

            </div>
        </div>



        <div class="buttons">
            <div>
                <a href="{{ route('home') }}"><button class="btn btn-danger fs-4" style="background-color: #dc3545; border: none;">Cancel</button></a>
            </div>

            <div>
                <button type="reset" class="btn btn-primary fs-4" style="background-color: #2775cf; border: none;">Reset</button>
            </div>

            <div>
                <button type="submit" class="btn btn-success fs-4" style="background-color: #24bd4c; border: none;">Create</button>
            </div>
        </div>
</form>

@endsection