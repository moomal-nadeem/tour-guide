<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guide Feedback - Get Your Tour Guide Uae</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <x-nav3 />
    @include('layouts.navigation2')
    <div class="mt-[6rem]">
        <x-guest-layout>
            <form method="POST" action="{{ route('FeedbackGuide') }} " enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="flex justify-center">Feedback</div>
                <div>
                    <x-input-label for="invoice" :value="__('Invoice')" class="text-black bg-wiite"/>
                    <x-text-input id="invoice" class="block mt-1 w-full text-black bg-wiite" type="text" name="invoice" :value="old('invoice')" required autofocus autocomplete="invoice" />
                    <x-input-error :messages="$errors->get('invoice')" class="mt-2 text-black bg-wiite" />
                </div>

                <div class="mt-2">
                    <x-input-label for="img" :value="__('Display Picture')" class="text-black bg-wiite" />
                    <x-text-input id="img" class="block mt-1 w-full text-black bg-wiite" type="file" name="img" :value="old('img')" required autofocus autocomplete="img" />
                    <x-input-error :messages="$errors->get('img')" class="mt-2 text-black bg-wiite" />
                </div>

                <div class="mt-2">
                    <x-input-label for="des" :value="__('Feedback')" class="text-black bg-wiite" />
                    <textarea id="des" class="block mt-1 w-full text-black bg-wiite" type="text" name="des" :value="old('des')" required autofocus autocomplete="des" ></textarea>
                    <x-input-error :messages="$errors->get('des')" class="mt-2 text-black bg-wiite" />
                </div>
<!-- Confirm Password -->
             
                <div class="flex items-center justify-end mt-4">
                
                    <button class="text-white mt-5 bg-[#FF9119] hover:bg-[#ebbe20] focus:ring-4  mx-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#ebbe23] dark:hover:bg-[#ebbe23] focus:outline-none ">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </x-guest-layout>
    </div>
    <x-footer />

</body>

</html>