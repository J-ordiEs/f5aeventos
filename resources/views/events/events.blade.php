@extends('layouts.app') 
@section('content')
<main class="flex flex-col items-center justify-center">
    @foreach ($events as $event)
    <article class="justify-center text-center py-5 w-10/12">
        <header class="flex-none bg-black text-white">
            <h3>{{ $event->title }}</h3>
            <h4>{{ $event->time }}</h4>
        </header>
        <figure class="text-white">
            <img src="https://picsum.photos/300" alt="Event thumbnail" class="">
            <figcaption class="bg-black bg-opacity-75">{{ $event->capacity }}</figcaption>
        </figure>
    </article>
    @endforeach
</main>
@endsection