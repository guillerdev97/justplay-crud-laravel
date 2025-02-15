<!--Carrousel-->
<div id="controls-carousel" class="relative m-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96" id="slider">
      
      @foreach ($carouselEvents as $event)
      @if($event->carousel == 1)
        <figure class="duration-1500 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <a href="{{ route('showEvent', $event->id) }}">
              <img src="{{ $event->img }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 p-0" alt="...">
            </a>
            <figcaption class="absolute w-full bottom-6 px-4 text-xl text-white">
              <h2 class="text-2xl ml-8">{{ $event->title }}</h2>
              <div class="flex w-full justify-between">
                <p class="ml-8">{{ $event->event_date }}</p>
                <p class="mr-8">{{ $event->spaces }} cupos</p>
              </div>
            </figcatpion>
        </figure>
      @endif
      @endforeach
      
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>