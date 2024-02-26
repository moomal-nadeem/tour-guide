<html>
    <head>
    <title>Update Payment Information Guide - Get Your Tour Guide Uae</title>
    </head>
</html>
<x-app-layout>
    <x-slot name="header">
        <button class="text-black  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 focus:outline-none " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </x-slot>

    <x-Ubaar />
    <div>
        <div>
            <x-guest-layout>
                <form method="POST" action="paymentInfoEdit">
                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput3" />
                    <div class="flex justify-center m-5">
                        <h1>Payment  Info</h1>
                    </div>
                    <!-- Name -->
                    <div>
                        <x-input-label for="appname" :value="__('App Name/ Bank Name')" class="text-black bg-white" />
                        <x-text-input id="appname" class="block mt-1 w-full text-black bg-white" type="text" name="appname" :value="$data['appname']" required autofocus autocomplete="App Name/ Bank Name" />
                        <x-input-error :messages="$errors->get('appname')" class="mt-2 text-black bg-white" />
                    </div>

              
                    <!-- cnic -->
                    <div class="mt-4">
                        <x-input-label for="accountname" :value="__('Name on Account')"  class="text-black bg-white"/>
                        <x-text-input id="accountname" class="block mt-1 w-full text-black bg-white" type="text" name="accountname" :value="$data['accountname']" required autocomplete="Name on Account" />
                        <x-input-error :messages="$errors->get('accountname')" class="mt-2 text-black bg-white" />
                    </div>

                    <!-- Username -->
                    <div class="mt-4">
                        <x-input-label for="accountnumber" :value="__('Account Number')" class="text-black bg-white"/>
                        <x-text-input id="accountnumber" class="block mt-1 w-full text-black bg-white" type="text" name="accountnumber" :value="$data['accountnumber']" required autocomplete="accountnumber" />
                        <x-input-error :messages="$errors->get('accountnumber')" class="mt-2" />
                    </div>

                    <!-- cnic -->
                    <div class="mt-4">
                        <x-input-label for="paymentmethod" :value="__('Payment method')" class="text-black bg-white"/>
                        <x-text-input id="paymentmethod" class="block mt-1 w-full" type="text" name="paymentmethod" :value="$data['paymentmethod']" required autocomplete="Payment method" />
                        <x-input-error :messages="$errors->get('paymentmethod')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="accountlimit" :value="__('Account Limit')" class="text-black bg-white"/>
                        <x-text-input id="accountlimit" class="block mt-1 w-full text-black bg-white" type="text" name="accountlimit" :value="$data['accountlimit']" required autocomplete="Account Limit" />
                        <x-input-error :messages="$errors->get('accountlimit')" class="mt-2 text-black bg-white" />
                    </div>

              
                    <button class="mt-5 text-white bg-[#ebbe23] hover:bg-[#ebbe20] focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#ebbe23] dark:hover:bg-[#ebbe23] focus:outline-none dark:focus:ring-blue-800">
                {{ __('Submit') }}
            </button>
                    </div>
                </form>
            </x-guest-layout>



</x-app-layout>