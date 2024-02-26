<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <style>
        .signature {
            font-family: cursive;
            font-size: 24px;
            color: #FF9119;
            border-bottom: 2px solid #ebbe23;
            display: inline-block;
            padding: 2px 2px;
        }

        .gallery-container {
            position: relative;
            flex: 0 0 calc(33.333% - 20px);
          
            opacity: 0;
            animation: fade-in 6s ease-in-out forwards;
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

        .gallery-img {
            max-width: 100%;
            min-width: 100%;
            width: 100%;
            height: 18rem;
            max-height: 18rem;
            min-height: 18rem;
            object-fit: cover;
            display: block;
            border-radius: 10px;
            transition: transform 0.2s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .img-overlay {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background: rgba(0, 0, 0, 0.5); */
            color: black;
            padding: 1px;
            border-radius: 5px;
            text-align: center;
            font-weight:bolder;
        }

        .gallery-container:hover {
            display: block;
        }

        @media (max-width: 768px) {
            .gallery-container {
                flex: 0 0 100%;
            /* Display images in one column on small screens */
            }
        }
    </style>
</head>

<body>
    <div class=" lg:mt-[16rem] " >
        <div class="container text-center mx-auto px-5 py-2 lg:px-32 lg:pt-34">
            <span class="signature">Get Ready To</span>
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center lg:text-3xl font-black">
            Explore Top Destinations
        </div>
        <div class="container mx-auto px-5 py-2 lg:px-32 text-center">Discover the United Arab Emirates, where modern
            luxury and ancient wonders collide in harmony, offering travelers a kaleidoscope of popular destinations and
            a tapestry of cultural experiences.</div>
        <div class="container mx-auto px-5 py-2 lg:px-10 lg:pt-24 lg:ml-[3rem]">
            <div class="-m-1 flex flex-wrap md:-m-2 ">
                <div class="flex flex-wrap">
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://upload.wikimedia.org/wikipedia/en/7/7d/Sheikh_Zayed_Mosque_view.jpg" />
                        <div class="img-overlay">Sheikh Zayed Grand Mosque</div>
                    </div>
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcQdDIqmhUBK9W12Ms5cb88G7Yw8ImGQ7vUahkmxaM6T1xkbzN6B0j5dLtmrU8ekT74Z" />
                        <div class="img-overlay">Burj Al Arab</div>
                    </div>
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcRjbIHG5KfrLpmlSFBTsKZ-ddLGcteEhQDpLXMMrdwLZpPsJ06FFVODKgBdFxBUpfJp" />
                        <div class="img-overlay">Dubai Mall</div>
                    </div>
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcR8sYhp4bITGmY8PMPD9y8EBO-2JKu-Rdl96G8b1koozO2r1XHIKDtcQQzMTjRbvoKW" />
                        <div class="img-overlay">Palm Jumeirah</div>
                    </div>
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcQxwIbx73gFsoLgxsbgm315aZP1IbBy5yCAmo26zVHvzQ77NCeZ89vIpKnIBcuA12HN" />
                        <div class="img-overlay">Emirates Palace</div>
                    </div>
                    <div class="w-1/2 p-1 md:p-1 gallery-container">
                        <img alt="gallery" class="transform hover:scale-95 gallery-img block rounded-lg object-cover object-center" src="https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcSOh1JpOlPQITrSQB0DJEcEay_z7vWNm3RfrWprBDsjjbIiqkqSU0RSHDShIlHYw2I9" />
                        <div class="img-overlay">Yas Island
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
