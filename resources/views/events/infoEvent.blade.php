@extends('layouts.app')
@section('content')
<main>
    <header>
        <h1>{{ $event->title }}</h1>
        <h2>{{ $event->time }}</h2>
    </header>
    <figure>
        <img src="https://picsum.photos/500" alt="Event thumbnail" class="">
        <figcaption>
            <h2>Descripción</h2>
            <p>{{ $event->description }}</p>
            <h3>{{ $event->speaker }}</h3>
            <div>
                <h3>Requisitos</h3>
                <p>{{ $event->requirements }}</p>
            </div>
            <h3>Plazas disponibles</h3>
            <p>{{ $event->capacity }}</p>
        </figcaption>
        <button>Eliminar</button>
        <button>Editar</button>
    </figure>
@stop