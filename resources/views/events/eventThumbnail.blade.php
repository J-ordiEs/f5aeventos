<article class="w-10/12 my-10 md:w-2/5">
    <a href="{{ route('events.event', $event) }}">
        <header class="h-auto bg-black text-white">
            <h3 class="p-2">{{ $event->title }}</h3>
            <h4 class="p-2">{{ $event->time }}</h4>
        </header>
        <figure class="text-white">
            <img src="https://picsum.photos/500" alt="Event thumbnail" class="">
            <figcaption class="bg-black bg-opacity-75 p-1">{{ $event->capacity }}</figcaption>
        </figure>
    </a>
    </article>