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

    <div class="relative z-10 flex items-center h-full w-full px-10 md:px-20 lg:px-32 font-barlow" data-aos="zoom-in">
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

<section id="our-solution" class="max-w-7xl mx-auto px-6 py-16">
    <div class="flex flex-col mt-10 items-center gap-6">
        <div class="max-w-lg">
           <span class="inline-block px-6 py-2 text-sm font-normal text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)]">
                Our Solution
           </span>
        </div>
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

<section id="meet-your-host" class="bg-[#040c14] py-16">
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

<div id="proven-impact" class="flex flex-col mt-10 items-center gap-6">
    <div class="max-w-lg">
           <span class="inline-block px-6 py-2 text-sm font-normal text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)]">
                Proven Impact
           </span>
    </div>

    <div class="mt-10 mx-auto text-center">
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

        <div class="relative mt-10 w-full flex justify-center overflow-hidden">
            <div class="flex gap-6">

                <div class="w-[500px] h-[230px] scale-100 opacity-100">
                    <div class="bg-[#001d3d] rounded-lg p-8 shadow-lg flex flex-col items-center justify-center">
                        <p class="text-white text-xl text-center mb-8">
                            This webinar was a game-changer! We left with clear, actionable steps that led to real growth in our business within months.
                        </p>
                        <div class="flex items-center justify-center gap-4">
                            <img src="{{ asset('images/dog-shaking.gif') }}" alt="Sarah Mitchell"
                                 class="w-14 h-14 rounded-full object-cover outline outline-2 outline-[#0061ff]"
                                 style="outline-offset: 3px;">
                            <div class="text-left">
                                <h3 class="text-white font-semibold">Dog Shaking</h3>
                                <p class="text-[#0061ff]">CEO of BrightPath Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="w-[400px] h-[200px] opacity-50 scale-90">
                    <div class="bg-[#001d3d] rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                        <p class="text-white text-lg text-center mb-6">
                            This webinar was a game-changer! We left with clear, actionable steps that led to real growth in our business within months.
                        </p>
                        <div class="flex items-center justify-center gap-4">
                            <img src="{{ asset('images/dog-shaking.gif') }}" alt="Sarah Mitchell"
                                 class="w-12 h-12 rounded-full object-cover outline outline-2 outline-[#0061ff]"
                                 style="outline-offset: 2px;">
                            <div class="text-left">
                                <h3 class="text-white font-semibold">Dog Shaking</h3>
                                <p class="text-[#0061ff]">CEO of BrightPath Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="w-[400px] h-[200px] opacity-50 scale-90">
                    <div class="bg-[#001d3d] rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                        <p class="text-white text-lg text-center mb-6">
                            This webinar was a game-changer! We left with clear, actionable steps that led to real growth in our business within months.
                        </p>
                        <div class="flex items-center justify-center gap-4">
                            <img src="{{ asset('images/dog-shaking.gif') }}" alt="Sarah Mitchell"
                                 class="w-12 h-12 rounded-full object-cover outline outline-2 outline-[#0061ff]"
                                 style="outline-offset: 2px;">
                            <div class="text-left">
                                <h3 class="text-white font-semibold">Dog Shaking</h3>
                                <p class="text-[#0061ff]">CEO of BrightPath Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center gap-4 mt-10">
            <button id="prev" class="bg-[#001d3d] text-white p-3 rounded-lg">
                <img src="{{ asset('images/arrow left.svg') }}" alt="Arrow Left" class="w-6 h-6">
            </button>
            <button id="next" class="bg-[#001d3d] text-white p-3 rounded-lg">
                <img src="{{ asset('images/arrow right.svg') }}" alt="Arrow Right" class="w-6 h-6">
            </button>
        </div>
    </div>
</div>

<section id="join-us" class="relative min-h-[600px] bg-gradient-to-b from-[#040c14] to-[#0061ff]/55 flex flex-col items-center justify-center text-center px-4 py-20">

    <div class="relative mt-60 mb-10">

        <div class="absolute left-1/2 transform -translate-x-1/2 -top-48 w-[2px] h-48 bg-gradient-to-b from-transparent to-[#0061ff] shadow-[0_0_10px_rgba(0,97,255,0.5)]"></div>


        <a class="relative inline-block px-6 py-2 text-sm font-semibold text-white border border-[#0061ff] rounded-full bg-[#040c14] shadow-[0_4px_20px_rgba(0,97,255,0.5)] hover:shadow-[0_4px_25px_rgba(0,97,255,0.6)] transition-shadow">
            Join Us
        </a>
    </div>

    <div class="max-w-4xl mx-auto mb-10">
        <h2 class="text-4xl md:text-5xl lg:text-4xl font-bold text-white mb-8 leading-tight">
            Don't Miss Out on this Opportunity
        </h2>
        <div class="space-y-2 text-gray-300 text-lg md:text-xl">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            <p>Aliquam in hendrerit urna.</p>
        </div>
    </div>

    <div class="items-center bg-[#00173d] p-6 rounded-xl border border-[#0061ff] shadow-lg h-[200px] w-[460px] relative">

        <div class="absolute left-0 top-0 h-full w-[80px] bg-[#002a6d] rounded-l-xl"></div>


        <div class="absolute left-6 top-1/2 -translate-y-1/2 z-10">
            <span class="text-[#0061ff] text-3xl font-bold [writing-mode:vertical-rl]">
                WEBINAR
            </span>
        </div>


        <div class="absolute left-20 top-0 h-full text-[#002a6d]">
            <svg xmlns="http://www.w3.org/2000/svg" width="12px" viewBox="0 0 8 16" class="h-full">
                <defs>
                    <pattern id="wavyPattern" x="0" y="0" width="8" height="16" patternUnits="userSpaceOnUse">
                        <path d="M4 0 Q8 4 4 8 Q0 12 4 16 L0 16 L0 0 Z" fill="currentColor"></path>
                    </pattern>
                </defs>
                <rect x="0" y="-750%" width="8" height="1600%" fill="url(#wavyPattern)"></rect>
            </svg>
        </div>


        <div class="space-y-2 pl-24">
            <h3 class="text-[#7aadff] text-2xl text-left font-bold leading-tight">
                Business Growth<br/> Workshop
            </h3>

            <div class="space-y-1">
                <p class="text-[#7aadff] text-left opacity-80">FEB 20, 2024</p>
                <p class="text-[#7aadff] text-left opacity-80">1:00 PM - 2:30 PM (EST)</p>
            </div>


            <svg class="text-[#7aadff]" xmlns="http://www.w3.org/2000/svg" width="95%" viewBox="0 0 256 24" fill="white" height="24" preserveAspectRatio="none">
                <path d="M3.22008 0H0V24H3.22008V0Z" fill="currentColor"></path>
                <path d="M6.44017 0H4.83012V24H6.44017V0Z" fill="currentColor"></path>
                <path d="M14.4904 0H9.66025V24H14.4904V0Z" fill="currentColor"></path>
                <path d="M20.9305 0H17.7105V24H20.9305V0Z" fill="currentColor"></path>
                <path d="M25.7607 0H24.1506V24H25.7607V0Z" fill="currentColor"></path>
                <path d="M33.8109 0H28.9807V24H33.8109V0Z" fill="currentColor"></path>
                <path d="M38.641 0H35.4209V24H38.641V0Z" fill="currentColor"></path>
                <path d="M45.0812 0H41.8611V24H45.0812V0Z" fill="currentColor"></path>
                <path d="M51.5213 0H48.3012V24H51.5213V0Z" fill="currentColor"></path>
                <path d="M56.3515 0H53.1314V24H56.3515V0Z" fill="currentColor"></path>
                <path d="M61.1816 0H59.5715V24H61.1816V0Z" fill="currentColor"></path>
                <path d="M67.6217 0H62.7916V24H67.6217V0Z" fill="currentColor"></path>
                <path d="M77.282 0H70.8418V24H77.282V0Z" fill="currentColor"></path>
                <path d="M80.5021 0H78.892V24H80.5021V0Z" fill="currentColor"></path>
                <path d="M86.9422 0H85.3322V24H86.9422V0Z" fill="currentColor"></path>
                <path d="M90.1623 0H88.5523V24H90.1623V0Z" fill="currentColor"></path>
                <path d="M93.3824 0H91.7724V24H93.3824V0Z" fill="currentColor"></path>
                <path d="M99.8226 0H96.6025V24H99.8226V0Z" fill="currentColor"></path>
                <path d="M109.483 0H106.263V24H109.483V0Z" fill="currentColor"></path>
                <path d="M119.143 0H114.313V24H119.143V0Z" fill="currentColor"></path>
                <path d="M122.363 0H120.753V24H122.363V0Z" fill="currentColor"></path>
                <path d="M127.193 0H123.973V24H127.193V0Z" fill="currentColor"></path>
                <path d="M132.027 0H128.807V24H132.027V0Z" fill="currentColor"></path>
                <path d="M135.247 0H133.637V24H135.247V0Z" fill="currentColor"></path>
                <path d="M143.297 0H138.467V24H143.297V0Z" fill="currentColor"></path>
                <path d="M149.737 0H146.517V24H149.737V0Z" fill="currentColor"></path>
                <path d="M149.737 0H146.517V24H149.737V0Z" fill="currentColor"></path>
                <path d="M154.567 0H152.957V24H154.567V0Z" fill="currentColor"></path>
                <path d="M162.618 0H157.787V24H162.618V0Z" fill="currentColor"></path>
                <path d="M167.448 0H164.228V24H167.448V0Z" fill="currentColor"></path>
                <path d="M173.888 0H170.668V24H173.888V0Z" fill="currentColor"></path>
                <path d="M180.328 0H177.108V24H180.328V0Z" fill="currentColor"></path>
                <path d="M185.158 0H181.938V24H185.158V0Z" fill="currentColor"></path>
                <path d="M189.988 0H188.378V24H189.988V0Z" fill="currentColor"></path>
                <path d="M196.428 0H191.598V24H196.428V0Z" fill="currentColor"></path>
                <path d="M206.089 0H199.649V24H206.089V0Z" fill="currentColor"></path>
                <path d="M209.309 0H207.699V24H209.309V0Z" fill="currentColor"></path>
                <path d="M215.749 0H214.139V24H215.749V0Z" fill="currentColor"></path>
                <path d="M218.969 0H217.359V24H218.969V0Z" fill="currentColor"></path>
                <path d="M222.189 0H220.579V24H222.189V0Z" fill="currentColor"></path>
                <path d="M228.629 0H225.409V24H228.629V0Z" fill="currentColor"></path>
                <path d="M238.29 0H235.069V24H238.29V0Z" fill="currentColor"></path>
                <path d="M247.95 0H243.12V24H247.95V0Z" fill="currentColor"></path>
                <path d="M251.17 0H249.56V24H251.17V0Z" fill="currentColor"></path>
                <path d="M256 0H252.78V24H256V0Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <a href="#" class="mt-10 inline-block px-8 py-3 bg-[#0061ff] text-white font-semibold rounded-lg hover:bg-[#0052d6] transition-colors">
        Register now for FREE
    </a>
</section>

<footer class="bg-[#040c14] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <div>
                <a href="/" class="flex items-center space-x-2">
                    <img src="{{ asset('images/webinarly-logo.svg') }}" alt="Webinarly Logo" class="h-8">
                </a>
            </div>



            <div>
                <h3 class="text-white text-xl font-semibold mb-6">Links</h3>
                <nav class="space-y-1">
                    <a href="/"
                       class="block text-[#748da7] hover:text-white transition-colors">
                        Home
                    </a>
                    <a href="#our-solution"
                       class="block text-[#748da7] hover:text-white transition-colors"
                       onclick="scrollToSection('our-solution')">
                        Our Solution
                    </a>
                    <a href="#meet-your-host"
                       class="block text-[#748da7] hover:text-white transition-colors"
                       onclick="scrollToSection('meet-your-host')">
                        Meet Your Host
                    </a>
                    <a href="#proven-impact"
                       class="block text-[#748da7] hover:text-white transition-colors"
                       onclick="scrollToSection('proven-impact')">
                        Proven Impact
                    </a>
                    <a href="#join-us"
                       class="block text-[#748da7] hover:text-white transition-colors"
                       onclick="scrollToSection('join-us')">
                        Join Us
                    </a>
                </nav>
            </div>



            <div>
                <h3 class="text-white text-xl font-semibold mb-6">Template Pages</h3>
                <nav class="space-y-1">
                    <a class="block text-[#748da7] hover:text-white transition-colors">Style Guide</a>
                    <a class="block text-[#748da7] hover:text-white transition-colors">Changelog</a>
                    <a class="block text-[#748da7] hover:text-white transition-colors">Licenses</a>
                </nav>
            </div>
        </div>


        <div class="mt-16 text-center text-xl">
            <p class="text-[#748da7]">Powered by Webflow</p>
        </div>
    </div>
</footer>

<script>
    function scrollToSection(sectionId) {
        event.preventDefault();
        const section = document.getElementById(sectionId);
        const navbarHeight = document.getElementById('navbar')?.offsetHeight || 0;

        if (section) {
            const targetPosition = section.offsetTop - navbarHeight;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        if (window.location.hash) {
            const sectionId = window.location.hash.substring(1);
            setTimeout(() => {
                scrollToSection(sectionId);
            }, 100);
        }
    });
</script>



</body>
</html>

