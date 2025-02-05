<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Webinarly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#040c14] text-white">

<nav id="navbar" class="fixed top-0 w-full p-4 z-50 transition-all bg-navbar-gradient">
    <div class="max-w-7xl mx-auto flex items-center justify-center">
        <img src="{{ asset('images/webinarly-logo.svg') }}" alt="Webinarly" class="h-8">
    </div>
</nav>


<section class="video-container">
    <video class="video-background" autoplay loop muted playsinline>
        <source src="https://cdn.prod.website-files.com/6741af9063553c2d3aeca0ed%2F67430e3ee80de21e0c95f333_6037536_Office_Interior_1280x720%20%281%29-transcode.mp4" type="video/mp4">
        <source src="https://cdn.prod.website-files.com/6741af9063553c2d3aeca0ed%2F67430e3ee80de21e0c95f333_6037536_Office_Interior_1280x720%20%281%29-transcode.webm" type="video/webm">
        <img src="https://cdn.prod.website-files.com/6741af9063553c2d3aeca0ed%2F67430e3ee80de21e0c95f333_6037536_Office_Interior_1280x720%20%281%29-poster-00001.jpg" alt="Background Image">
    </video>

    <div class="gradient-overlay"></div>

    <div class="relative z-10 flex items-center h-full w-full px-10 md:px-20 lg:px-32 font-barlow">
        <div class="max-w-xl text-left">
            <h1 class="text-5xl font-bold leading-tight">
                Master the Keys to <br> Business Success in Our <br> Free Webinar
            </h1>
            <p class="mt-4 text-lg text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.
            </p>
            <div class="mt-6 flex space-x-4">
                <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-700">Register now for FREE</a>
                <a href="#" class="bg-gray-800 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-700">Learn more</a>
            </div>
        </div>
    </div>
</section>


<section class="relative w-[1000px] mx-auto overflow-hidden py-10">
    <div class="text-center max-w-2xl mx-auto mb-10">
        <h2 class="md:text-[17px] leading-tight text-gray-300">
            Trusted by leading companies to deliver results-driven strategies.
        </h2>
    </div>

    <div class="relative w-full overflow-hidden">

        <div class="absolute inset-0 z-10 pointer-events-none bg-gradient-to-r from-[#040c14] via-transparent to-[#040c14]"></div>


        <div class="logo-slider flex space-x-10">
            <div class="logos flex space-x-10">
                <img src="{{ asset('images/Customer Logo 1.svg') }}" class="h-8 object-contain" alt="Logo 1">
                <img src="{{ asset('images/Customer Logo 2.svg') }}" class="h-8 object-contain" alt="Logo 2">
                <img src="{{ asset('images/Customer Logo 3.svg') }}" class="h-8 object-contain" alt="Logo 3">
                <img src="{{ asset('images/Customer Logo 4.svg') }}" class="h-8 object-contain" alt="Logo 4">
                <img src="{{ asset('images/Customer Logo 1.svg') }}" class="h-8 object-contain" alt="Logo 1">
                <img src="{{ asset('images/Customer Logo 2.svg') }}" class="h-8 object-contain" alt="Logo 2">
                <img src="{{ asset('images/Customer Logo 3.svg') }}" class="h-8 object-contain" alt="Logo 3">
                <img src="{{ asset('images/Customer Logo 4.svg') }}" class="h-8 object-contain" alt="Logo 4">
                <img src="{{ asset('images/Customer Logo 1.svg') }}" class="h-8 object-contain" alt="Logo 1">
                <img src="{{ asset('images/Customer Logo 2.svg') }}" class="h-8 object-contain" alt="Logo 2">
                <img src="{{ asset('images/Customer Logo 3.svg') }}" class="h-8 object-contain" alt="Logo 3">
                <img src="{{ asset('images/Customer Logo 4.svg') }}" class="h-8 object-contain" alt="Logo 4">
                <img src="{{ asset('images/Customer Logo 1.svg') }}" class="h-8 object-contain" alt="Logo 1">
                <img src="{{ asset('images/Customer Logo 2.svg') }}" class="h-8 object-contain" alt="Logo 2">
                <img src="{{ asset('images/Customer Logo 3.svg') }}" class="h-8 object-contain" alt="Logo 3">
                <img src="{{ asset('images/Customer Logo 4.svg') }}" class="h-8 object-contain" alt="Logo 4">
                <img src="{{ asset('images/Customer Logo 1.svg') }}" class="h-8 object-contain" alt="Logo 1">
                <img src="{{ asset('images/Customer Logo 2.svg') }}" class="h-8 object-contain" alt="Logo 2">
                <img src="{{ asset('images/Customer Logo 3.svg') }}" class="h-8 object-contain" alt="Logo 3">
                <img src="{{ asset('images/Customer Logo 4.svg') }}" class="h-8 object-contain" alt="Logo 4">
            </div>
        </div>
    </div>
</section>

<section class="bg-[#040c14] text-white py-16 px-6">
    <div class="max-w-3xl mx-auto text-center">
        <div class="flex justify-center items-center gap-4">

            <div class="w-10 h-14 text-[#0061ff]">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <defs>
                        <pattern id="diagonal-stripes" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M-2 2 L2 -2 M0 10 L10 0 M8 12 L12 8" stroke="currentColor" stroke-width="2"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#diagonal-stripes)"></rect>
                </svg>
            </div>


            <h2 class="text-3xl md:text-4xl font-bold">Struggling to Scale Your Business?</h2>


            <div class="w-10 h-14 text-[#0061ff]">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <defs>
                        <pattern id="diagonal-stripes" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M-2 2 L2 -2 M0 10 L10 0 M8 12 L12 8" stroke="currentColor" stroke-width="2"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#diagonal-stripes)"></rect>
                </svg>
            </div>
        </div>


        <p class="max-w-2xl mx-auto text-gray-300 text-xl leading-relaxed mt-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.
            Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla,
            mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus.
            Nullam quis imperdiet augue.
        </p>
    </div>
</section>


<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="flex flex-col mt-10 items-center gap-6">
        <div class="max-w-lg">
           <span class="inline-block px-6 py-2 text-sm font-normal text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)]">
                Our Solution
           </span>
        </div>
    </section>

<section class="max-w-7xl mt-[-50px] mx-auto px-6 py-20 relative">


    <div class="flex flex-col md:flex-row items-start justify-between">


        <div class="max-w-lg relative">
            <div class="relative max-w-lg w-[1200px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" class="heading-pattern">
                    <defs>
                        <pattern id="diagonal-stripes" width="15" height="10" patternUnits="userSpaceOnUse">
                            <path d="M-2 2 L2 -2 M0 10 L10 0 M8 12 L12 8" stroke="currentColor" stroke-width="2"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="72%" fill="url(#diagonal-stripes)"></rect>
                </svg>

                <p class="absolute top-0 right-0 text-[2.5rem] font-bold text-white leading-[140%] text-end">
                    <span class="bg-[#040c14] leading-[140%] px-2 py-1">Proven Strategies for</span>
                    <span class="bg-[#040c14] px-2 py-[1px]">Growth</span>
                </p>

            </div>

            <p class="text-gray-300 ml--1 text-lg max-w-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.
                Aliquam in hendrerit urna.
            </p>
        </div>


        <div class="mt-10 md:mt-0 md:w-1/2 space-y-6">

            <div class="bg-[#001d3d] p-6 rounded-lg shadow-md flex items-start space-x-4 border border-[#001d3d]">
                <div class="bg-[#002a6d] border border-[#0061ff] text-white p-3 rounded-xl">
                    <img src="{{ asset('images/medal-icon.svg') }}" class="h-5 object-contain" alt="Logo 1">
                </div>
                <div>
                    <h3 class="text-white font-bold text-lg">Expert Insights</h3>
                    <p class=" text-sm mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>


            <div class="bg-[#001d3d] p-6 rounded-lg shadow-md flex items-start space-x-4 border border-[#001d3d]">
                <div class="bg-[#002a6d] border border-[#0061ff] text-white p-3 rounded-xl">
                    <img src="{{ asset('images/clipboard-icon.svg') }}" class="h-5 object-contain" alt="Logo 1">
                </div>
                <div>
                    <h3 class="text-white font-bold text-lg">Tailored Action Plan</h3>
                    <p class=" text-sm mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>


            <div class="bg-[#001d3d] p-6 rounded-lg shadow-md flex items-start space-x-4 border border-[#001d3d]">
                <div class="bg-[#002a6d] border border-[#0061ff] text-white p-3 rounded-xl">
                    <img src="{{ asset('images/lightning-icon.svg') }}" class="h-5 object-contain" alt="Logo 1">
                </div>
                <div>
                    <h3 class="text-white font-bold text-lg">Immediate Impact</h3>
                    <p class=" text-sm mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center mt-20">
        <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-5 rounded-lg shadow-lg hover:bg-blue-700 transition">
            Register now for FREE
        </a>
    </div>
</section>


<section class="bg-[#040c14] py-16">
    <div class="max-w-6xl mx-auto px-4">

        <div class="flex justify-center mb-20">
            <span class="inline-block px-6 py-2 text-sm font-normal text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)]">
                Meet Your Host
            </span>
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <div class="space-y-6 text-white">
                <p class="text-lg leading-160">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
                </p>

                <p class="text-lg leading-160">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet.
                </p>
            </div>


            <div class="relative">
                <img
                    src="{{ asset('images/nina collins.webp') }}"
                    alt="Host"
                    class="w-full h-auto  shadow-xl object-cover"
                >
                <div class="absolute bottom-0 left-0 bg-[#040c14] px-3 py-3">
                    <h2 class="text-4xl font-bold text-white">Nina Collins</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="flex flex-col mt-10 items-center gap-6">
    <div class="max-w-lg">
           <span class="inline-block px-6 py-2 text-sm font-normal text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)]">
                Proven Impact
           </span>
    </div>


    <div class="max-w-3xl mt-10 mx-auto text-center">
        <div class="flex justify-center items-center gap-4">
            <div class="w-10 h-14 text-[#0061ff]">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <defs>
                        <pattern id="diagonal-stripes" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M-2 2 L2 -2 M0 10 L10 0 M8 12 L12 8" stroke="currentColor" stroke-width="2"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#diagonal-stripes)"></rect>
                </svg>
            </div>

            <h2 class="text-[40px] font-bold ">Real Success Stories</h2>

            <div class="w-10 h-14 text-[#0061ff]">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <defs>
                        <pattern id="diagonal-stripes" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M-2 2 L2 -2 M0 10 L10 0 M8 12 L12 8" stroke="currentColor" stroke-width="2"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#diagonal-stripes)"></rect>
                </svg>
            </div>
        </div>



    <section>
        <div class="relative mt-10 max-w-[500px] mx-auto">
                <div class="bg-[#001d3d] rounded-lg p-8 mb-8">
                    <p class="text-white text-xl text-center mb-8">
                        This webinar was a game-changer! We left with clear, actionable steps that led to real growth in our business within months.
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        <img
                            src="{{ asset('images/sarah mitchell.webp') }}"
                            alt="Sarah Mitchell"
                            class="w-14 h-14 rounded-full object-cover outline outline-2 outline-[#0061ff]"
                            style="outline-offset: 3px;"
                        >
                        <div class="text-left">
                            <h3 class="text-white font-semibold">Sarah Mitchell</h3>
                            <p class="text-[#0061ff]">CEO of BrightPath Solutions</p>
                        </div>
                    </div>
                </div>


            <div class="flex justify-center gap-4 mt-10">
                <button id="prev" class="bg-[#001d3d] text-white p-3 rounded-lg hover:bg-[#002a6d] transition-colors">
                    <img src="{{ asset('images/arrow left.svg') }}" alt="Arrow Left" class="w-6 h-6 rounded-full object-cover">
                </button>
                <button id="next" class="bg-[#001d3d] text-white p-3 rounded-lg hover:bg-[#002a6d] transition-colors">
                    <img src="{{ asset('images/arrow right.svg') }}" alt="Arrow Right" class="w-6 h-6 rounded-full object-cover">
                </button>
            </div>
        </div>
    </section>




</body>
</html>
