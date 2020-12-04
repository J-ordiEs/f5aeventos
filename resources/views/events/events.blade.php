@extends('layouts.app') 
@section('content')
<main class="flex flex-col items-center justify-center md:flex-row flex-wrap gap-5">
    @foreach ($events as $event)
    <a href="{{ route('events.event', $event) }}">
        <article class="justify-center text-center my-10 h-72 w-10/12 pl-8 ml-3 ">
        <header class="h-1/5 bg-black text-white">
            <h3>{{ $event->title }}</h3>
            <h4>{{ $event->time }}</h4>
        </header>
        <figure class="h-4/5 text-white">
            <img src="https://picsum.photos/500" alt="Event thumbnail" class="">
            <figcaption class="bg-black bg-opacity-75">{{ $event->capacity }}</figcaption>
        </figure>
    </article></a>
    @endforeach
</main>
@stop