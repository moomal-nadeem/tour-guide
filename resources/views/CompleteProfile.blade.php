<html>
    <head>
    <title>Profile Guide - Get Your Tour Guide Uae</title>
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
                <form  action="/editUserInfo" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center m-5">
                        <h1>Guide Info</h1>
                    </div>
                    <!-- Name -->
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput3" />
                    <div>
                        <x-input-label for="pno" :value="__('Phone')" class="text-black bg-white"/>
                        <x-text-input id="pno" class="block mt-1 w-full text-black bg-white" type="text" name="pno" :value="old('pno')" required autofocus autocomplete="Phone" />
                        <x-input-error :messages="$errors->get('pno')" class="mt-2 text-black bg-white" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="status2" :value="__('Online Status')" class="text-black bg-white" />
                        <select id="status2" class="block mt-1 w-full text-black bg-white" name="status2" :value="old('status2')" required autocomplete="Online Status">
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>

                        <x-input-error :messages="$errors->get('status2')" class="mt-2" />
                    </div>
                    <!-- cnic -->
                    <div class="mt-4">
                        <x-input-label for="img" :value="__('Display Picture')" class="text-black bg-white"/>
                        <x-text-input id="img" class="block mt-1 w-full text-black bg-white" type="file" name="img" :value="old('img')" required autocomplete="Display Picture" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2 text-black bg-white" />
                    </div>

                    <!-- Username -->
                    <div class="mt-4">
                        <x-input-label for="cover" :value="__('Back Cover')" class="text-black bg-white"/>
                        <x-text-input id="cover" class="block mt-1 w-full text-black bg-white text-black bg-white" type="file" name="cover" :value="old('cover')" required autocomplete="Back Cover" />
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                    <!-- cnic -->
                    <div class="mt-4">
                        <x-input-label for="licence" :value="__('Tour Guide Licence')" class="text-black bg-white" />
                        <x-text-input id="licence" class="block mt-1 w-full text-black bg-white" type="file" name="licence" :value="old('licence')" required autocomplete="Tour Guide Licence" />
                        <x-input-error :messages="$errors->get('licence')" class="mt-2 text-black bg-white" />
                    </div>


              
                    <button class="mt-5 text-white bg-[#ebbe23] hover:bg-[#ebbe20] focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
                {{ __('Submit') }}
            </button>
                    </div>
                </form>
            </x-guest-layout>



</x-app-layout>