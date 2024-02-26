<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.createChartAcc') }}">

        @csrf
        <div class="flex justify-center "><img src="../favicon.png" alt="" class="w-[8rem]" /></div>
        <div class="flex justify-center  ">Chart Account</div>
       
        <div>
            <x-input-label for="ChartName" :value="__('Chart Name')" />
            <x-text-input id="ChartName" class="block mt-1 w-full" type="text" name="ChartName" :value="old('ChartName')" required autofocus autocomplete="Chart Name" />
            <x-input-error :messages="$errors->get('ChartName')" class="mt-2" />
        </div>
        <div class="mt-1">
            <x-input-label for="Type" :value="__('Type')" />
            <x-text-input id="Type" class="block mt-1 w-full" type="text" name="Type" :value="old('Type')" required autofocus autocomplete="Chart Name" />
            <x-input-error :messages="$errors->get('Type')" class="mt-2" />
        </div>

        <div class="mt-1">
            <x-input-label for="Trid" :value="__('Trid')" />
            <x-text-input id="Trid" class="block mt-1 w-full" type="text" name="Trid" :value="old('Trid')"  autofocus autocomplete="Trid" />
            
        </div>

        <div class="mt-1">
            <x-input-label for="Status" :value="__('Status')" />
            <x-text-input id="Status" class="block mt-1 w-full" type="text" name="Status" :value="old('Status')"  autofocus autocomplete="Status" />
            
        </div>
        <!-- Password -->
       
            <x-primary-button class=" mt-1 bg-[#ebbe23] ">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
