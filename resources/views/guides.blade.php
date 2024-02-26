<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Tour Guides - Get Your Tour Guide Uae</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <x-nav3 />
    @include('layouts.navigation2')
    <div class="flex justify-center">
    <div class="flex items-center mb-4 m-5 lg:ml-[5.5rem] mt-[8rem]">
    <input type="text" id="searchInput" placeholder="Search by name, username, projects, or language" class="p-2 border border-gray-300 rounded-md">
    <button onclick="filterGuides()" class="ml-2 px-4 py-3 text-sm font-medium text-center text-white bg-[#FF9119] rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300  ">Search</button>
</div>
    </div>
    <div class="flex flex-wrap m-5 justify-center">
        
        @foreach ($items as $item)
        <div class="m-1 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <div x-data="{ isOpen: false }" x-init="() => isOpen = false">
                <div class="flex justify-end px-4 pt-4">
                    <button @click="isOpen = !isOpen" class="inline-block text-black rounded-lg text-sm p-1.5" type="button">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                    </button>
                    <div x-show="isOpen" @click.away="isOpen = false" class="z-50 absolute text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-60 ">
                        <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">{{ $item->name }}</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">Tours ({{ optional($item->userinfo)->project }})</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">Full Day: {{ $item->fullDay }} AED</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">Half Day: {{ $item->halfDay }} AED</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">Language: ({{ optional($item->userinfo)->language }})</a>
                            </li>
                            <li>
                                <a href="{{ asset('Products/' . $item->licence) }}" class="block px-4 py-2 text-sm text-black-700 hover:bg-gray-100 ">Licence</a>
                            </li>


                        </ul>
                    </div>
                </div>

                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('Products/' . $item->img) }}" alt=" " />
                    @if($item->status2 == 'Online')<div class="h-4 w-4 bg-[#FF9119] rounded-full mt-[-2rem] mr-[-3.8rem]"></div> @else @endif
                    <!-- <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $item->name }}</h5> -->
                    <p class="mb-1 mt-2 text-[.8rem] font-medium text-gray-500 ">{{ $item->username }}</p>


                    <div class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++) @if ($i <=optional($item->userinfo)->rating )
                            <svg class="w-4 h-4 text-[#FF9119] mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            @else
                            <svg class="w-4 h-4 text-gray-300 mr-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            @endif
                            @endfor
                    </div>
                 
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{ 'guideVisit/' . $item->id }}" class=" bg-[#FF9119] inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#FF9119] rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">VISIT</a>
                        <a href="{{ 'guideHire/' . $item->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 ">HIRE</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="m-5">{{ $items->links() }}</div>
    <x-footer />
</body>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Add this script section at the end of your HTML file, just before the closing </html> tag -->
<script>
    function filterGuides() {
        var input, filter, guides, guide, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        guides = document.getElementsByClassName('max-w-sm');

        for (i = 0; i < guides.length; i++) {
            guide = guides[i];
            txtValue = guide.innerText || guide.textContent;

            // Modify the conditions based on your filter criteria
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                guide.style.display = '';
            } else {
                guide.style.display = 'none';
            }
        }
    }
</script>


</html>