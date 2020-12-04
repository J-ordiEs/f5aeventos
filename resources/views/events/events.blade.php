@extends('layouts.app')
@section('content')
    <section id="sSpecial" class="bg-pink-200 flex flex-col justify-center items-center text-center md:flex-row flex-wrap">
        <h2 class="text-xl mt-2 font-bold bg-white w-full bg-opacity-75 py-1">Special Events</h2>
        @foreach ($events as $event)
            @include('events.eventThumbnail')
        @endforeach
    </section>
    <section id="sComing" class="flex flex-col justify-center items-center text-center md:flex-row flex-wrap">
    <h2 class="text-xl mt-2 font-bold bg-white w-full bg-opacity-75 py-1">Coming Events</h2>

        @foreach ($events as $event)
            @include('events.eventThumbnail')
        @endforeach
    </section>
    <section id="sPast" class="bg-yellow-100 flex flex-col justify-center items-center text-center md:flex-row flex-wrap">
    <h2 class="text-xl mt-2 font-bold bg-white w-full bg-opacity-75 py-1 ">Past Events</h2>

        @foreach ($events as $event)
            @include('events.eventThumbnail')
        @endforeach
    </section>
@endsection