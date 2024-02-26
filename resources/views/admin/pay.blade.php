
<html>
    <head>
    <title>Pay Guide Admin - Get Your Tour Guide Uae</title>
    </head>
</html>
<x-admin-layout>
    <x-slot name="header">
        <button class="text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </x-slot>
    <x-Ubaar />
    <div class="flex justify-center m-5">
        <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 justify-center flex">
                Payment Proof
            </h5>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Payment Method : <b>{{ $data->paymentmethod }}</b>
            </p>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Application Name : <b>{{ $data->appname }}</b>
            </p>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Name on Account: <b>{{ $data->accountname }}</b>
            </p>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Account Number : <b>{{ $data->accountnumber }}</b>
            </p>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Account Limit : <b>{{ $data->accountlimit }} AED</b>
            </p>
            <p>Amount: <b>{{ $data->yours }} AED</b></p>
            <form method="POST" action="{{ route('admin.pay') }}" enctype="multipart/form-data">
                @csrf

                <!-- Assuming you want to pass an ID; replace 'YourID' with the actual variable -->
                <input type="hidden" name="id" value="{{ $data->id }}" />

                <div class="mt-4">
                    <input id="img" class="block mt-1 w-full" type="file" name="img" required autocomplete="img" />

                    <button class="text-white mt-5 bg-[#ebbe23] hover:bg-[#ebbe20] w-full focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-[#ebbe23] dark:hover-bg-[#ebbe23] focus:outline-none dark:focus:ring-blue-800" type="submit">
                        {{ __('ADD') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
