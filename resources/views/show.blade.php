@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css')}}">
@section('content')

<section class="cardSection">
   <div class="bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" id="card">
      <div class="rounded-t-lg" id="imgDiv" style="background-image: url('{{ $event->img }}'); opacity: 0.7;">
         <div class="timeSpaces">
            <div class="fs-4 text-white">2 days out</div>
            <div class="fs-4 text-white">2 spaces</div>
         </div>
      </div>
      <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark" id="title">{{ $event->title }}</h5>
         <p class="mb-4 font-normal text-black-700 dark:text-black-400" id="description">{{ $event->description }}</p>
         <div class="buttons">
         <a href="#"  class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Join
         </a>
         <a href="#" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Back
         </a>
         <a href="#" class="inline-flex items-center py-2 px-1 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Unsuscribe
         </a>
         </div>
      </div>
   </div>
</section>

@endsection