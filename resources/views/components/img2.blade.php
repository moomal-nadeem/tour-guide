<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Your custom CSS styles */
        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: border-box;
        }
        
        .package-delta {
            position: relative;
            overflow: hidden;
            border-radius: 0px;
            min-height: 450px;
            display: flex;
            align-items: flex-end;
            background: linear-gradient(179.97deg, rgba(32, 32, 32, 0) 20.42%, #202020 99.97%);
            padding: 30px;
        }
        
        .package-img {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            transform: scale(1);
            transition: all 0.65s ease-out 0s;
        }
    </style>
</head>

<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Gallery items -->
            <div class="package-delta g-4">
                <img src="https://plus.unsplash.com/premium_photo-1663054309676-bb9d31c56f72?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8c2t5JTIwZGl2aW5nfGVufDB8fDB8fHww" alt="Gallery Image" class="package-img">
            </div>

            <div class="package-delta g-4">
                <img src="https://images.unsplash.com/photo-1591007232007-b26dfbbc9a9a?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c2t5JTIwZGl2aW5nfGVufDB8fDB8fHww" alt="Gallery Image" class="package-img">
            </div>

            <!-- Add more gallery items as needed -->

        </div>
    </div>
</body>

</html>
