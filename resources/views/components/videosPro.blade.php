<!DOCTYPE html>
<html>

<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    </style>
</head>

<body>
    <div>
        <div class="container text-center mx-auto px-5 py-2 lg:px-32 lg:pt-18 animate-fade-in" x-data="{ scrolled: false }" x-init="() => { window.addEventListener('scroll', () => { if (window.scrollY > 100) scrolled = true; }); }">
            <span class="signature">Top Tours</span>
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center lg:text-3xl font-black animate-fade-in" x-data="{ scrolled: false }" x-init="() => { window.addEventListener('scroll', () => { if (window.scrollY > 100) scrolled = true; }); }">
            Our Top Tours & Videos
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center animate-fade-in" x-data="{ scrolled: false }" x-init="() => { window.addEventListener('scroll', () => { if (window.scrollY > 100) scrolled = true; }); }">
            Discover the United Arab Emirates, where modern "Explore the heart of the UAE with us and discover the essence of true Arabian hospitality."
        </div>
    </div>

    <main class="grid mt-5 relative min-h-[60vh] lg:min-h-[90vh] w-full place-content-center bg-gray-900 mb-5 " x-data="videoPlayer" x-init="loadContent()" style="background-image: url('https://images.unsplash.com/photo-1554203576-7ddd40749aa4?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dWFlJTIwdG91ciUyMGRhc2VyZHxlbnwwfHwwfHx8MA%3D%3D'); background-size: cover; background-position: center; background-repeat: no-repeat;">


        <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
        </button>

        <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
        </button>

        <div class="relative h-80 lg:h-80 w-[20rem] lg:w-[30rem]">
            <template x-for="(video, index) in videos">
                <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                    <iframe width="100%" height="100%" :src="video" frameborder="0" allowfullscreen class="h-80 lg:h-80 w-[20rem] lg:w-[30rem] rounded-2xl"></iframe>
                </div>
            </template>
        </div>
    </main>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("videoPlayer", () => ({
                currentIndex: 1,
                videos: [
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                    "https://www.youtube.com/embed/zZLxRcgimRI?rel=0",
                ],
                previous() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                forward() {
                    if (this.currentIndex < this.videos.length) {
                        this.currentIndex = this.currentIndex + 1;
                    }
                },
                loadContent() {
                    window.addEventListener('scroll', () => {
                        if (window.scrollY > 100) {
                            this.currentIndex = 1; // Load content when scrolled
                        }
                    });
                },
            }));
        });
    </script>
</body>

</html>
