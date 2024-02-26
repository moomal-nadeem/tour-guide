<html>
    <head>
    <title>Feedback Guide - Get Your Tour Guide Uae</title>
    </head>
</html>
<x-app-layout>
    <x-slot name="header">
        <button class="text-black  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </x-slot>

    <x-Ubaar />
    <div>
        <div>
        <div class="lg:m-5 grid mb-8 border border-gray-200 rounded-lg shadow-sm  bg-white ">
                            @foreach ($items as $item)
                            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                                <figcaption class="flex items-center justify-center ">
                                    <img class="rounded-full w-9 h-9" src="{{ asset('Products/' . $item->img) }}" alt="profile picture">
                                    <div class="space-y-0.5 font-medium  text-left rtl:text-right ms-3">
                                        <div>{{ $item->name }}</div>
                                        <div class="text-sm text-gray-500  ">{{ $item->dated }}</div>
                                    </div>
                                </figcaption>
                                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 ">

                                    <p class="my-4">{{ $item->des }}</p>
                                </blockquote>

                            </figure>
                            @endforeach
                        </div>


</x-app-layout>