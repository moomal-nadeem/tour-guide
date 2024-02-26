<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>{{$item['name']}} - Get Your Tour Guide Uae</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <x-nav3 />
    @include('layouts.navigation2')

    <div class="w-auto h-auto mt-[8rem]">
        <div class="w-screen h-screen bg-white flex flex-row flex-wrap p-3">
            <div class="mx-auto w-full lg:w-2/3">
                <!-- Profile Card -->
                <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased" style="

  background-repeat: no-repeat;
  background-size: cover;
  background-blend-mode: multiply;
">


                    <div class="md:w-1/3 w-full">
                        <img class="rounded-lg shadow-lg antialiased" src="{{ asset('Products/' . $item->img) }}">
                    </div>
                    <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                        <div class="w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                            <div class="text-2xl text-white leading-tight">{{$item['name']}}</div>
                            <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer"><span class="border-b border-dashed border-gray-500 pb-1">{{$item['username']}}</span></div>
                            <div class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0">Status : <b>{{$item['status2']}}</b></div>
                        </div>
                    </div>
                </div>
                <!-- End Profile Card -->
                <div class="my-5 flex justify-center flex-wrap lg:px-5" id="svgs-container">
                    <div class="px-5" id="svgs1">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>

                    </div>
                    <div class="px-5" id="svgs2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <div class="px-5" id="svgs3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div class="px-5" id="svgs4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div>
                    <div class="px-5" id="svgs5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>

                <!-- end -->
                <div class="lg:my-5 flex justify-center flex-wrap lg:px-5">
                    <!-- image galary div -->
                    <div class="div-content h-auto w-auto hidden" id="div1">
                        <x-text-input id="datepicker" class="block mt-1 w-full text-black bg-white" type="date" name="dated" :value="old('dated')" required autocomplete="yy-mm-dd" placeholder="yy-mm-dd" />

                    </div>
                    <!-- video galary div -->
                    <div class="div-content hidden mb-5" id="div2">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($videos as $video)
                            <div class="flex-shrink-0">
                                <iframe src="{{ $video->video }}" frameborder="0" class="h-auto max-w-full rounded-2xl"></iframe>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- calander div -->
                    <div class="div-content hidden mb-5" id="div3">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($pictures as $picture)
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('Products/' . $picture->img) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- profile div -->
                    <div class="div-content hidden" id="div4">


                        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm  md:mb-12 md:grid-cols-2 bg-white ">
                            @foreach ($feedback as $feedback)
                            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                                <figcaption class="flex items-center justify-center ">
                                    <img class="rounded-full w-9 h-9" src="{{ asset('Products/' . $feedback->img) }}" alt="profile picture">
                                    <div class="space-y-0.5 font-medium  text-left rtl:text-right ms-3">
                                        <div>{{ $feedback->name }}</div>
                                        <div class="text-sm text-gray-500 ">{{ $feedback->dated }}</div>
                                    </div>
                                </figcaption>
                                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 ">

                                    <p class="my-4">{{ $feedback->des }}</p>
                                </blockquote>

                            </figure>
                            @endforeach
                        </div>
                    </div>
                    <!-- feedback div -->
                    <div class="div-content hidden" id="div5">
                        <!-- div 5 -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    // Attach click event listeners to each svgs element
    for (let i = 1; i <= 5; i++) {
        document.getElementById(`svgs${i}`).addEventListener('click', () => {
            // Hide all div elements
            for (let j = 1; j <= 5; j++) {
                document.getElementById(`div${j}`).style.display = 'none';
            }
            // Show the corresponding div element
            document.getElementById(`div${i}`).style.display = 'block';
        });
    }
</script>


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





</html>