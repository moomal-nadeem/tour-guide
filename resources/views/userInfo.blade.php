<html>
    <head>
    <title>Profile Information Guide - Get Your Tour Guide Uae</title>
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
            <x-guest-layout>
                <form action="userInfo" method="post">

                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput3" />
                    <div class="flex justify-center m-5">
                        <h1>Write Languages You can speek</h1>
                    </div>
                    <!-- Name -->
                    <div>
                        <x-input-label for="language" :value="__('Language')" class="text-black bg-white"/>
                        <x-text-input id="language" class="block mt-1 w-full text-black bg-white" type="text" name="language" :value="old('language')" required autofocus autocomplete="Language" placeholder="English, Arabic, Urdu, Hindi" />
                        <x-input-error :messages="$errors->get('language')" class="mt-2 text-black bg-white" />
                    </div>



                    <!-- Username -->




                    <button class="mt-5 text-white bg-[#ebbe23] hover:bg-[#ebbe20] focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#ebbe23] dark:hover:bg-[#ebbe23] focus:outline-none dark:focus:ring-blue-800">
                        {{ __('Submit') }}
                    </button>
        </div>
        </form>
        </x-guest-layout>



</x-app-layout>