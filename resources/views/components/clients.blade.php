<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <style>
        .signature {
            font-family: cursive;
            font-size: 24px;
            color: #ebbe23;
            border-bottom: 2px solid #ebbe23;
            display: inline-block;
            padding: 4px 8px;
        }

        .animate-fade-in {
            animation: fade-in 1s ease-in-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Style for the slider */
        .slider-container {
            display: flex;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-card {
            min-width: 100%;
        }
    </style>
</head>

<body>
    <div>
        <div class="container text-center mx-auto px-5 py-2 lg:px-32 lg:pt-18 animate-fade-in">
            <span class="signature">Client Say</span>
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center lg:text-3xl font-black animate-fade-in">
        What Our Client Say About Us
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center animate-fade-in">
        Our clients have shared their experiences with us, and their words speak volumes about the exceptional service and unforgettable moments they've encountered with Get Your Tourguide UAE. 
        </div>
    </div>

    <!-- Display Container (not part of component) START -->
    <div class="m-10 mx-auto p-16 sm:p-24 lg:p-48 lg:mt-[-10rem]" >
       
        <div class="relative rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 19rem;">
            <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                style="min-height: 19rem;">
                <!-- Updated image source -->
                <img class="absolute inset-0 w-full h-full object-cover object-center"
                    src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg"
                    alt="Image Alt Text">
                <div class="absolute inset-0 w-full h-full bg-yellow-900 opacity-75"></div>
                <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
                  
                </div>
            </div>
            <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                    <p class="text-gray-600"><span class="text-gray-900">John Cappella</span> I recently had the pleasure of booking a tour with 'Get Your Tourguide UAE,' and I must say, it was an unforgettable experience.The service support provided by 'Get Your Tourguide UAE' was top-notch. From the moment I inquired about the tour to the end of our journey, their team was responsive, accommodating.
                    </a>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
            <button class="absolute top-0 mt-32 left-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-yellow-600 hover:text-yellow-400 focus:text-yellow-400 -ml-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
            <button class="absolute top-0 mt-32 right-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-yellow-600 hover:text-yellow-400 focus:text-yellow-400 -mr-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
        </div>
        
        <!-- Carousel Tabs -->
        <div class="flex items-center pt-5 justify-between">
            <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/kickstarter.svg" alt="" style="max-height: 60px;"></button>
            <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/slack.svg" alt="" style="max-height: 60px;"></button>
            <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/glossier.svg" alt="" style="max-height: 60px;"></button>
            <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/charity_water.svg" alt="" style="max-height: 60px;"></button>
            <button class="px-2 opacity-100 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/John Cappella.svg" alt="" style="max-height: 60px;"></button>
        </div>
    </div>
</body>

</html>
