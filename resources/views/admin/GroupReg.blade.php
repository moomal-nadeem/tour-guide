<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.createGroupReg') }}">

        @csrf
        <div class="flex justify-center "><img src="../favicon.png" alt="" class="w-[8rem]" /></div>
        <div class="flex justify-center  ">Create Group</div>
       <div class="mt-1">
            <x-input-label for="Type" :value="__('Chart Name')" />
            <select id="ChatID" class="block mt-1 w-full" type="text" name="ChartID" :value="old('ChatID')" required autofocus autocomplete="Chart Name" >
            <option value="">Select a Chart</option>
            @foreach($chartData as $chart)
            <option value="{{ $chart->id }}">{{ $chart->ChartName }}</option>
            @endforeach
            </select>
            <x-input-error :messages="$errors->get('Type')" class="mt-2" />
        </div>

        <div class="mt-1">
            <x-input-label for="GroupName" :value="__('Group Name')" />
            <x-text-input id="GroupName" class="block mt-1 w-full" type="text" name="GroupName" :value="old('GroupName')" required autofocus autocomplete="Group Name" />
            <x-input-error :messages="$errors->get('GroupName')" class="mt-2" />
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
