<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hire Guide - Get Your Tour Guide Uae</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body >
    <x-nav3/>
    @include('layouts.navigation2')
<div class="mt-[6rem] mb-[2rem] ">
    <x-guest-layout >
     

        <form action="/guideHire" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center m-5">
                <h1>Hire Guide</h1>
            </div>

            <x-text-input id="uID" class="block mt-1 w-full" type="hidden" name="uID" :value="$id"  autocomplete="uID" hidden/>
            <div class="mt-1">
                <x-input-label for="name" :value="__('Tourist Name')" class="text-black bg-white" />
                <x-text-input id="name" class="block mt-1 w-full text-black bg-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1 text-black bg-white">
                <x-input-label for="email" :value="__('Tourist Email')"  class="text-black bg-white"/>
                <x-text-input id="email" class="block mt-1 w-full text-black bg-white" type="text" name="email" :value="old('email')" required autofocus autocomplete="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1">
                <x-input-label for="pno" :value="__('Phone')" class="text-black bg-white"/>
                <x-text-input id="pno" class="block mt-1 w-full text-black bg-white" type="text" name="pno" :value="old('pno')" required autofocus autocomplete="Phone" />
                <x-input-error :messages="$errors->get('pno')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1">
                Half Day: {{ $halfDay }} AED & Full Day: {{ $fullDay }} AED
                <x-input-label for="days" class="text-black bg-white"/>
                <x-text-input id="days" class="block mt-1 w-full text-black bg-white" type="number" step="0.5" min="0" name="days" :value="old('days')" required autofocus autocomplete="Days" />
                <x-input-error :messages="$errors->get('days')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1">
                <x-input-label for="total" :value="__('Total Bill in AED')" class="text-black bg-white"/>
                <x-text-input id="total" class="block mt-1 w-full text-black bg-white" type="text" name="total" :value="old('total')" readonly />
            </div>
            <div class="mt-1 text-black bg-white">
                <x-input-label for="dated" :value="__('Dates')" class="text-black bg-white"/>
                <textarea id="dated" class="block mt-1 w-full text-black bg-white" type="text" name="dated" :value="old('dated')" required autofocus autocomplete="dated"></textarea>
                <x-input-error :messages="$errors->get('dated')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1">
                <x-input-label for="schedule" :value="__('Schedule')" class="text-black bg-white" />
                <textarea id="schedule" class="block mt-1 w-full text-black bg-white" type="text" name="schedule" :value="old('schedule')" required autofocus autocomplete="Schedule"></textarea>
                <x-input-error :messages="$errors->get('schedule')" class="mt-2 text-black bg-white" />
            </div>
            <div class="mt-1">
                <x-input-label for="fil" :value="__('Schedule file')" class="text-black bg-white"/>
                <x-text-input id="fil" class="block mt-1 w-full text-black bg-white" type="file" name="fil" :value="old('fil')" autofocus autocomplete="fil"></x-text-input>
                <x-input-error :messages="$errors->get('fil')" class="mt-2 text-black bg-white" />
            </div>

            <button type="submit" class="text-white mt-5 bg-[#FF9119] hover:bg-[#ebbe20] focus:ring-4   font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#ebbe23] dark:hover:bg-[#ebbe23] focus:outline-none dark:focus:ring-blue-800">
                {{ __('Submit') }}
            </button>

            <script>
                function calculateTotal() {
                    const days = parseFloat(document.getElementById('days').value);
                    const halfDay = parseFloat('{{ $halfDay }}');
                    const fullDay = parseFloat('{{ $fullDay }}');
                    const total = days % 1 === 0 ? days * fullDay : (days + days) * halfDay;
                    document.getElementById('total').value = total.toFixed(2);
                }

                document.getElementById('days').addEventListener('input', calculateTotal);
            </script>
        </form>
    </x-guest-layout>
</div>
    <x-footer/>
</body>
</html>
