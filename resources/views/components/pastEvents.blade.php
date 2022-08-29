<div id="box" class="grid md:grid-cols-3 justify-items-center">
@foreach ($pastEvents as $pastEvent)
<div class="max-w-xs m-4 bg-white rounded-lg border border-gray-200 shadow-md  dark:border-gray-700">
    <div class="relative"> 
      <a href="{{ route('showEvent', $pastEvent->id) }}">
      <button class="absolute p-1 w-full flex justify-end" type="button">
        <img src="{{ asset('img/information.png') }}" alt="information" width="30" height="30">
      </button>
      </a>
      <a href="#">
        <img class="rounded-t-lg" src="{{ $pastEvent->img }}" alt="" />
      </a>
    </div> 
    <div class="p-3">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $pastEvent->title }}</h5>
        </a>
        <p class="mb-3 font-semibold text-black-700 dark:text-black-400">{{ $pastEvent->event_date }}</p>
        <p class="mb-3 font-semibold text-black-700 dark:text-black-400">{{ $pastEvent->spaces }} cupos</p>
        <div class="d-flex">
          <a href="#" class="me-auto items-center py-2 px-3 ml-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Subscribe
          </a>
          
         <!--  @if(Auth::check() && Auth::user()->isAdmin)
          <a href="#">
          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
            <img src="{{ asset('img/favorite.png') }}" alt="edit event" width="16" height="16">
          </button>
          </a>
          @endif

          @if(Auth::check() && Auth::user()->isAdmin)
          <a href="{{ route('editEvent', ['id' => $event->id])}}">
          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-green-800 dark:hover:bg-blue-700 dark:focus:ring-green-800">
            <img src="{{ asset('img/edit.png') }}" alt="edit event" width="16" height="16">
          </button>
          </a>
          @endif

          @if(Auth::check() && Auth::user()->isAdmin)
          <form action="{{ route('delete', ['id' => $event->id]) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="focus:outline-none  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  px-2 py-2 mr-1  dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-red-900" onclick="return confirm('Are you sure you want to delete this event? {{ $event->title }}')">
              <img src="{{ asset('img/delete.png') }}" alt="delete event" width="16" height="16">
            </button>
          </form>
          @endif -->
          
        </div>
    </div>
</div>
@endforeach
</div>
