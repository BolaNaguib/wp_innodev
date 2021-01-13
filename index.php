<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNODEV</title>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="absolute top-o left-0 w-full z-20 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">

            <div> <b class='text-2xl bg-secondary'> INNODEV</b></div>
            <div>
                <ul class="space-x-8">
                    <li class="inline-block dropdown">
                        <a class="relative py-2 block" href="#">Services</a>
                        <ul class="dropdown-menu hidden absolute  bg-main rounded text-sm">
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Service 1</a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Service 2</a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Service 3</a></li>
                        </ul>
                    </li>
                    <li class="inline-block dropdown">
                        <a class="relative py-2 block" href="#">About Us</a>
                        <ul class="dropdown-menu hidden absolute  bg-main rounded text-sm">
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Mission / Vision </a></li>

                        </ul>
                    </li>
                    <li class="inline-block dropdown">
                        <a class="relative py-2 block" href="#">Blog</a>
                        <ul class="dropdown-menu hidden absolute  bg-main rounded text-sm">
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">News </a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">News Letter </a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">News Events</a></li>

                        </ul>
                    </li>
                    <li class="inline-block dropdown">
                        <a class="relative py-2 block" href="#">Product Tour </a>

                    </li>
                    <li class="inline-block dropdown">
                        <a class="relative py-2 block" href="#">Contact Us</a>
                        <ul class="dropdown-menu hidden absolute  bg-main rounded text-sm">
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Apply Now </a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Q/As </a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Our Customers</a></li>
                            <li class="dropdownx relative"><a class="py-2 px-2 block hover:bg-black" href="#">Contact Us</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="h-screen relative z-10 leading-normal overflow-hidden" style="background:url() no-repeat; background-attachment: scroll;
	background-size: cover;
    background-position: center center;">
        <div class="z-30 bg-black w-full h-full absolute opacity-25 ">
        </div>
        <img loading="lazy" class="object-cover w-full h-full absolute z-20 ere" src="https://eskipaper.com/images/night-lights-picture-1.jpg" alt="" title="wp3704688">

        <div class="container mx-auto text-white font-semibold h-full flex items-center justify-center relative z-40 text-center">
            <div>
                <!--             <span class="text-sm lg:text-xl">NAVICO Egypt </span> -->
                <main class="">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl block">
                            <span class="block xl:inline">Data to enrich your</span>
                            <span class="block text-secondary bg-white px-2 rounded xl:inline">online business</span>
                        </h1>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center mt-8 block">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary bg-white px-2 rounded hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Live demo
                                </a>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </section>

    <style>
        .ere {
            animation: mymove 10s infinite;

        }

        @keyframes mymove {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);


            }

            100% {
                transform: scale(1);

            }
        }
    </style>



    <section>
        <div class="container mx-auto">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        <span class="block">Ready to dive in?</span>
                        <span class="block text-secondary">Start your free trial today.</span>
                    </h2>
                    <div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-indigo-700">
                                Get started
                            </a>
                        </div>
                        <div class="ml-3 inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-secondary bg-white hover:bg-indigo-50">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-secondary py-12">
        <div class="container mx-auto">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="py-12 bg-white rounded-lg shadow shadow-xl">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-secondary font-semibold tracking-wide uppercase">Transactions</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            A better way to send money
                        </p>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                            Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
                        </p>
                    </div>

                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                        <!-- Heroicon name: globe-alt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <dt class="text-lg leading-6 font-medium text-gray-900">
                                        Competitive exchange rates
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                    </dd>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                        <!-- Heroicon name: scale -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <dt class="text-lg leading-6 font-medium text-gray-900">
                                        No hidden fees
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                    </dd>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                        <!-- Heroicon name: lightning-bolt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <dt class="text-lg leading-6 font-medium text-gray-900">
                                        Transfers are instant
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                    </dd>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                        <!-- Heroicon name: annotation -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <dt class="text-lg leading-6 font-medium text-gray-900">
                                        Mobile notifications
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                    </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <div class="pt-0 pb-16 bg-white overflow-hidden lg:pt-12 lg:py-24">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404">
                <defs>
                    <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-white" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#svg-pattern-squares-1)"></rect>
            </svg>

            <div class="relative">
                <blockquote class="mt-8">
                    <div class="max-w-3xl mx-auto text-center text-xl leading-8 font-medium text-gray-900">
                        <p>
                            “We’ve gone through several iterations of our pricing page recently, and every time we wanted to try a new idea I was able to find the perfect starting point in Tailwind UI. It’s turned a project I might have never made the time to tackle into something I could finish and ship in an hour.”
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                            <div class="md:flex-shrink-0">
                                <img class="mx-auto h-10 w-10 rounded-full" src="https://tailwindui.com/img/justin-profile.jpg" alt="">
                            </div>
                            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                <div class="text-base font-medium text-gray-900">Justin Jackson</div>

                                <svg class="hidden md:block mx-1 h-5 w-5 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 0h3L9 20H6l5-20z"></path>
                                </svg>

                                <div class="text-base font-medium text-gray-500">
                                    Founder of
                                    <a href="https://transistor.fm">
                                        Transistor
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>




    <section class="relative ">
        <div class="absolute top-0 left-0 w-full -ml-1 bg-secondary h-full transform rotate-1 z-10 py-4"></div>
        <div class="absolute top-0 left-0 w-full -ml-1 bg-gray-200 h-full transform -rotate-1 z-0 py-4"></div>
        <div class="container mx-auto relative z-10 py-8">
            <div class="container max-w-screen-xl mx-auto pt-16 pb-16 text-gray-900">
                <h1 class="text-3xl font-semibold text-center text-primary">Get in touch <span role="img" aria-label="wave">👋</span></h1>
                <p class="px-4 mt-4 text-center text-white">Feel free to email me about anything. Want some advice? Give some feedback?</p>
                <div class="mx-auto  pt-10 flex justify-center"><a class="px-20 py-2 bg-white rounded accent-gradient text-on-accent" href="mailto:hey@jeffjadulco.com" target="_blank" rel="noopener noreferrer"><span class=" text-2xl font-semibold text-on-accent">Say hello</span></a></div>
            </div>
        </div>
    </section>


    <section class="bg-white  py-24">
        <div class="container mx-auto grid grid-cols-2 gap-8 md:grid-cols-4 py-8 text-center">
            <div>
                <h5 class="text-5xl font-bold text-secondary"><span class="inline text-secondary">2179</span><span class="text-indigo-200">+</span></h5>
                <p class="text-gray-800 tracking-wide text-xs font-medium uppercase">Cups of coffee</p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-secondary"><span class="inline text-secondary">13</span><span class="text-indigo-200">+</span></h5>
                <p class="text-gray-800 tracking-wide text-xs font-medium uppercase">Ongoing contracts</p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-secondary"><span class="inline text-secondary">31</span><span class="text-indigo-200">+</span></h5>
                <p class="text-gray-800 tracking-wide text-xs font-medium uppercase">Finished projects</p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-secondary"><span class="inline text-secondary">3</span><span class="text-indigo-200">+</span></h5>
                <p class="text-gray-800 tracking-wide text-xs font-medium uppercase">Years in business</p>
            </div>
        </div>
    </section>

    <section class="relative bg-secondary  py-24 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pb-20 text-center">
        <div>
            <h2 class="text-3xl leading-tight font-bold text-white">How it works</h2>
        </div>
        <div class="flex flex-col md:flex-row items-start justify-between mt-12">
            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4"><img src="https://memories2digital.com.au/img/pack.svg" alt="Pack up your photos" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8 text-secondary">Pack your photos</h4>
                <p class="text-gray-700 mt-2">Pack your photos into sets of up to 300 prints (separate by size).</p>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0"><img src="https://memories2digital.com.au/img/send.svg" alt="Book a pickup" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8 text-secondary">Book a Pickup</h4>
                <p class="text-gray-700 mt-2">Book a free local or courier pickup directly via our website or by
                    phone</p>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0"><img src="https://memories2digital.com.au/img/scan.svg" alt="We scan your Photos" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8 text-secondary">We scan your photos</h4>
                <p class="text-gray-700 mt-2">Your photos will be professionally scanned by our experts in Sydney.</p>
            </div>
        </div>

    </section>


    <section class="bg-gray-100">
        <div class="container mx-auto">
            <div class="pt-16 text-center">
                <h2 class="text-3xl leading-tight font-bold mb-3 text-secondary">Our Reviews</h2>
                <h4 class="text-gray-800">Check out some of our happy customers below or <a href="https://www.google.com/maps?cid=10328859097287825912" class="text-blue-600 hover:text-blue-700">on Google</a></h4>
            </div>
            <div class="mt-8 grid grid-cols-2 review-grid gap-6">
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block inline-block">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh4.googleusercontent.com/-LyZ6n5mcllM/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuck0OGAYB6Kfbtt0DwAFNS_1U7_nIA/c0x00000000-cc-rp/photo.jpg" alt="Nicola Watson" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">Nicola Watson</span> <span class="text-gray-500 ml-2 text-sm">a day ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s114677153204391714937!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">Had some photos scanned as a last minute Christmas present for my Mother and they turned out wonderful! Really appreciated the customer service and professionalism of this company and pricing was affordable and appropriate. Will definitely be recommended to my friends and family!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block inline-block">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh5.googleusercontent.com/-JcYLWZrzQH4/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnEO1N_VN5P_Qki1-koAcTsKWZqiQ/c0x00000000-cc-rp/photo.jpg" alt="Perry Shields" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">Perry Shields</span> <span class="text-gray-500 ml-2 text-sm">3 weeks ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s107496422491693480474!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">Great job with the photos. thank you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block inline-block">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh3.googleusercontent.com/a-/AOh14Ghn-JUwb6YuKZu_FXBkBxs8XDI4JQ29jJ4VlTlNGw=c0x00000000-cc-rp" alt="Oughzone" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">Oughzone</span> <span class="text-gray-500 ml-2 text-sm">3 weeks ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s111261640877925006839!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">I was nervous about leaving some very special photos to be scanned as I had never done this before. Hana reassured me that they would take great care of them and they did. Excellent service and good value and I have no hesitation in recommending Memories 3 Digital. Daniel</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block inline-block">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh3.googleusercontent.com/a-/AOh14GiUQwMldM7tsMqwC3fi35EdNv8C-xzaWYpINkxkdw=c0x00000000-cc-rp" alt="The Real Bushka" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">The Real Bushka</span> <span class="text-gray-500 ml-2 text-sm">a month ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s114351608331828951463!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">Fantastic service, very efficient and excellent quality digital scans of old black and white and colour photographs, the restored images were wonderful.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block hidden">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh3.googleusercontent.com/a-/AOh14GiWP9qo-QHbOgZJ54cig26IwQvhYt7P8Sfh6nWd2w=c0x00000000-cc-rp" alt="Fang" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">Fang</span> <span class="text-gray-500 ml-2 text-sm">a month ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s109257402506904422497!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">Sent them a 600+ negatives in a bag to be scanned. The service was quick, staff were helpful, got all my scans back on a USB stick and everything looks great. Thanks!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded p-4 mb-6 shadow sm:inline-block hidden">
                    <div class="flex items-start text-left">
                        <div class="flex-shrink-0">
                            <div class="inline-block relative">
                                <div class="relative w-16 h-16 rounded-full overflow-hidden"><img src="https://lh6.googleusercontent.com/-fq01LJPnKuw/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclg77nkGNtUBn_AyyVsi1Fe8TMIgQ/c0x00000000-cc-rp/photo.jpg" alt="A Msan" class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1">
                                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="flex items-baseline"><span class="text-gray-600 font-bold">A Msan</span> <span class="text-gray-500 ml-2 text-sm">2 months ago on <a href="https://www.google.com/maps/reviews/data=!4m5!14m4!1m3!1m2!1s101788971713340082831!2s0x0:0x8f577a9fd4e719f8?hl=en-AU" class="text-blue-600 hover:text-blue-700 text-xs">Google</a></span></p>
                            <div class="flex items-center mt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current text-yellow-600">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"></path>
                                </svg></div>
                            <div class="mt-3">
                                <p class="mt-1">My first job of scanning photos at the Memories 2 Digital Photo Scanning was fantastic. She completed the work quickly while I was waiting. Thanks for a great service..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-secondary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
            </div>
        </div>
    </section>



    <section class="text-white body-font bg-secondary ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-white sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-secondary flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-white text-lg title-font font-medium mb-2">Shooting Stars</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                    <a class="mt-3 text-secondary inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-white sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-white text-lg title-font font-medium mb-2">The Catalyzer</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                    <a class="mt-3 text-secondary inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-secondary flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-secondary flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-white text-lg title-font font-medium mb-2">The 400 Blows</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                    <a class="mt-3 text-secondary inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <button class="flex mx-auto mt-20 text-secondary bg-white border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
    </section>



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap w-full">
                <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-secondary inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
                            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-secondary inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
                            <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-secondary inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="3"></circle>
                                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
                            <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1 master cleanse blog taiyaki.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-secondary inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
                            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                        </div>
                    </div>
                    <div class="flex relative">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-secondary inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
                            <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
                        </div>
                    </div>
                </div>
                <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="https://eskipaper.com/images/night-lights-picture-1.jpg" alt="step">
            </div>
        </div>
    </section>




    <div class="relative">
        <div class="absolute top-0 right-0 p-24"><svg class="hidden lg:block h-48 w-48 transform rotate-180 text-indigo-300" viewBox="0 0 184 184" xmlns="http://www.w3.org/2000/svg">
                <path d="M182 184a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 40a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-20 80a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM22 144a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM2 144a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-60a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM2 4a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" fill="currentColor" fill-rule="evenodd"></path>
            </svg></div>
        <div class="absolute top-1/4 left-0 translate-l-full opacity-25 xl:opacity-100" style="z-index: -1;"><svg class="hidden md:block text-indigo-200" width="404" height="784" fill="none" viewBox="0 0 404 784" style="z-index: -1;">
                <defs>
                    <pattern id="pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="8" cy="8" r="2.5" fill="currentColor"></circle>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#pattern)"></rect>
            </svg></div>
        <div class="mx-auto container">
            <div class="py-10">
                <h1 class="text-4xl leading-tight font-black text-gray-900">Blog</h1>
            </div>
            <div class="md:flex items-center">
                <div class="md:w-7/12 w-full"><a href="/blog/applications/where-should-you-outsource-your-it-project">
                        <div class="rounded-lg gatsby-image-wrapper" style="position: relative; overflow: hidden;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div><img aria-hidden="true" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4gIcSUNDX1BST0ZJTEUAAQEAAAIMbGNtcwIQAABtbnRyUkdCIFhZWiAH3AABABkAAwApADlhY3NwQVBQTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAApkZXNjAAAA/AAAAF5jcHJ0AAABXAAAAAt3dHB0AAABaAAAABRia3B0AAABfAAAABRyWFlaAAABkAAAABRnWFlaAAABpAAAABRiWFlaAAABuAAAABRyVFJDAAABzAAAAEBnVFJDAAABzAAAAEBiVFJDAAABzAAAAEBkZXNjAAAAAAAAAANjMgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB0ZXh0AAAAAElYAABYWVogAAAAAAAA9tYAAQAAAADTLVhZWiAAAAAAAAADFgAAAzMAAAKkWFlaIAAAAAAAAG+iAAA49QAAA5BYWVogAAAAAAAAYpkAALeFAAAY2lhZWiAAAAAAAAAkoAAAD4QAALbPY3VydgAAAAAAAAAaAAAAywHJA2MFkghrC/YQPxVRGzQh8SmQMhg7kkYFUXdd7WtwegWJsZp8rGm/fdPD6TD////bAEMACQYGCAYFCQgHCAoJCQoNFg4NDAwNGhMUEBYfHCEgHxweHiMnMiojJS8lHh4rOywvMzU4ODghKj1BPDZBMjc4Nf/bAEMBCQoKDQsNGQ4OGTUkHiQ1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1Nf/AABEIAA8AFAMBIgACEQEDEQH/xAAYAAADAQEAAAAAAAAAAAAAAAAABAUDBv/EACMQAAIBAwMEAwAAAAAAAAAAAAECEQADBBIhMQUTFEFDofD/xAAUAQEAAAAAAAAAAAAAAAAAAAAE/8QAGxEAAgMBAQEAAAAAAAAAAAAAAQIAAxGRBCH/2gAMAwEAAhEDEQA/AOrvszM7llCLuSTx+mlVybDuoRg5PEbg8VDzeoZ2aHHislx3F17alNJbYCDMxAGxrWxnZE+V2GCRqEssxH1xTDdYvxRArRU51zseys42shkBQR6aQRRUrNvdRuZTNaxm0kD5gPQoopsuJ3T0x6p5goGDgn//2Q==" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                            <picture>
                                <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&amp;h=150&amp;q=50&amp;fm=webp 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&amp;h=300&amp;q=50&amp;fm=webp 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&amp;h=600&amp;q=50&amp;fm=webp 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&amp;h=900&amp;q=50&amp;fm=webp 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&amp;h=1200&amp;q=50&amp;fm=webp 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&amp;h=1800&amp;q=50&amp;fm=webp 2400w" sizes="(max-width: 800px) 100vw, 800px">
                                <source srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&amp;h=150&amp;q=50 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&amp;h=300&amp;q=50 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&amp;h=600&amp;q=50 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&amp;h=900&amp;q=50 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&amp;h=1200&amp;q=50 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&amp;h=1800&amp;q=50 2400w" sizes="(max-width: 800px) 100vw, 800px"><img sizes="(max-width: 800px) 100vw, 800px" srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&amp;h=150&amp;q=50 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&amp;h=300&amp;q=50 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&amp;h=600&amp;q=50 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&amp;h=900&amp;q=50 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&amp;h=1200&amp;q=50 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&amp;h=1800&amp;q=50 2400w" src="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&amp;q=50" alt="" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                            </picture><noscript>
                                <picture>
                                    <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&h=150&q=50&fm=webp 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&h=300&q=50&fm=webp 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&h=600&q=50&fm=webp 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&h=900&q=50&fm=webp 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&h=1200&q=50&fm=webp 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&h=1800&q=50&fm=webp 2400w" sizes="(max-width: 800px) 100vw, 800px" />
                                    <source srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&h=150&q=50 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&h=300&q=50 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&h=600&q=50 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&h=900&q=50 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&h=1200&q=50 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&h=1800&q=50 2400w" sizes="(max-width: 800px) 100vw, 800px" /><img loading="lazy" sizes="(max-width: 800px) 100vw, 800px" srcset="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=200&h=150&q=50 200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=400&h=300&q=50 400w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&h=600&q=50 800w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1200&h=900&q=50 1200w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=1600&h=1200&q=50 1600w,
//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=2400&h=1800&q=50 2400w" src="//images.ctfassets.net/yuqjxadbvgbj/9xLt6DeWnijOfZt5azmRo/ecf1bcb7ae289b4769c2ff6a86b22229/reiseuhu-MEQ5FsJe1eI-unsplash.jpg?w=800&q=50" alt="" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                </picture>
                            </noscript>
                        </div>
                    </a></div>
                <div class="md:w-5/12 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-xs leading-none font-semibold text-white bg-secondary py-2 px-3 rounded-lg inline-block uppercase tracking-wide"><a class="hover:underline" href="/blog/applications">Applications</a></p><a class="block" href="/blog/applications/where-should-you-outsource-your-it-project">
                            <h3 class="mt-3 text-3xl md:text-4xl leading-none hover:text-secondary transition duration-500 font-semibold text-gray-900">Where should you outsource your IT project?</h3>
                            <p class="mt-3 md:mt-6 text-lg md:text-xl leading-6 text-gray-500">When finding a contractor for your project, it is better to hire a company from your country or maybe from abroad</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0"><span>
                                <div class="h-32 w-32 rounded-full gatsby-image-wrapper" style="position: relative; overflow: hidden; display: inline-block; width: 48px; height: 48px;"><img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAB3RJTUUH5AkYExYzZJQn3QAAA99JREFUGBklwctvVFUcAODze5x7Z+68O0xbKJ0qUEQUxNgYRYNgCFE0JLpg7cJE/wJNTIxx79qFiQv/CxcmBCRRE1AkxXYYO4U+melM5z333nPPw4LfB+9euYQyvddszc2U0kH61z+W3/rg48vXrre31hHs999+8dHViz4Te+RJT0pJUiIzPcOdTqd67ORC9chgMCgUi04IHYW//fjNLIzaw+j911/wJSIgISGRQARA+h8zn39jKeEM6jhJlPQ8a93G3RtfX1m89t71EFOrjce/1FtdZYAJiRARCJ8iYpZ4+04tMuiEQCKB4Jw7kXNnqpXIUrY8s3T2pVPz00hESHiAGQkRiZ/ymFh0uj0pzLEzS6PmxtJi9ZPXcqlUvvVovRgmSgidLiC28QA9g3yAiJEY37x46cWXTx3KSmZkJgyys5VDU1OVHGLOS6ezeRGFCIhExAek9CQzEzERoUV/bWVFa03MRLTZHizzXKOxqqxtNTe1da39LhIekEz5gKcyspTxsmkpGXl7p7549rSnwfO8kKXWCQpnrAFLTvo/3b63P1F+ymdCQrDWAgiPAYiUI1xfu9XbqavWIxUrJDI6eT4wYZJ0hd414s/6FhN6EpkcgnMCrHXMnGLMBmkuUjkjoFIM1lrN3cdbEmD+zLkCnJMq3i4ev/Xdz/XdeHG+vHAkP1v2wFnn7GA42laQZDXjfqe51f7nwdZq40kQZCvFKc9PtTl/c3X9lbMcBIVhjCtb4VrLXj5fniWtEzGO49ag45vDeOHTr54MqdXVhXwJEQ/PTAfTVRWGtdrDcDLOBOm076dSKSnl3YeDUNko0bExgZcaRz2cKQXRsO/7HhExcXX+iJR0595yEo36gyEhHUBiY914HK3smDBSxlgAoeIhbzY2nBMCHBNpIcqlHAA2Nze3h+XBeAIIiJT2uT8YE8v6Rt8DzgdJMxorqbl2/74T4KwhJgDIZ9JAvLIzrk6XJBhCem5+GpCa7X1AdIAPHvvHj2bKWVcuTmFzd08nCQgLQgCIUiEXDrrSjijpd3sjImps7j1sbPd63X9r94e99ng8/v2v9Vp96JFkIdBY5QkJQjhnAw8n+03p9N8bg2y5I4RQKlZaI1GOVa/TjMOJn8mJwsLN2jIicTgZCWEBQQg7OzcHfrDedScqHE36xhhnrTXGWcMicWoEJiwWS+niYZ1MoXVgBTqrnTFCiEyKTaIXKqmMz3t9pa0RQkzCSaJC59ypo8UvPzxdFu24uw1mwlE4MlpZqwGtcFa6OIpiMGblicinhkolwjkdh9Gwy6g/u3Dy+tW333m18/kPNx7tNv8DzSb4wAdDxLAAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                    <picture>
                                        <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50&amp;fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50&amp;fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50&amp;fm=webp 2x">
                                        <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x"><img srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" width="48" height="48" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                    </picture><noscript>
                                        <picture>
                                            <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50&fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50&fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50&fm=webp 2x" />
                                            <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" /><img loading="lazy" width="48" height="48" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                        </picture>
                                    </noscript>
                                </div>
                            </span></div>
                        <div class="ml-3 mt-1">
                            <p class="text-lg leading-5 font-medium text-gray-900"><span>Dawid Rubin</span></p>
                            <div class="flex text-sm leading-5 text-gray-500"><time datetime="09.09.2020 20:17">09.09.2020 20:17</time><span class="mx-1">·</span><span>4 min read</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4 my-8">
                <div class="rounded shadow-lg overflow-hidden">
                    <div class="bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xs leading-none font-semibold text-white bg-secondary py-2 px-3 rounded-lg inline-block uppercase tracking-wide"><a class="hover:underline" href="/blog/applications">Applications</a></p><a class="block" href="/blog/applications/12-rules-for-creating-successful-application-specification">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">12 rules for creating successful application specification</h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">How to write a proper application specification that will help developers turn your app idea into life</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0"><span>
                                    <div class="h-10 w-10 rounded-full gatsby-image-wrapper" style="position: relative; overflow: hidden; display: inline-block; width: 48px; height: 48px;"><img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAB3RJTUUH5AkYExYzZJQn3QAAA99JREFUGBklwctvVFUcAODze5x7Z+68O0xbKJ0qUEQUxNgYRYNgCFE0JLpg7cJE/wJNTIxx79qFiQv/CxcmBCRRE1AkxXYYO4U+melM5z333nPPw4LfB+9euYQyvddszc2U0kH61z+W3/rg48vXrre31hHs999+8dHViz4Te+RJT0pJUiIzPcOdTqd67ORC9chgMCgUi04IHYW//fjNLIzaw+j911/wJSIgISGRQARA+h8zn39jKeEM6jhJlPQ8a93G3RtfX1m89t71EFOrjce/1FtdZYAJiRARCJ8iYpZ4+04tMuiEQCKB4Jw7kXNnqpXIUrY8s3T2pVPz00hESHiAGQkRiZ/ymFh0uj0pzLEzS6PmxtJi9ZPXcqlUvvVovRgmSgidLiC28QA9g3yAiJEY37x46cWXTx3KSmZkJgyys5VDU1OVHGLOS6ezeRGFCIhExAek9CQzEzERoUV/bWVFa03MRLTZHizzXKOxqqxtNTe1da39LhIekEz5gKcyspTxsmkpGXl7p7549rSnwfO8kKXWCQpnrAFLTvo/3b63P1F+ymdCQrDWAgiPAYiUI1xfu9XbqavWIxUrJDI6eT4wYZJ0hd414s/6FhN6EpkcgnMCrHXMnGLMBmkuUjkjoFIM1lrN3cdbEmD+zLkCnJMq3i4ev/Xdz/XdeHG+vHAkP1v2wFnn7GA42laQZDXjfqe51f7nwdZq40kQZCvFKc9PtTl/c3X9lbMcBIVhjCtb4VrLXj5fniWtEzGO49ag45vDeOHTr54MqdXVhXwJEQ/PTAfTVRWGtdrDcDLOBOm076dSKSnl3YeDUNko0bExgZcaRz2cKQXRsO/7HhExcXX+iJR0595yEo36gyEhHUBiY914HK3smDBSxlgAoeIhbzY2nBMCHBNpIcqlHAA2Nze3h+XBeAIIiJT2uT8YE8v6Rt8DzgdJMxorqbl2/74T4KwhJgDIZ9JAvLIzrk6XJBhCem5+GpCa7X1AdIAPHvvHj2bKWVcuTmFzd08nCQgLQgCIUiEXDrrSjijpd3sjImps7j1sbPd63X9r94e99ng8/v2v9Vp96JFkIdBY5QkJQjhnAw8n+03p9N8bg2y5I4RQKlZaI1GOVa/TjMOJn8mJwsLN2jIicTgZCWEBQQg7OzcHfrDedScqHE36xhhnrTXGWcMicWoEJiwWS+niYZ1MoXVgBTqrnTFCiEyKTaIXKqmMz3t9pa0RQkzCSaJC59ypo8UvPzxdFu24uw1mwlE4MlpZqwGtcFa6OIpiMGblicinhkolwjkdh9Gwy6g/u3Dy+tW333m18/kPNx7tNv8DzSb4wAdDxLAAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                        <picture>
                                            <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50&amp;fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50&amp;fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50&amp;fm=webp 2x">
                                            <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x"><img srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" width="48" height="48" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50&fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50&fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50&fm=webp 2x" />
                                                <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" /><img loading="lazy" width="48" height="48" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </span></div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900"><span>Dawid Rubin</span></p>
                                <div class="flex text-sm leading-5 text-gray-500"><time datetime="23.05.2020 15:01">23.05.2020 15:01</time><span class="mx-1">·</span><span>7 min read</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded shadow-lg overflow-hidden">
                    <div class="bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xs leading-none font-semibold text-white bg-secondary py-2 px-3 rounded-lg inline-block uppercase tracking-wide"><a class="hover:underline" href="/blog/websites">Websites</a></p><a class="block" href="/blog/websites/why-your-wordpress-website-is-bad">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">Why your Wordpress site may not be the way to go</h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">Why using Wordpress may not be the best choice for your business and how to utilize modern technologies to increase sales</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0"><span>
                                    <div class="h-10 w-10 rounded-full gatsby-image-wrapper" style="position: relative; overflow: hidden; display: inline-block; width: 48px; height: 48px;"><img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAB3RJTUUH5AkYExYzZJQn3QAAA99JREFUGBklwctvVFUcAODze5x7Z+68O0xbKJ0qUEQUxNgYRYNgCFE0JLpg7cJE/wJNTIxx79qFiQv/CxcmBCRRE1AkxXYYO4U+melM5z333nPPw4LfB+9euYQyvddszc2U0kH61z+W3/rg48vXrre31hHs999+8dHViz4Te+RJT0pJUiIzPcOdTqd67ORC9chgMCgUi04IHYW//fjNLIzaw+j911/wJSIgISGRQARA+h8zn39jKeEM6jhJlPQ8a93G3RtfX1m89t71EFOrjce/1FtdZYAJiRARCJ8iYpZ4+04tMuiEQCKB4Jw7kXNnqpXIUrY8s3T2pVPz00hESHiAGQkRiZ/ymFh0uj0pzLEzS6PmxtJi9ZPXcqlUvvVovRgmSgidLiC28QA9g3yAiJEY37x46cWXTx3KSmZkJgyys5VDU1OVHGLOS6ezeRGFCIhExAek9CQzEzERoUV/bWVFa03MRLTZHizzXKOxqqxtNTe1da39LhIekEz5gKcyspTxsmkpGXl7p7549rSnwfO8kKXWCQpnrAFLTvo/3b63P1F+ymdCQrDWAgiPAYiUI1xfu9XbqavWIxUrJDI6eT4wYZJ0hd414s/6FhN6EpkcgnMCrHXMnGLMBmkuUjkjoFIM1lrN3cdbEmD+zLkCnJMq3i4ev/Xdz/XdeHG+vHAkP1v2wFnn7GA42laQZDXjfqe51f7nwdZq40kQZCvFKc9PtTl/c3X9lbMcBIVhjCtb4VrLXj5fniWtEzGO49ag45vDeOHTr54MqdXVhXwJEQ/PTAfTVRWGtdrDcDLOBOm076dSKSnl3YeDUNko0bExgZcaRz2cKQXRsO/7HhExcXX+iJR0595yEo36gyEhHUBiY914HK3smDBSxlgAoeIhbzY2nBMCHBNpIcqlHAA2Nze3h+XBeAIIiJT2uT8YE8v6Rt8DzgdJMxorqbl2/74T4KwhJgDIZ9JAvLIzrk6XJBhCem5+GpCa7X1AdIAPHvvHj2bKWVcuTmFzd08nCQgLQgCIUiEXDrrSjijpd3sjImps7j1sbPd63X9r94e99ng8/v2v9Vp96JFkIdBY5QkJQjhnAw8n+03p9N8bg2y5I4RQKlZaI1GOVa/TjMOJn8mJwsLN2jIicTgZCWEBQQg7OzcHfrDedScqHE36xhhnrTXGWcMicWoEJiwWS+niYZ1MoXVgBTqrnTFCiEyKTaIXKqmMz3t9pa0RQkzCSaJC59ypo8UvPzxdFu24uw1mwlE4MlpZqwGtcFa6OIpiMGblicinhkolwjkdh9Gwy6g/u3Dy+tW333m18/kPNx7tNv8DzSb4wAdDxLAAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                        <picture>
                                            <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50&amp;fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50&amp;fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50&amp;fm=webp 2x">
                                            <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x"><img srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" width="48" height="48" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50&fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50&fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50&fm=webp 2x" />
                                                <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" /><img loading="lazy" width="48" height="48" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </span></div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900"><span>Dawid Rubin</span></p>
                                <div class="flex text-sm leading-5 text-gray-500"><time datetime="02.03.2020 14:45">02.03.2020 14:45</time><span class="mx-1">·</span><span>7 min read</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded shadow-lg overflow-hidden">
                    <div class="bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xs leading-none font-semibold text-white bg-secondary py-2 px-3 rounded-lg inline-block uppercase tracking-wide"><a class="hover:underline" href="/blog/marketing">Marketing</a></p><a class="block" href="/blog/marketing/google-my-business">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">Google My Business - your window to the world</h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">When setting up a business, you were probably wondering where to start. While the purchase of tools, equipment, premises</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0"><span>
                                    <div class="h-10 w-10 rounded-full gatsby-image-wrapper" style="position: relative; overflow: hidden; display: inline-block; width: 48px; height: 48px;"><img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAB3RJTUUH5AkYExYzZJQn3QAAA99JREFUGBklwctvVFUcAODze5x7Z+68O0xbKJ0qUEQUxNgYRYNgCFE0JLpg7cJE/wJNTIxx79qFiQv/CxcmBCRRE1AkxXYYO4U+melM5z333nPPw4LfB+9euYQyvddszc2U0kH61z+W3/rg48vXrre31hHs999+8dHViz4Te+RJT0pJUiIzPcOdTqd67ORC9chgMCgUi04IHYW//fjNLIzaw+j911/wJSIgISGRQARA+h8zn39jKeEM6jhJlPQ8a93G3RtfX1m89t71EFOrjce/1FtdZYAJiRARCJ8iYpZ4+04tMuiEQCKB4Jw7kXNnqpXIUrY8s3T2pVPz00hESHiAGQkRiZ/ymFh0uj0pzLEzS6PmxtJi9ZPXcqlUvvVovRgmSgidLiC28QA9g3yAiJEY37x46cWXTx3KSmZkJgyys5VDU1OVHGLOS6ezeRGFCIhExAek9CQzEzERoUV/bWVFa03MRLTZHizzXKOxqqxtNTe1da39LhIekEz5gKcyspTxsmkpGXl7p7549rSnwfO8kKXWCQpnrAFLTvo/3b63P1F+ymdCQrDWAgiPAYiUI1xfu9XbqavWIxUrJDI6eT4wYZJ0hd414s/6FhN6EpkcgnMCrHXMnGLMBmkuUjkjoFIM1lrN3cdbEmD+zLkCnJMq3i4ev/Xdz/XdeHG+vHAkP1v2wFnn7GA42laQZDXjfqe51f7nwdZq40kQZCvFKc9PtTl/c3X9lbMcBIVhjCtb4VrLXj5fniWtEzGO49ag45vDeOHTr54MqdXVhXwJEQ/PTAfTVRWGtdrDcDLOBOm076dSKSnl3YeDUNko0bExgZcaRz2cKQXRsO/7HhExcXX+iJR0595yEo36gyEhHUBiY914HK3smDBSxlgAoeIhbzY2nBMCHBNpIcqlHAA2Nze3h+XBeAIIiJT2uT8YE8v6Rt8DzgdJMxorqbl2/74T4KwhJgDIZ9JAvLIzrk6XJBhCem5+GpCa7X1AdIAPHvvHj2bKWVcuTmFzd08nCQgLQgCIUiEXDrrSjijpd3sjImps7j1sbPd63X9r94e99ng8/v2v9Vp96JFkIdBY5QkJQjhnAw8n+03p9N8bg2y5I4RQKlZaI1GOVa/TjMOJn8mJwsLN2jIicTgZCWEBQQg7OzcHfrDedScqHE36xhhnrTXGWcMicWoEJiwWS+niYZ1MoXVgBTqrnTFCiEyKTaIXKqmMz3t9pa0RQkzCSaJC59ypo8UvPzxdFu24uw1mwlE4MlpZqwGtcFa6OIpiMGblicinhkolwjkdh9Gwy6g/u3Dy+tW333m18/kPNx7tNv8DzSb4wAdDxLAAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                        <picture>
                                            <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50&amp;fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50&amp;fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50&amp;fm=webp 2x">
                                            <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x"><img srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" width="48" height="48" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50&fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50&fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50&fm=webp 2x" />
                                                <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" /><img loading="lazy" width="48" height="48" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </span></div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900"><span>Dawid Rubin</span></p>
                                <div class="flex text-sm leading-5 text-gray-500"><time datetime="25.02.2020 17:47">25.02.2020 17:47</time><span class="mx-1">·</span><span>3 min read</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded shadow-lg overflow-hidden">
                    <div class="bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xs leading-none font-semibold text-white bg-secondary py-2 px-3 rounded-lg inline-block uppercase tracking-wide"><a class="hover:underline" href="/blog/websites">Websites</a></p><a class="block" href="/blog/websites/your-own-website-must-have-or-unncecessary-expense">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">Your own website. Must have or unnecessary expense?</h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">Are you wondering if your company needs a website? Or maybe you are a freelancer and do not know if such an expense</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0"><span>
                                    <div class="h-10 w-10 rounded-full gatsby-image-wrapper" style="position: relative; overflow: hidden; display: inline-block; width: 48px; height: 48px;"><img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAB3RJTUUH5AkYExYzZJQn3QAAA99JREFUGBklwctvVFUcAODze5x7Z+68O0xbKJ0qUEQUxNgYRYNgCFE0JLpg7cJE/wJNTIxx79qFiQv/CxcmBCRRE1AkxXYYO4U+melM5z333nPPw4LfB+9euYQyvddszc2U0kH61z+W3/rg48vXrre31hHs999+8dHViz4Te+RJT0pJUiIzPcOdTqd67ORC9chgMCgUi04IHYW//fjNLIzaw+j911/wJSIgISGRQARA+h8zn39jKeEM6jhJlPQ8a93G3RtfX1m89t71EFOrjce/1FtdZYAJiRARCJ8iYpZ4+04tMuiEQCKB4Jw7kXNnqpXIUrY8s3T2pVPz00hESHiAGQkRiZ/ymFh0uj0pzLEzS6PmxtJi9ZPXcqlUvvVovRgmSgidLiC28QA9g3yAiJEY37x46cWXTx3KSmZkJgyys5VDU1OVHGLOS6ezeRGFCIhExAek9CQzEzERoUV/bWVFa03MRLTZHizzXKOxqqxtNTe1da39LhIekEz5gKcyspTxsmkpGXl7p7549rSnwfO8kKXWCQpnrAFLTvo/3b63P1F+ymdCQrDWAgiPAYiUI1xfu9XbqavWIxUrJDI6eT4wYZJ0hd414s/6FhN6EpkcgnMCrHXMnGLMBmkuUjkjoFIM1lrN3cdbEmD+zLkCnJMq3i4ev/Xdz/XdeHG+vHAkP1v2wFnn7GA42laQZDXjfqe51f7nwdZq40kQZCvFKc9PtTl/c3X9lbMcBIVhjCtb4VrLXj5fniWtEzGO49ag45vDeOHTr54MqdXVhXwJEQ/PTAfTVRWGtdrDcDLOBOm076dSKSnl3YeDUNko0bExgZcaRz2cKQXRsO/7HhExcXX+iJR0595yEo36gyEhHUBiY914HK3smDBSxlgAoeIhbzY2nBMCHBNpIcqlHAA2Nze3h+XBeAIIiJT2uT8YE8v6Rt8DzgdJMxorqbl2/74T4KwhJgDIZ9JAvLIzrk6XJBhCem5+GpCa7X1AdIAPHvvHj2bKWVcuTmFzd08nCQgLQgCIUiEXDrrSjijpd3sjImps7j1sbPd63X9r94e99ng8/v2v9Vp96JFkIdBY5QkJQjhnAw8n+03p9N8bg2y5I4RQKlZaI1GOVa/TjMOJn8mJwsLN2jIicTgZCWEBQQg7OzcHfrDedScqHE36xhhnrTXGWcMicWoEJiwWS+niYZ1MoXVgBTqrnTFCiEyKTaIXKqmMz3t9pa0RQkzCSaJC59ypo8UvPzxdFu24uw1mwlE4MlpZqwGtcFa6OIpiMGblicinhkolwjkdh9Gwy6g/u3Dy+tW333m18/kPNx7tNv8DzSb4wAdDxLAAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                        <picture>
                                            <source type="image/webp" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50&amp;fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50&amp;fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50&amp;fm=webp 2x">
                                            <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x"><img srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;h=48&amp;q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&amp;h=72&amp;q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&amp;h=96&amp;q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&amp;q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" width="48" height="48" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp' srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50&fm=webp 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50&fm=webp 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50&fm=webp 2x" />
                                                <source srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" /><img loading="lazy" width="48" height="48" srcset="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&h=48&q=50 1x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=72&h=72&q=50 1.5x,
//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=96&h=96&q=50 2x" src="//images.ctfassets.net/yuqjxadbvgbj/1wThehoaRyXL5S2c81pI1E/6ec9a12f1b0e6055eb1765e803531754/dawid_rubin.png?w=48&q=50" alt="Zdjęcie Dawida Rubina - specjalisty od SEO i marketingu" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </span></div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900"><span>Dawid Rubin</span></p>
                                <div class="flex text-sm leading-5 text-gray-500"><time datetime="25.02.2020 17:34">25.02.2020 17:34</time><span class="mx-1">·</span><span>4 min read</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12 flex justify-around">
                <ul class="flex">
                    <li class="mx-1 flex bg-gray-200 text-gray-500 rounded-full"><a aria-current="page" class="flex items-center font-bold px-2" href="/blog/"><span class="mx-1"><svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg></span></a></li>
                    <li class="mx-1 rounded-full flex items-center bg-secondary text-white hover:bg-black"><a aria-current="page" class="font-bold px-4 py-2" href="/blog/">1</a></li>
                    <li class="mx-1 flex bg-gray-200 text-gray-500 rounded-full"><a aria-current="page" class="flex items-center font-bold px-2" href="/blog/"><span class="mx-1"><svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></span></a></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="bg-secondary py-12">
        <div class="mx-auto container sm:flex justify-between items-center">
            <div class="sm:w-7/12">
                <h5 class="text-4xl font-bold text-white leading-tight">Are you ready for your next project?</h5>
                <p class="text-indigo-100">If you are ready to get started or just have an idea, but you don't have development skills to make your idea come to live - let us know. We'll be your guide in the IT world.</p>
            </div>
            <div class="sm:w-5/12 mt-6 sm:mt-0 text-right"><a class="btn-icon text-center w-full sm:w-auto group bg-white text-secondary hover:text-white hover:bg-black" href="/contact/">Let's talk business<svg class="h-6 ml-3 ease-in-out transition duration-500 transform group-hover:translate-x-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a></div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-600 py-12 text-sm">
        <!-- START container -->
        <div class="container mx-auto px-4">
            <!-- START grid grid-cols-4 -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- START footer card  -->
                <div>
                    <span class=" mb-4 block text-white font-semibold text-xl ">About INNODEV</span>
                    <p class="text-gray-600">We are INNODEV Home Collection, Textile Industrial Company based on Suez Freezone Area, Ataka, Suez, Egypt.</p>
                </div>
                <!-- END Footer Card  -->
                <!-- START footer card  -->
                <div>
                    <span class=" mb-4 block text-white font-semibold text-xl">Contact Us</span>
                    <ul>
                        <li class="flex items-center mb-2">
                            <span class=" w-4 h-4 mr-2 inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span> <span>test</span>
                        </li>
                        <li class="flex items-center  mb-2">
                            <span class=" w-4 h-4 mr-2 inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </span> <span>INNODEV@INNODEVeg.com</span>
                        </li>
                        <li class="flex items-center  mb-2">
                            <span class=" w-4 h-4 mr-2 inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </span> <span>
                                <a class="hover:text-secondary" href="tel:00201094993034">+201094993034</a> |
                                <a class="hover:text-secondary" href="tel:00201000666480">+201000666480</a>
                            </span>
                        </li>
                        <li class="flex items-center  mb-2">
                            <span class=" w-4 h-4 mr-2 inline-block">
                                <svg class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>

                            </span> <span>
                                <a class="hover:text-secondary" href="tel:0020623230274">+201000666480</a>
                            </span>
                        </li>
                        <li class="flex items-center  mb-2">
                            <span class=" w-4 h-4 mr-2 inline-block">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                </svg>
                            </span>
                            <span>Certificates Iso: 9001 – 2015</span>
                        </li>
                    </ul>

                </div>
                <!-- END Footer Card  -->
                <!-- START footer card  -->
                <div>
                    <span class=" mb-4 block text-white font-semibold text-xl ">Products</span>
                    <ul>
                        <li>
                            <a href="" class="text-white hover:text-secondary">About</a>
                        </li>

                    </ul>

                </div>
                <!-- END Footer Card  -->
                <!-- START footer card  -->


            </div>



        </div>
        <!-- END Footer Card  -->

        <!-- END grid grid-cols-4 -->

        <!-- END container -->
    </footer>

    <div class="bg-black">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-600 text-sm text-center sm:text-left">© 2020 INNODEV — Developed with <svg class="w-3 h-3 mx-1 inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#f00" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path>
                </svg>
                By
                <a href="https://inetwork-me.com/" class="text-gray-500 ml-1" rel="noopener noreferrer" target="_blank">Inetwork-ME</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a href="#" class="text-gray-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="#" class="ml-3 text-gray-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/navicoeg/" class="ml-3 text-gray-600">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="#" class="ml-3 text-gray-600">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>