<!DOCTYPE html>
<html>
<head>
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <button class="text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </x-slot>

    <x-Ubaar />
    <div class="mb-5">
        <x-guest-layout>
            <form action="{{ route('calendar') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput3" />
                <x-input-label for="video" :value="__('Select Booked Date')" />
                <x-text-input id="datepicker" class="block mt-1 w-full" type="date" name="dated" :value="old('dated')" required autocomplete="yy-mm-dd" placeholder="yy-mm-dd" />

                <button class="text-white mt-5 bg-[#ebbe23] hover:bg-[#ebbe20] w-full focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none " type="submit">
                    {{ __('ADD') }}
                </button>
            </form>
        </x-guest-layout>
    </div>
</x-app-layout>

<!-- Include flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var disabledDates = @json($disabledDates); // Convert PHP array to JavaScript variable

        flatpickr("#datepicker", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            minDate: "today",
            maxDate: new Date().fp_incr(365),
            disable: disabledDates
        });
    });
</script>

</body>
</html>
