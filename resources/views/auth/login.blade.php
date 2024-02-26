<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guide Login - Get Your Tour Guide Uae</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body>
    <x-nav3/>
    @include('layouts.navigation2')
   <div class="mt-[10rem] mb-[2rem] lg:mt-[3rem] lg:mb-[2rem]">
   <x-guest-layout >
    
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="">
        @csrf
        <div class="flex justify-center "><img src="./favicon3.png" alt="" class="w-[8rem]" /></div>
        <div class="flex justify-center text-sm/[2rem] text-md/[2rem] text-lg/[4rem] ">Guide Login</div>
        <div class="flex justify-center text-sm/[2rem] text-md/[2rem] text-lg/[4rem] ">Welcome back! Log in to your account.</div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"  class="text-black bg-white"/>
            <x-text-input id="email" class="block mt-1 w-full text-black bg-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-black bg-white" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-black bg-white" />

            <x-text-input id="password" class="block mt-1 w-full text-black bg-white" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-black bg-white" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500  " name="remember">
                <span class="ml-2 text-sm text-black bg-white">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4 ">
            @if (Route::has('password.request'))
            <a class="underline mr-5 text-sm text-gray-600  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
           
            <button class="text-white bg-[#FF9119] hover:bg-[#ebbe20] focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
   </div>    
<x-footer/>
     
    </body>
</html>
