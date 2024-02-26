<html>

<head>
    <title>Pictures Guide - Get Your Tour Guide Uae</title>
</head>

</html>
<x-app-layout>
    <x-slot name="header">
        <button class="text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </x-slot>

    <x-Ubaar />

    <div>
        <x-guest-layout>
            <div class="w-full max-w-md p-4 mb-5 rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <form action="{{ route('picture') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput3" />
                        <div class="mt-4">
                            <x-input-label for="img" :value="__('Picture')" class="text-black bg-white" />
                            <x-text-input id="img" class="block mt-1 w-full  text-black bg-white" type="file" name="img" :value="old('img')" required autocomplete="img" />
                            <x-input-error :messages="$errors->get('img')" class="mt-2 text-black bg-white" />
                            <button class="text-white mt-5 bg-[#ebbe23] hover:bg-[#ebbe20] w-full focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2   focus:outline-none " type="submit">
                                {{ __('ADD') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 ">
                        @foreach ($items as $item)
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-[6rem] h-[5rem] lg:max-h-[3rem]" src="{{ asset('Products/' . $item->img) }}" alt="{{ $item->name }} image">
                                </div>

                                <div class="mx-5 inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <form method="POST" action="{{ route('deletePicture', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-black bg-white">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>{{ $items->links() }}</div>
            </div>
        </x-guest-layout>
    </div>
</x-app-layout>