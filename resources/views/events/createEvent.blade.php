@extends('layouts.app')

@section('content') 

<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10"> 
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-green-100 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('New Event') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('events.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Date') }}:
                        </label>

                        <input id="date" type="date" class="form-input w-full  shadow @error('date')  border-red-500 @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                        @error('date')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="time" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Time') }}:
                        </label>

                        <input id="time" type="time" class="form-input w-full shadow @error('time') border-red-500 @enderror" name="time" value="{{ old('time') }}" required autocomplete="time">

                        @error('time')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Title') }}:
                        </label>

                        <input id="title" type="text" class="form-input w-full shadow  @error('title') border-red-500 @enderror" name="title" required autocomplete="title">

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="speaker" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Speaker') }}:
                        </label>

                        <input id="speaker" type="text" class="form-input w-full shadow @error('speaker') border-red-500 @enderror" name="speaker" required autocomplete="speaker">

                        @error('speaker')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Image') }}:
                        </label>

                        <input id="image" type="text" class="form-input w-full shadow  @error('image') border-red-500 @enderror" name="image" required autocomplete="image">

                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Description') }}:
                        </label>

                        <input id="description" type="text" class="form-input w-full shadow  @error('description') border-red-500 @enderror" name="description" required autocomplete="description">

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="capacity" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Capacity') }}:
                        </label>

                        <input id="capacity" type="number" min=1 class="form-input w-full shadow  @error('capacity') border-red-500 @enderror" name="capacity" required autocomplete="capacity">

                        @error('capacity')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="requirements" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Requirements') }}:
                        </label>

                        <input id="requirements" type="text" class="form-input w-full shadow  @error('requirements') border-red-500 @enderror" name="requirements" required autocomplete="requirements">

                        @error('requirements')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="zoom" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Zoom') }}:
                        </label>

                        <input id="zoom" type="text" class="form-input w-full shadow  @error('zoom') border-red-500 @enderror" name="zoom" required autocomplete="zoom">

                        @error('zoom')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="special" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Special ') }}  : 
                        </label>

                        <input id="special" type="checkbox" >
                    </div>
                    <div class="flex flex-wrap">
                        <div class="text-center inline-flex">
                            <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-4 rounded-lg text-base leading-normal no-underline text-black-100 bg-blue-200 hover:bg-blue-700 sm:py-4">
                                {{ __('Create') }}
                            </button>
                            <a href= "{{ route('events') }}">
                                <button class="w-full select-none font-bold whitespace-no-wrap p-4 rounded-lg text-base leading-normal no-underline text-black-100 bg-red-200 hover:bg-red-700 sm:py-4">
                                    {{ __('Cancel') }}
                                </button>  

                            </a>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div> 
</main> 
 @endsection 