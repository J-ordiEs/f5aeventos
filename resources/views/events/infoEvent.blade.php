@extends('layouts.app')
@section('content')
    <div id="container" class="flex flex-col gap-y-5 text-center p-5">
        <header class="flex flex-col gap-y-3 font-bold">
            <h1 class="text-xl ">{{ $event->title }}</h1>
            <h2 class="text-lg">{{ $event->date }}</h2>
            <h3 class="">{{ $event->time }}</h3>
        </header>
        <figure>
            <img src="https://picsum.photos/500" alt="Event thumbnail" class="">
            <figcaption>
                <h2 class="text-lg font-bold my-2">Descripción</h2>
                <p>{{ $event->description }}</p>
                <h2 class="text-lg font-bold mt-3 mb-2">Orador</h2>
                <p class="">{{ $event->speaker }}</p>
                <div>
                    <div id="requirementsGroup" class="text-left shadow-md my-4 p-2">
                        <h3 class="text-lg font-bold my-2">Requisitos</h3>
                        <p>{{ $event->requirements }}</p>
                    </div>
                </div>
                <h3 class="text-lg font-bold my-2">Plazas disponibles</h3>
                <p>{{ $event->capacity }}</p>
            </figcaption>
            <div id="btnGroup" class="flex gap-3 justify-center mt-3">
                <button class="w-1/2 select-none font-bold whitespace-no-wrap p-4 rounded-lg text-base leading-normal no-underline text-black-100 bg-blue-200 hover:bg-blue-700 ">Editar</button>
                <button class="w-1/2 select-none font-bold whitespace-no-wrap p-4 rounded-lg text-base leading-normal no-underline text-black-100 bg-red-200 hover:bg-red-700 ">Eliminar</button>
            </div>
        </figure>
    </div>
@endsection