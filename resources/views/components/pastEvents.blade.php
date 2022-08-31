<div id="box" class="grid md:grid-cols-3 justify-items-center">
@foreach ($events as $event)
@if ($event->event_date < now())
<div class="max-w-xs m-4 bg-white rounded-lg border border-gray-200 shadow-md  dark:border-gray-700">
    <div class="relative"> 
      <a href="{{ route('showEvent', $event->id) }}">
      <button class="absolute p-1 w-full flex justify-end" type="button">
        <img src="{{ asset('img/information.png') }}" alt="information" class="w-9 h-auto items-center p-0">
      </button>
      </a>
      <a href="#">
        <img class="rounded-t-lg p-0" src="{{ $event->img }}" alt="" />
      </a>
    </div> 
    <div class="p-3">
        <a href="#">
          <h2 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-black">{{ $event->title }}</h2>
        </a>
        <p class="mb-1  text-black-700 dark:text-black-400">{{ $event->event_date }}</p>
        <p class="mb-1  text-black-700 dark:text-black-400">{{ $event->spaces }} cupos</p>
        <div class="d-flex">
          <a href="#" class="me-auto items-center py-2 px-3 ml-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-red-800">
              Subscribe
          </a> 
        </div>
    </div>
</div>
@endif
@endforeach
</div>
