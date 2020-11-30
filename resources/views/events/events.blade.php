@extends('layouts.app') 
@section('content')
@foreach ($events as $event)
<article>
    <header>
        <h3>{{ $event->title }}</h3>
        <h4>{{ $event->time }}</h4>
    </header>
    <figure>
        <img src="{{ $event->image }}" alt="Event thumbnail">
        <figcaption>{{ $event->capacity }}</figcaption>
    </figure>
</article>
@endforeach
@endsection