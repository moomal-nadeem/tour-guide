<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guide Registration  - Get Your Tour Guide Uae</title>
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
            <form method="POST" action="{{ route('register') }} " >
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')"  class="text-black bg-white"/>
                    <x-text-input id="name" class="block mt-1 w-full text-black bg-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-black bg-white" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-black bg-white"/>
                    <x-text-input id="email" class="block mt-1 w-full text-black bg-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-black bg-white" />
                </div>

   <!-- Username -->
   <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" class="text-black bg-white"/>
                    <x-text-input id="username" class="block mt-1 w-full text-black bg-white" type="text" name="username" :value="old('username')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2 text-black bg-white" />
                </div>

   <!-- cnic -->
   <div class="mt-4">
                    <x-input-label for="cnic" :value="__('Licence Number')" class="text-black bg-white"/>
                    <x-text-input id="cnic" class="block mt-1 w-full text-black bg-white" type="text" name="cnic" :value="old('cnic')" required autocomplete="CNIC" />
                    <x-input-error :messages="$errors->get('cnic')" class="mt-2 text-black bg-white" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-black bg-white"/>

                    <x-text-input id="password" class="block mt-1 w-full text-black bg-white" type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-black bg-white" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-black bg-white" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full text-black bg-white" type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-black bg-white" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button class="text-white mt-5 bg-[#FF9119] hover:bg-[#ebbe20] focus:ring-4  mx-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
                {{ __('Register') }}
            </button>
                </div>
            </form>
        </x-guest-layout>
    </div>
    <x-footer />

</body>

</html>