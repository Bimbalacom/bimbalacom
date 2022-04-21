@extends('theme::layouts.app')

@section('content')

{{-- Start header --}}
    <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
        <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
            <h1 class="text-5xl font-bold text-white lg:text-6xl xl:text-7xl">{{ theme('home_headline') }}</h1>
            <p class="text-base text-blue-200 lg:text-xl">{{ theme('home_subheadline') }} {{-- -  {{ theme('home_description') }} --}}</p>
            <div class="flex flex-col items-center w-full mb-10 sm:flex-row sm:mb-20">
                <a href="{{ theme('home_cta_url') }}" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out bg-white sm:w-auto focus:outline-none rounded">Demo </a>
                <a href="https://calendly.com/bimbalacom/30min" class="w-full px-8 py-3 mt-5 ml-3 text-lg text-center text-white transition duration-150 ease-in-out bg-transparent border border-white sm:ml-6 sm:w-auto sm:mt-0 focus:outline-none hover:bg-white hover:text-blue-700 rounded">Book a demo</a>
            </div>
        </div>
        <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
            <svg class="absolute top-0 right-0 z-0 hidden w-32 h-32 -mt-12 -mr-12 text-blue-300 fill-current md:block" viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g fill-rule="nonzero"><g><g><circle cx="3.261" cy="3.445" r="2.72"></circle><circle cx="15.296" cy="3.445" r="2.719"></circle><circle cx="27.333" cy="3.445" r="2.72"></circle><circle cx="39.369" cy="3.445" r="2.72"></circle><circle cx="51.405" cy="3.445" r="2.72"></circle><circle cx="63.441" cy="3.445" r="2.72"></circle><circle cx="75.479" cy="3.445" r="2.72"></circle><circle cx="87.514" cy="3.445" r="2.719"></circle></g><g transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"></circle><circle cx="15.296" cy="3.525" r="2.719"></circle><circle cx="27.333" cy="3.525" r="2.72"></circle><circle cx="39.369" cy="3.525" r="2.72"></circle><circle cx="51.405" cy="3.525" r="2.72"></circle><circle cx="63.441" cy="3.525" r="2.72"></circle><circle cx="75.479" cy="3.525" r="2.72"></circle><circle cx="87.514" cy="3.525" r="2.719"></circle></g><g transform="translate(0 24)"><circle cx="3.261" cy="3.605" r="2.72"></circle><circle cx="15.296" cy="3.605" r="2.719"></circle><circle cx="27.333" cy="3.605" r="2.72"></circle><circle cx="39.369" cy="3.605" r="2.72"></circle><circle cx="51.405" cy="3.605" r="2.72"></circle><circle cx="63.441" cy="3.605" r="2.72"></circle><circle cx="75.479" cy="3.605" r="2.72"></circle><circle cx="87.514" cy="3.605" r="2.719"></circle></g><g transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"></circle><circle cx="15.296" cy="3.686" r="2.719"></circle><circle cx="27.333" cy="3.686" r="2.72"></circle><circle cx="39.369" cy="3.686" r="2.72"></circle><circle cx="51.405" cy="3.686" r="2.72"></circle><circle cx="63.441" cy="3.686" r="2.72"></circle><circle cx="75.479" cy="3.686" r="2.72"></circle><circle cx="87.514" cy="3.686" r="2.719"></circle></g><g transform="translate(0 49)"><circle cx="3.261" cy="2.767" r="2.72"></circle><circle cx="15.296" cy="2.767" r="2.719"></circle><circle cx="27.333" cy="2.767" r="2.72"></circle><circle cx="39.369" cy="2.767" r="2.72"></circle><circle cx="51.405" cy="2.767" r="2.72"></circle><circle cx="63.441" cy="2.767" r="2.72"></circle><circle cx="75.479" cy="2.767" r="2.72"></circle><circle cx="87.514" cy="2.767" r="2.719"></circle></g><g transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"></circle><circle cx="15.296" cy="2.846" r="2.719"></circle><circle cx="27.333" cy="2.846" r="2.72"></circle><circle cx="39.369" cy="2.846" r="2.72"></circle><circle cx="51.405" cy="2.846" r="2.72"></circle><circle cx="63.441" cy="2.846" r="2.72"></circle><circle cx="75.479" cy="2.846" r="2.72"></circle><circle cx="87.514" cy="2.846" r="2.719"></circle></g><g transform="translate(0 73)"><circle cx="3.261" cy="2.926" r="2.72"></circle><circle cx="15.296" cy="2.926" r="2.719"></circle><circle cx="27.333" cy="2.926" r="2.72"></circle><circle cx="39.369" cy="2.926" r="2.72"></circle><circle cx="51.405" cy="2.926" r="2.72"></circle><circle cx="63.441" cy="2.926" r="2.72"></circle><circle cx="75.479" cy="2.926" r="2.72"></circle><circle cx="87.514" cy="2.926" r="2.719"></circle></g><g transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"></circle><circle cx="15.296" cy="3.006" r="2.719"></circle><circle cx="27.333" cy="3.006" r="2.72"></circle><circle cx="39.369" cy="3.006" r="2.72"></circle><circle cx="51.405" cy="3.006" r="2.72"></circle><circle cx="63.441" cy="3.006" r="2.72"></circle><circle cx="75.479" cy="3.006" r="2.72"></circle><circle cx="87.514" cy="3.006" r="2.719"></circle></g></g></g></g></svg>
            <div class="relative cursor-pointer group">
                <img src="{{URL::asset('themes/bimbala/images/hero-photo.jpg')}}" class="rounded-lg" fetchpriority="high" alt="{{ theme('home_subheadline') }}">
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 z-20 w-full h-full overflow-x-hidden opacity-50 bg-gradient-to-b from-transparent via-transparent to-black"></div>
</section>
{{--End header--}}
{{-- FEATURES SECTION --}}
    <section class="box-border relative w-full font-sans leading-6 text-gray-700 bg-white border-0 border-gray-200 border-solid">
    <div class="box-border flex flex-col items-center px-8 py-20 mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
        <div class="relative pb-10">
            <h2 class="w-full m-0 font-sans text-4xl font-black leading-loose tracking-wide text-center text-gray-700 border-0 border-gray-200 sm:text-5xl">
                Amazing Features
            </h2>
            <p class="mx-0 mx-auto mt-4 mb-0 font-sans text-sm font-medium leading-relaxed text-center text-gray-400 border-0 border-gray-200 lg:text-lg md:text-base">
                Here are part of our features and future plans.
            </p>
        </div>
        <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
        @foreach(config('features') as $feature)
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                       <img src="{{ $feature->image }}" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" loading="lazy" alt="{{ $feature->title }} - {{ $feature->description }}">
                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">{{ $feature->title }}</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            {{ $feature->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <br/>
        <p class="mx-0 mx-auto mt-4 mb-0 font-sans text-sm font-medium leading-relaxed text-center text-gray-400 border-0 border-gray-200 lg:text-lg md:text-base">
            * Still in alfa or backlog version. Every month we provide a major update
        </p>
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
<section class="bg-white relative">
    <div class="absolute inset-0 transform skew-y-1 bg-purple-900"></div>
        <div class="relative container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32 space-y-16">
            <!-- Heading -->
             <div class="relative w-full px-4 leading-6 text-center xl:flex-grow-0 xl:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0">
                <h2 class="box-border px-10 mx-0 mt-0 mb-10 font-sans text-2xl font-bold leading-tight text-white md:px-0 sm:text-3xl md:text-4xl">
                    Sign up for our newsletter to receive weekly tips and strategies
                </h2>
            <form action="https://bimbala.us17.list-manage.com/subscribe/post?u=118b625f8f6bac41ebe6c7be3&amp;id=e974cbc9ee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate class="box-border text-center text-indigo-900">
                <div class="flex flex-wrap justify-center leading-6 text-indigo-900">
                    <div class="box-border relative py-1 pr-1 text-center border-purple-500 rounded-full sm:border-2">
                    <input type="hidden" name="b_118b625f8f6bac41ebe6c7be3_e974cbc9ee" tabindex="-1" value="">
                    <input type="email" name="EMAIL" placeholder="Your email" class="inline-block w-full h-16 px-6 py-0 mb-6 overflow-visible text-xl font-semibold text-white placeholder-purple-300 align-top bg-transparent border-2 border-purple-500 rounded-full sm:w-auto sm:border-0 sm:mb-0 focus:outline-none md:text-left">
                        <button   id="mc-embedded-subscribe"  class="inline-block w-full h-16 px-10 py-0 m-0 overflow-visible text-xl font-semibold text-white normal-case align-middle bg-green-400 border border-transparent border-solid rounded-full cursor-pointer select-none sm:w-auto focus:outline-none focus:shadow-xs">
                            Sign Up
                        </button>
                    </div>
                </div>
            <div class="mt-8 leading-6 text-purple-300">
                 By signing up, you agree to the <a href="/terms-and-conditions">Terms and Conditions</a>.
            </div>
        </form>
    </div>
 </section>
{{-- Weekly mails --}}

{{-- Features with images --}}
<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> Level Up Your Support</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Helping your clients while, giving the needed tools for your support / marketing teams.</p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\feedback_form.svg') }}" loading="lazy" alt="Knowing your clients">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Drag-n-drop design</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Everything you need</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Helping your clients grow and know how to use your software is a key thing for a successful company. We can help with that!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\control_center.svg') }}" loading="lazy" alt="Make an optimized dedicated support portal">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Make an optimized dedicated support portal</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">In your portal you will have access to stack of various tools. We will help you automate your workflow and satisfy your customers' expectations. Make them part of your product!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\better_decision.svg') }}" loading="lazy" alt="Better decision making">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Better decisions</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Better decision making</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Asking your community is on of the best ways to know if you are going in the right path.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Features with images --}}
{{-- Integrations --}}
<section class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <h3 class="font-bold text-3xl sm:text-3xl lg:text-4xl mt-3">Connect with Your Favorite Apps.</h3>
        <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We're flexible.<br class="lg:hidden hidden sm:block"> Check out with who we are integrated  👇</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google-tag-manager.svg') }}" loading="lazy" alt="Google Tag Manager">
                <p class="font-bold mt-4">Google Tag Manager</p>
                <p class="mt-2 text-sm text-gray-500">Web Tag Manager</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\mailchimp.svg') }}" loading="lazy" alt="Mailchimp">
                <p class="font-bold mt-4">Mailchimp *</p>
                <p class="mt2 text-sm text-gray-500">Email Marketing</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\hubspot.svg') }}" loading="lazy" alt="Hubspot">
                <p class="font-bold mt-4">Hubspot *</p>
                <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
            <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\zendesk.svg') }}" loading="lazy" alt="Zendesk">
                <p class="font-bold mt-4">Zendesk *</p>
                <p class="mt-2 text-sm text-gray-500">Customer Messaging</p>
            </div>
        </div>
    </div>
</section>
{{--End of Integrations --}}

{{-- --}}
<section class="relative block pt-16 overflow-hidden leading-6 text-left text-white bg-purple-900 bg-no-repeat bg-cover sm:pt-20 md:pt-24">
    <div class="w-full max-w-5xl px-8 mx-auto leading-6 text-left xl:px-0">
        <div class="flex flex-wrap items-center justify-center flex-1 text-center text-white lg:text-left">
            <div class="relative w-full px-4 leading-6 text-left lg:w-7/12 xl:w-1/2">
                <h2 class="mx-0 mt-0 mb-5 font-sans text-4xl font-bold text-white">
                    Designed with your client in mind.
                </h2>
                <div class="pr-10 text-left text-purple-300">
                    Beautifully crafted HQ which provides you paying customer with an alternative to the boring old help desk.
                </div>
            </div>
            <div class="relative flex flex-col w-full px-4 mt-10 leading-6 text-left md:flex-row lg:w-5/12 xl:w-1/2 justifty-end">
                <a href="https://board.bimbala.com/" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 mb-8 text-xl font-semibold text-center text-white no-underline align-middle bg-green-400 border border-transparent border-solid rounded-full cursor-pointer select-none md:mb-0 md:mr-8 md:w-auto lg:px-7 xl:px-10 hover:bg-green-500 focus:shadow-xs focus:no-underline">
                    Our Demo
                </a>
                <a href="https://calendly.com/bimbalacom/30min" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 text-xl font-semibold text-center text-white no-underline align-middle bg-transparent border-2 border-purple-600 border-solid rounded-full cursor-pointer select-none md:w-auto lg:px-7 xl:px-10 hover:border-white hover:text-white focus:shadow-xs focus:no-underline">
                    Book a demo
                </a>
            </div>
        </div>
        <div class="flex flex-wrap justify-center max-w-5xl mx-auto mt-8 text-white md:mt-20">
            <div class="relative w-full px-4 leading-6 text-left xl:flex-grow-0 xl:flex-shrink-0">
                <div class="rounded-t-xl h-10 bg-gray-900 flex items-center space-x-1.5 justify-start relative overflow-hidden">
                    <div class="relative z-10 w-3 h-3 ml-3 bg-gray-700 rounded-full"></div>
                    <div class="relative z-10 w-3 h-3 bg-gray-700 rounded-full"></div>
                    <div class="relative z-10 w-3 h-3 bg-gray-700 rounded-full"></div>
                </div>

                <img src="{{URL::asset('themes/bimbala/images/demo.bimbala.jpg')}}" alt="Designed with your client in mind" class=" max-w-full text-white align-middle border-none" loading="lazy">
            </div>
        </div>
    </div>
</section>


@endsection
