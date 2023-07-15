@extends('theme::layouts.app')

@section('content')

{{-- Start header --}}
    <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
        <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
            <h1 class="text-4xl font-bold text-white lg:text-6xl xl:text-6xl">{{ theme('home_headline') }}</h1>
            <p class="text-base text-blue-200 lg:text-xl">{{ theme('home_subheadline') }} {{-- -  {{ theme('home_description') }} --}}</p>
            <div class="flex flex-col items-center w-full mb-10 sm:flex-row sm:mb-20">
                <a href="{{ theme('home_cta_url') }}" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out sm:w-auto focus:outline-none rounded">Demo </a>
                <a href="https://calendly.com/bimbalacom/30min" class="w-full px-8 py-3 mt-5 ml-3 text-lg text-center text-white transition duration-150 ease-in-out bg-transparent border border-white sm:ml-6 sm:w-auto sm:mt-0 focus:outline-none hover:bg-white hover:text-blue-700 rounded">Book a demo</a>
            </div>
        </div>
        <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
            <svg class="absolute top-0 right-0 z-0 hidden w-32 h-32 -mt-12 -mr-12 text-blue-300 fill-current md:block" viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g fill-rule="nonzero"><g><g><circle cx="3.261" cy="3.445" r="2.72"></circle><circle cx="15.296" cy="3.445" r="2.719"></circle><circle cx="27.333" cy="3.445" r="2.72"></circle><circle cx="39.369" cy="3.445" r="2.72"></circle><circle cx="51.405" cy="3.445" r="2.72"></circle><circle cx="63.441" cy="3.445" r="2.72"></circle><circle cx="75.479" cy="3.445" r="2.72"></circle><circle cx="87.514" cy="3.445" r="2.719"></circle></g><g transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"></circle><circle cx="15.296" cy="3.525" r="2.719"></circle><circle cx="27.333" cy="3.525" r="2.72"></circle><circle cx="39.369" cy="3.525" r="2.72"></circle><circle cx="51.405" cy="3.525" r="2.72"></circle><circle cx="63.441" cy="3.525" r="2.72"></circle><circle cx="75.479" cy="3.525" r="2.72"></circle><circle cx="87.514" cy="3.525" r="2.719"></circle></g><g transform="translate(0 24)"><circle cx="3.261" cy="3.605" r="2.72"></circle><circle cx="15.296" cy="3.605" r="2.719"></circle><circle cx="27.333" cy="3.605" r="2.72"></circle><circle cx="39.369" cy="3.605" r="2.72"></circle><circle cx="51.405" cy="3.605" r="2.72"></circle><circle cx="63.441" cy="3.605" r="2.72"></circle><circle cx="75.479" cy="3.605" r="2.72"></circle><circle cx="87.514" cy="3.605" r="2.719"></circle></g><g transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"></circle><circle cx="15.296" cy="3.686" r="2.719"></circle><circle cx="27.333" cy="3.686" r="2.72"></circle><circle cx="39.369" cy="3.686" r="2.72"></circle><circle cx="51.405" cy="3.686" r="2.72"></circle><circle cx="63.441" cy="3.686" r="2.72"></circle><circle cx="75.479" cy="3.686" r="2.72"></circle><circle cx="87.514" cy="3.686" r="2.719"></circle></g><g transform="translate(0 49)"><circle cx="3.261" cy="2.767" r="2.72"></circle><circle cx="15.296" cy="2.767" r="2.719"></circle><circle cx="27.333" cy="2.767" r="2.72"></circle><circle cx="39.369" cy="2.767" r="2.72"></circle><circle cx="51.405" cy="2.767" r="2.72"></circle><circle cx="63.441" cy="2.767" r="2.72"></circle><circle cx="75.479" cy="2.767" r="2.72"></circle><circle cx="87.514" cy="2.767" r="2.719"></circle></g><g transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"></circle><circle cx="15.296" cy="2.846" r="2.719"></circle><circle cx="27.333" cy="2.846" r="2.72"></circle><circle cx="39.369" cy="2.846" r="2.72"></circle><circle cx="51.405" cy="2.846" r="2.72"></circle><circle cx="63.441" cy="2.846" r="2.72"></circle><circle cx="75.479" cy="2.846" r="2.72"></circle><circle cx="87.514" cy="2.846" r="2.719"></circle></g><g transform="translate(0 73)"><circle cx="3.261" cy="2.926" r="2.72"></circle><circle cx="15.296" cy="2.926" r="2.719"></circle><circle cx="27.333" cy="2.926" r="2.72"></circle><circle cx="39.369" cy="2.926" r="2.72"></circle><circle cx="51.405" cy="2.926" r="2.72"></circle><circle cx="63.441" cy="2.926" r="2.72"></circle><circle cx="75.479" cy="2.926" r="2.72"></circle><circle cx="87.514" cy="2.926" r="2.719"></circle></g><g transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"></circle><circle cx="15.296" cy="3.006" r="2.719"></circle><circle cx="27.333" cy="3.006" r="2.72"></circle><circle cx="39.369" cy="3.006" r="2.72"></circle><circle cx="51.405" cy="3.006" r="2.72"></circle><circle cx="63.441" cy="3.006" r="2.72"></circle><circle cx="75.479" cy="3.006" r="2.72"></circle><circle cx="87.514" cy="3.006" r="2.719"></circle></g></g></g></g></svg>
            <div class="relative cursor-pointer group">
                <img src="{{URL::asset('themes/bimbala/images/hero-photo.jpg')}}" class="rounded-lg" fetchpriority="high" alt="{{ theme('home_subheadline') }}"  width="600" height="400">
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 z-20 w-full h-full overflow-x-hidden opacity-50 bg-gradient-to-b from-transparent via-transparent to-black"></div>
</section>
{{--End header--}}
{{-- FEATURES SECTION --}}
    <section class="box-border relative w-full leading-6 text-gray-700 bg-white border-0 border-gray-200 border-solid">
    <div class="box-border flex flex-col items-center px-8 py-20 mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
        <div class="relative pb-10">
            <h2 class="w-full m-0 text-4xl font-black leading-loose tracking-wide text-center border-0 border-gray-200 sm:text-5xl">
                Some of our features
            </h2>
            <p class="mx-auto mt-4 mb-0 text-sm font-medium leading-relaxed text-center text-gray-600 border-0 border-gray-200 lg:text-lg md:text-base">
                Here are some of the features our users love.
            </p>
        </div>
        <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
        @foreach(config('features') as $feature)
            <div class="col-span-3 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:">
                    <div class="flex-shrink-0 p-3 border border-gray-200 rounded-full">
                       <img src="{{ $feature->image }}" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" loading="lazy" alt="{{ $feature->title }} - {{ $feature->description }}"  width="28" height="28">
                    </div>
                    <div class="mt-4 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl text-left font-bold leading-none tracking-wide  border-solid">{{ $feature->title }}</h6>
                        <p class="box-border mx-0 mt-1 text-left mb-0 font-medium leading-loose text-gray-600 border-solid sm:mt-4">
                            {{ $feature->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{-- Blobs --}}
    {{-- Blob Left --}}
        <div class="absolute top-0 left-0 -ml-56 opacity-25 w-96 h-96">
            <svg class="text-pink-500 opacity-50 fill-current w-88 h-88" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5,-24.7C35.8,-15.2,48.9,-7.6,50.6,1.7C52.3,11,42.6,22,32.3,31.2C22,40.4,11,47.8,-1.9,49.8C-14.9,51.7,-29.7,48.1,-41.1,38.9C-52.5,29.7,-60.5,14.9,-60.3,0.3C-60,-14.3,-51.5,-28.6,-40,-38.1C-28.6,-47.6,-14.3,-52.3,-3.4,-48.9C7.6,-45.5,15.2,-34.2,25.5,-24.7Z" transform="translate(100 100)"></path>
            </svg>
        </div>
    </section>

{{-- Weekly mails --}}
<section class="w-ful">
    
</section><section class="py-24 overflow-hidden">
    <div class="px-8 mx-auto max-w-7xl lg:px-12 xl:px-16 ">
        <div class="flex flex-col lg:flex-row ">

            <!-- Left Content -->
            <div class="w-full lg:w-1/2 lg:pr-10">
                <div class="relative max-w-lg mx-auto leading-6 text-center text-gray-700 border-gray-200 lg:text-left">
                    <h1 class="m-0 text-3xl font-bold leading-tight text-left text-gray-900 border-solid sm:text-4xl md:text-5xl">
                        Sign up for our
                        <span class="block text-left text-purple-700" data-primary="purple-700">newsletter</span>
                    </h1>
                    <p class="pr-5 mx-0 my-5 text-base text-lef lg:my-8 xl:text-lg">
                        Components and layouts to help you rapidly build the next great idea. Built to convert your visitors into customers.
                    </p>
                    <form action="https://bimbala.us17.list-manage.com/subscribe/post?u=118b625f8f6bac41ebe6c7be3&amp;id=e974cbc9ee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" >
                        <div class="relative flex items-center max-w-md leading-6 text-center lg:mx-0">
                                <input type="hidden" name="b_118b625f8f6bac41ebe6c7be3_e974cbc9ee" tabindex="-1" value="">
                                <input type="email" name="EMAIL" placeholder="Your E-mail Address" class="w-full py-4 pr-0 m-0 overflow-visible font-medium duration-300 border-2 border-gray-200 rounded-full outline-none sm:py-5 sm:pr-48 cursor-text pl-7 focus:outline-none focus-within:border-purple-700 hover:border-gray-400" data-rounded="rounded-full">
                                <button id="mc-embedded-subscribe" class="absolute right-0 h-12 px-8 mr-3 text-white bg-purple-700 rounded-full" data-rounded="rounded-full" data-primary="purple-700">Get Started</button>
                        </div>
                    </form>
                    <div class="mt-12 leading-6 border-solid lg:mt-12">
                        <p class="m-0 text-sm tracking-wider">
                            By signing up, you agree to the <a href="/terms-and-conditions" class="font-bold">Terms and Conditions</a>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative w-full mt-20 lg:w-1/2 lg:mt-0 ">
                <img src="{{URL::asset('themes/bimbala/images/demo.bimbala.jpg')}}" class="relative z-10 p-0 mt-10 transform shadow-2xl rounded-xl lg:scale-110" data-rounded="rounded-xl" data-rounded-max="rounded-full">

                <div class="absolute top-0 right-0 w-full h-full mt-4 -mr-5 transform scale-125 rotate-45">
                    <svg class="absolute top-0 w-full h-full transform fill-current lg:scale-x-150 text-purple-50" data-primary="purple-600" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.5,-76.5C55.9,-68.2,65.2,-55.6,71.9,-42.1C78.5,-28.6,82.7,-14.3,81.3,-0.8C79.8,12.7,72.8,25.3,64.7,36.3C56.5,47.2,47.2,56.3,36.2,63.3C25.2,70.2,12.6,75,-1.1,76.9C-14.8,78.9,-29.7,78,-43.7,72.8C-57.7,67.6,-70.9,58.1,-79.3,45.2C-87.7,32.4,-91.2,16.2,-90.7,0.3C-90.3,-15.7,-85.9,-31.4,-76.4,-42.3C-66.9,-53.1,-52.3,-59.2,-38.7,-66.9C-25.1,-74.5,-12.6,-83.7,1.5,-86.3C15.6,-88.8,31.1,-84.8,43.5,-76.5Z" transform="translate(100 100)" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>
{{--End of Weekly mails --}}

{{-- Features with images --}}
<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> Level Up Your Support</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center intro sm:max-w-3xl">Helping your clients while, giving the needed tools for your support / marketing teams.</p>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes/bimbala/images/feedback.jpg') }}" loading="lazy" alt="Gathering your client feedback">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none  text-purple-600 uppercase">Gather your feedback</p>
                <h3 class="mt-2 text-2xl sm: md:text-4xl">An easy way to collect and organize feedback</h3>
                <p class="mt-5 text-lg text md:">Gathering feedback is a big hassle. You receive it from everywhere and it gets lost in woords. That is why Bimbala is here to help and adapt to your way of thinking.</p>
            </div>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes/bimbala/images/upvote.jpg') }}" loading="lazy" alt="Make an optimized dedicated support portal">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none  text-purple-600 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm: md:text-4xl">Analyze and use the users' feedback</h3>
                <p class="my-3 text-lg">Prioritize your product roadmap with data directly from your feedback board. Share your roadmap with others. </p>
                <p>
                    <ul class="list-disc ml-5">
                        <li>Real time input from users</li>
                        <li>Data-Driven work approach</li>
                    </ul>
            </p>
            </div>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes/bimbala/images/roadmap.jpg') }}" loading="lazy" alt="Better decision making">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none  text-purple-600 uppercase">Better decisions</p>
                <h3 class="mt-2 text-2xl sm: md:text-4xl">Better decision making</h3>
                <p class="mt-5 text-lg text-gray-700 text md:">Asking your community is on of the best ways to know if you are going in the right path.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Features with images --}}
{{-- Integrations --}}
<section class="py-12 sm:py-16 bg-white text-gray-700">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <h3 class="font-bold text-3xl sm:text-3xl lg:text-4xl mt-3">Connect with Your Favorite Apps</h3>
        <p class="mt-4 text-base sm:text-xl lg:text-2xl">We have integrate with 10+ other popular software<br class="lg:hidden hidden sm:block"> <a href="{{ route('integrations') }}" class="text-purple-900 font-bold">Check them out</a>  👇</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google-tag-manager.svg') }}" loading="lazy" alt="Google Tag Manager" width="64" height="64">
                <p class="font-bold mt-4">Google Tag Manager</p>
                <p class="mt-2 text-sm">Web Tag Manager</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\mailchimp.svg') }}" loading="lazy" alt="Mailchimp" width="64" height="64">
                <p class="font-bold mt-4">Mailchimp</p>
                <p class="mt2 text-sm">Email Marketing</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\hubspot.svg') }}" loading="lazy" alt="Hubspot" width="64" height="64">
                <p class="font-bold mt-4">Hubspot</p>
                <p class="mt-2 text-sm">Customer Relations</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\zapier.svg') }}" loading="lazy" alt="Zapier" width="64" height="64">
                <p class="font-bold mt-4">Zapier</p>
                <p class="mt-2 text-sm">Task Automation</p>
            </div>
        </div>
    </div>
</section>
{{--End of Integrations --}}

@endsection