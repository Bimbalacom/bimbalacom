@extends('theme::layouts.app')

@section('content')

{{-- Start header --}}
    <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
        <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
            <h1 class="text-5xl font-bold text-white lg:text-6xl xl:text-7xl">{{ theme('home_headline') }}</h1>
            <p class="text-base text-blue-200 lg:text-xl">{{ theme('home_subheadline') }} -  {{ theme('home_description') }}</p>
            <a href="{{ theme('home_cta_url') }}" class="flex items-center w-full px-5 py-3 mb-3 mr-1 text-base font-semibold text-white no-underline align-middle bg-purple-900 border border-transparent border-solid cursor-pointer select-none sm:mb-0 sm:w-auto hover:bg-purple-900 hover:border-purple-900 hover:text-white focus-within:bg-purple-900 focus-within:border-purple-900 rounded">
            {{ theme('home_cta') }}
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
            <svg class="absolute top-0 right-0 z-0 hidden w-32 h-32 -mt-12 -mr-12 text-blue-300 fill-current md:block" viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g fill-rule="nonzero"><g><g><circle cx="3.261" cy="3.445" r="2.72"></circle><circle cx="15.296" cy="3.445" r="2.719"></circle><circle cx="27.333" cy="3.445" r="2.72"></circle><circle cx="39.369" cy="3.445" r="2.72"></circle><circle cx="51.405" cy="3.445" r="2.72"></circle><circle cx="63.441" cy="3.445" r="2.72"></circle><circle cx="75.479" cy="3.445" r="2.72"></circle><circle cx="87.514" cy="3.445" r="2.719"></circle></g><g transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"></circle><circle cx="15.296" cy="3.525" r="2.719"></circle><circle cx="27.333" cy="3.525" r="2.72"></circle><circle cx="39.369" cy="3.525" r="2.72"></circle><circle cx="51.405" cy="3.525" r="2.72"></circle><circle cx="63.441" cy="3.525" r="2.72"></circle><circle cx="75.479" cy="3.525" r="2.72"></circle><circle cx="87.514" cy="3.525" r="2.719"></circle></g><g transform="translate(0 24)"><circle cx="3.261" cy="3.605" r="2.72"></circle><circle cx="15.296" cy="3.605" r="2.719"></circle><circle cx="27.333" cy="3.605" r="2.72"></circle><circle cx="39.369" cy="3.605" r="2.72"></circle><circle cx="51.405" cy="3.605" r="2.72"></circle><circle cx="63.441" cy="3.605" r="2.72"></circle><circle cx="75.479" cy="3.605" r="2.72"></circle><circle cx="87.514" cy="3.605" r="2.719"></circle></g><g transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"></circle><circle cx="15.296" cy="3.686" r="2.719"></circle><circle cx="27.333" cy="3.686" r="2.72"></circle><circle cx="39.369" cy="3.686" r="2.72"></circle><circle cx="51.405" cy="3.686" r="2.72"></circle><circle cx="63.441" cy="3.686" r="2.72"></circle><circle cx="75.479" cy="3.686" r="2.72"></circle><circle cx="87.514" cy="3.686" r="2.719"></circle></g><g transform="translate(0 49)"><circle cx="3.261" cy="2.767" r="2.72"></circle><circle cx="15.296" cy="2.767" r="2.719"></circle><circle cx="27.333" cy="2.767" r="2.72"></circle><circle cx="39.369" cy="2.767" r="2.72"></circle><circle cx="51.405" cy="2.767" r="2.72"></circle><circle cx="63.441" cy="2.767" r="2.72"></circle><circle cx="75.479" cy="2.767" r="2.72"></circle><circle cx="87.514" cy="2.767" r="2.719"></circle></g><g transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"></circle><circle cx="15.296" cy="2.846" r="2.719"></circle><circle cx="27.333" cy="2.846" r="2.72"></circle><circle cx="39.369" cy="2.846" r="2.72"></circle><circle cx="51.405" cy="2.846" r="2.72"></circle><circle cx="63.441" cy="2.846" r="2.72"></circle><circle cx="75.479" cy="2.846" r="2.72"></circle><circle cx="87.514" cy="2.846" r="2.719"></circle></g><g transform="translate(0 73)"><circle cx="3.261" cy="2.926" r="2.72"></circle><circle cx="15.296" cy="2.926" r="2.719"></circle><circle cx="27.333" cy="2.926" r="2.72"></circle><circle cx="39.369" cy="2.926" r="2.72"></circle><circle cx="51.405" cy="2.926" r="2.72"></circle><circle cx="63.441" cy="2.926" r="2.72"></circle><circle cx="75.479" cy="2.926" r="2.72"></circle><circle cx="87.514" cy="2.926" r="2.719"></circle></g><g transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"></circle><circle cx="15.296" cy="3.006" r="2.719"></circle><circle cx="27.333" cy="3.006" r="2.72"></circle><circle cx="39.369" cy="3.006" r="2.72"></circle><circle cx="51.405" cy="3.006" r="2.72"></circle><circle cx="63.441" cy="3.006" r="2.72"></circle><circle cx="75.479" cy="3.006" r="2.72"></circle><circle cx="87.514" cy="3.006" r="2.719"></circle></g></g></g></g></svg>
            <div class="relative cursor-pointer group">
            {{-- <div class="absolute flex items-center justify-center w-20 h-20 -mt-10 -ml-10 transition duration-150 ease-in-out transform bg-white bg-opacity-100 rounded-full top-1/2 left-1/2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-auto text-blue-600 fill-current" viewBox="0 0 36 50"><defs></defs><path fill-rule="nonzero" d="M3.167.376A2.001 2.001 0 000 2v46a2.001 2.001 0 003.167 1.624l32-23a2 2 0 000-3.248l-32-23z"></path></svg>
                </div> --}}
            {{-- {{ Voyager::image(theme('home_promo_image')) }} --}}    <img src="https://cdn.devdojo.com/images/february2021/hero-photo.jpg?w=1280&amp;h=820&amp;fit=crop" class="rounded-lg">
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
            <h5 class="w-full mx-0 mt-0 mb-4 font-sans font-bold text-center text-purple-700 border-0 border-gray-200">
                Features
            </h5>
            <h2 class="w-full m-0 font-sans text-4xl font-black leading-loose tracking-wide text-center text-gray-700 border-0 border-gray-200 sm:text-5xl">
                Amazing Features
            </h2>
            <p class="w-full max-w-xl mx-0 mx-auto mt-4 mb-0 font-sans text-sm font-medium leading-relaxed text-center text-gray-400 border-0 border-gray-200 lg:text-lg md:text-base">
                Check out our set of awesome features and tools. We are the industry leaders in providing quality tools, trusted and used by over 1,200 companies. We kind'of rock!
            </p>
        </div>
        <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
        @foreach(config('features') as $feature)
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                       <img src="{{ $feature->image }}" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7">
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
        <p class="w-full max-w-xl mx-0 mx-auto mt-4 mb-0 font-sans text-sm font-medium leading-relaxed text-center text-gray-400 border-0 border-gray-200 lg:text-lg md:text-base">
            * Still in alfa or backlog version. Every month we provide a major update
        </p>
    </div>
{{-- Blobs --}}
{{-- Blob Top Left --}}
 <div class="absolute top-0 left-0 -ml-56 opacity-25 w-96 h-96">
        <svg class="text-pink-500 opacity-50 fill-current w-88 h-88" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.5,-24.7C35.8,-15.2,48.9,-7.6,50.6,1.7C52.3,11,42.6,22,32.3,31.2C22,40.4,11,47.8,-1.9,49.8C-14.9,51.7,-29.7,48.1,-41.1,38.9C-52.5,29.7,-60.5,14.9,-60.3,0.3C-60,-14.3,-51.5,-28.6,-40,-38.1C-28.6,-47.6,-14.3,-52.3,-3.4,-48.9C7.6,-45.5,15.2,-34.2,25.5,-24.7Z" transform="translate(100 100)"></path>
        </svg>
    </div>
    {{-- Blob Top Right --}}
 {{-- <div class="absolute top-0 right-0 -mb-56 opacity-25 w-96 h-96 -mr-72">
        <svg class="w-full h-full text-yellow-500 opacity-50 fill-current" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path d="M44.3,-48.3C55.3,-33.4,60.4,-16.7,62.2,1.8C64,20.3,62.5,40.6,51.6,55.3C40.6,70,20.3,79,2.3,76.7C-15.7,74.4,-31.4,60.7,-46.7,46C-62,31.4,-76.9,15.7,-78.5,-1.6C-80,-18.8,-68.2,-37.6,-52.9,-52.5C-37.6,-67.5,-18.8,-78.5,-1.1,-77.5C16.7,-76.4,33.4,-63.3,44.3,-48.3Z" transform="translate(100 100)"></path>
        </svg>
    </div> --}}

</section>
{{-- Blobs --}}
{{-- Weekly mails --}}
<section class="box-border relative block py-20 overflow-hidden leading-6 text-center text-white bg-purple-900 bg-no-repeat bg-cover">
    <div class="w-full max-w-2xl px-4 mx-auto leading-6 text-center xl:px-0">
        <div class="box-border flex flex-wrap justify-center -mx-4 text-white">
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
        </div>
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
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\feedback_form.svg') }}" alt="Knowing your clients">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Drag-n-drop design</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Everything you need</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Helping your clients grow and know how to use your software is a key thing for a successful company. We can help with that!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\control_center.svg') }}" alt="Make an optimized dedicated support portal">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Make an optimized dedicated support portal</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">In your portal you will have access to stack of various tools. We will help you automate your workflow and satisfy your customers' expectations. Make them part of your product!</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes\bimbala\images\better_decision.svg') }}" alt="Better decision making">
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
{{-- Blog --}}
{{--  <section class="w-full py-12 bg-white sm:py-20" x-data="{ page: 1, total_pages: 3 }">
    <div class="flex flex-col items-center justify-center mx-auto xl:flex-row max-w-7xl">
        <div class="relative flex flex-col items-start justify-center w-full h-full max-w-2xl px-6 mx-auto xl:max-w-none xl:w-2/5">

            <h2 class="text-3xl font-normal leading-none text-gray-900 sm:w-4/5 sm:text-6xl text-3">New stories from the team.</h2>
            <div class="w-20 h-1 mt-3 ml-1 bg-indigo-600 rounded-full"></div>
            <div class="relative flex mt-6 space-x-2">
                <div @click="if(page > 1){ page-=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </div>
                <div @click="if(page < total_pages){ page+=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <svg class="absolute top-0 right-0 hidden w-auto h-24 mt-20 text-indigo-600 fill-current sm:block xl:mr-5 xl:-mt-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 74"><defs></defs><g fill-rule="nonzero"><path d="M43.13 71.58c.29-.025.58-.025.87 0 .3 0 .71-.14 1-.17.54 0 1.08-.19 1.62-.23l2.3-.17 4.65-.25 6.47-.26h.68c3-.15 6-.3 9-.53 1.68-.14 5.83-.49 6.21-.52.63 0 4.36-.53 5-.63.25 0 1.95-.35 3.35-.58-.09-1-.55-1.77-.62-2.71-4.33.66-8.7 1.18-13 1.51-5.34.4-10.71.66-16.08 1l-7 .39c-1.4 0-2.82-.31-4.17-.26a2 2 0 00-1 .31c-.3.21-.4.16-.5.3a1.18 1.18 0 00-.12.81c.06.84.66 2.11 1.34 1.99zM106.33 62.04l.5-.23c.31-.13.72-.33 1.16-.56.88-.46 1.94-1 2.59-1.38l.56-.31a31.87 31.87 0 002.81-1.74 48.77 48.77 0 0014-13.59 38.22 38.22 0 004.34-8.87 28.9 28.9 0 001.51-9.86 31.56 31.56 0 00-3.3-13.46 23.9 23.9 0 00-3.62-5.22 20.47 20.47 0 00-2.38-2.22c-.42-.34-.89-.63-1.33-.94a10.88 10.88 0 00-1.38-.85A18.21 18.21 0 00109.16.92c-.5.11-1 .22-1.45.33-.45.11-.88.31-1.3.47-.42.16-.86.3-1.27.49-.41.19-.8.41-1.21.61A27.71 27.71 0 0098.5 6.5l-1.51 1.42-1.59 1.84c-.51.66-1 1.36-1.44 2-.44.64-.75 1.28-1 1.78a22.66 22.66 0 00-2 5 23.44 23.44 0 00-.82 5.31 26.71 26.71 0 00.72 7c.22 1.16.65 2.26 1 3.38a33.94 33.94 0 001.41 3.21 36.93 36.93 0 008.44 10.95 47.5 47.5 0 005.77 4.43 35.5 35.5 0 0010.02 4.59 86.41 86.41 0 0010 2.09 84.59 84.59 0 0018.2.51c4.8-.31 9.33-.8 13.8-1.39 2.25-.3 4.49-.63 6.76-1l3.43-.59.83-.11a15.59 15.59 0 001.98-.25 46 46 0 014.66-.82c.69-.12 2.24-.87 2.34-1.35.06-.28-.19-.56-.15-.85.09-.65-1.16-1.47-2.06-1.25-.9.22-1.89.51-2.84.73-.95.22-2 .37-3 .62a9.82 9.82 0 00-1.16.38c-.19.06-.39.13-.58.18l-.29.08-.69.12c-3.55.62-7 1.3-10.81 1.68-5.54.53-11.42 1.31-17.15 1.37a73.61 73.61 0 01-18.84-1.81 41.54 41.54 0 01-16.81-8.06 37.32 37.32 0 01-7.9-8.78 27.1 27.1 0 01-4.12-10.8C91.25 17.6 98.76 6.5 108.89 3.76a15.83 15.83 0 0114.56 3.4 23.24 23.24 0 017.36 13.74 28.32 28.32 0 01.29 8 28.05 28.05 0 01-2.06 7.7 37.16 37.16 0 01-5 8.63 39.08 39.08 0 01-7 7l-.87.66-.14.11c-1.69 1.29-3.61 2.56-5.55 3.75a54.34 54.34 0 01-12 5.4c-.42 1-1 2.35-.6 3.17 1.18-.35 2.25-.69 3.52-1.19.8-.28 1.61-.63 2.44-1 .83-.37 1.66-.72 2.49-1.09z"></path><path d="M46.93 71a8.72 8.72 0 011.16 0c.51 0 1.48.05 2 0l8.52-.5c8.84-.54 17.78-1 26.66-2.45 2.33-.38 4.67-.8 7-1.29a56.65 56.65 0 0010.45-3.26 85.2 85.2 0 009.11-4.57 48.44 48.44 0 0014-12c.86-1 1.57-2.14 2.33-3.2s1.34-2.12 1.89-3.23a35.91 35.91 0 002.81-7.11 31.08 31.08 0 00.4-12.78 6.21 6.21 0 01-1.89 2.64 25.44 25.44 0 01-1 9.32l-.09.26a21.31 21.31 0 01-.69 2 41.94 41.94 0 01-3.72 7.43 41.78 41.78 0 01-5.3 6.63 52.72 52.72 0 01-15.45 10.61 73.71 73.71 0 01-18.17 5.41 207.23 207.23 0 01-24.09 2.59l-15.92.87a4.07 4.07 0 01-.01 2.63zM21.1 71.79a1.43 1.43 0 01-.27-1.49 2.72 2.72 0 011.81-1.54c1-.14 2.13.44 3.2.44 1.47 0 2.94-.27 4.42-.39 1-.08 1.92 0 2.86-.15a17 17 0 012.57-.11 5.7 5.7 0 001.17 0 3 3 0 011.12-.16c1 .18 1.3 2.22.71 2.91-.45.53-1.56.36-2.18.36h-2.67c-2.13.13-4.28 0-6.41.1-.91 0-1.8.24-2.7.35-.9.11-1.7.15-2.56.2a1.31 1.31 0 01-1.07-.52zM7.5 71.7a3.09 3.09 0 010-1 1.26 1.26 0 01.4-.74 2.18 2.18 0 012.16-.49 9.2 9.2 0 002.87 0 9.22 9.22 0 013.1 0 2 2 0 011.17.72c.46.6.61 1.35-.14 1.8a5.18 5.18 0 01-2.91.44c-1.34-.13-2.75.53-4.15.76a2 2 0 01-1.34-.22A2.49 2.49 0 017.5 71.7zM.01 71.57c.082-.29.2-.569.35-.83a1.91 1.91 0 013.27-.25c.54.63.61 2.26-.16 2.72a4.27 4.27 0 01-1.32.44c-1.12.1-2.05-.23-2.14-2.08z"></path></g></svg>

        </div>
        <div class="box-content relative flex items-center w-full h-auto max-w-2xl py-5 mx-auto overflow-hidden xl:w-3/5 rounded-xl bg-gradient-to-r from-transparent via-transparent to-gray-100">

            <!-- Slide Page 1 -->
            <div class="flex px-6 space-x-6 transition duration-500 ease-out transform xl:pl-6 h-94" :class="{ '-translate-x-full pr-10' : page > 1, 'relative': page == 1, 'absolute': page != 1 }">

                <!-- story 1 -->
                <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <a href="#_">
                            <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">
                            <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                <a href="#_" class="hover:underline" rel="category">
                                    Design
                                </a>
                            </p>
                            <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                            </a>
                        </div>
                        <div class="items-center hidden mt-6 sm:flex">
                            <div class="relative">
                                <p class="text-xs font-medium leading-5 text-gray-500">
                                    <a href="#_" class="hover:underline">John Doe</a>
                                    <span class="mx-1">Â·</span><time class="ml-1">January 21, 2022</time>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- story 2 -->
                <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <a href="#_">
                            <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">
                            <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                <a href="#_" class="hover:underline" rel="category">
                                    Design
                                </a>
                            </p>
                            <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                            </a>
                        </div>
                        <div class="items-center hidden mt-6 sm:flex">
                            <div class="relative">
                                <p class="text-xs font-medium leading-5 text-gray-500">
                                    <a href="#_" class="hover:underline">John Doe</a>
                                    <span class="mx-1">Â·</span><time class="ml-1">January 21, 2022</time>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Page 2 -->
            <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ '-translate-x-full pr-10' : page > 2, 'translate-x-full' : page < 2, 'translate-x-0 ml-5' : page == 2, 'relative': page == 2, 'absolute': page != 2 }" x-cloak="">

                <!-- story 3 -->
                <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <a href="#_">
                            <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">
                            <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                <a href="#_" class="hover:underline" rel="category">
                                    Design
                                </a>
                            </p>
                            <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                            </a>
                        </div>
                        <div class="items-center hidden mt-6 sm:flex">
                            <div class="relative">
                                <p class="text-xs font-medium leading-5 text-gray-500">
                                    <a href="#_" class="hover:underline">John Doe</a>
                                    <span class="mx-1">Â·</span><time class="ml-1">January 21, 2022</time>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End slide page 2 -->
        </div>
    </div>
</section>   --}}
{{-- End blog --}}
{{-- BEGINNING OF TESTIMONIALS SECTION --}}
{{-- <div id="testimonials">
        <div class="relative flex items-center justify-center pt-32 pb-12 bg-gray-100 md:pb-32 lg:pb-64 min-w-screen">
            <div class="max-w-6xl px-10 pb-20 mx-auto bg-gray-100">
                <div class="flex flex-col items-center lg:flex-row">
                    <div class="flex flex-col justify-center w-full h-full mb-10 lg:pr-8 sm:w-4/5 md:items-center lg:mb-0 lg:items-start md:w-3/5 lg:w-1/2">
                        <p class="mb-2 text-base font-medium tracking-tight uppercase text-wave-500">Our customers love our product</p>
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none lg:text-5xl xl:text-6xl">
                            Testimonials</h2>
                        <p class="pr-5 my-6 text-lg text-gray-600 md:text-center lg:text-left">This is an example section of where you will add your testimonials for your Software as a Service.</p>
                        <a href="#_"
                            class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent rounded-md shadow bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave md:py-4 md:text-lg md:px-10">View
                            Case Studies</a>
                    </div>
                    <div class="w-full sm:w-4/5 lg:w-1/2">
                        <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Wave allowed me to build the Software as a Service of my dreams!
                                    </p>
                                </div>

                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">Jane Cooper <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 my-5 bg-white rounded-lg shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-10">
                                <div class="relative sm:pl-12">
                                    <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Wave saved us hundreds of development hours. Creating a Software as a Service is now easier than ever with Wave.</p>
                                </div>
                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Doe <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-10">
                                <div class="relative sm:pl-12">
                                    <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">This is the best solution available for creating your own Software as a Service!</p>
                                </div>

                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Smith <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                    </div>
                </div>
            </div>
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 w-full" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
                <style type="text/css">
                    .wave-svg-light {
                        fill: #ffffff;
                    }
                </style>
                <g id="wave" transform="translate(720.000000, 75.000000) scale(1, -1) translate(-720.000000, -75.000000) " fill-rule="nonzero">
                    <path class="wave-svg-light" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
                    <path class="wave-svg-light" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
                    <path class="wave-svg-light" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" id="Shape" fill="url(#linearGradient-1)" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
                </g>
            </svg>

        </div>
</div> --}}
{{-- END OF TESTIMONIALS SECTION --}}
{{-- BEGINNING OF PRICING SECTION --}}
{{-- <div id="pricing" class="relative">
        <div class="relative z-20 px-8 pb-8 mx-auto max-w-7xl xl:px-5">
            <div class="w-full text-left sm:text-center">
                <h2 class="pt-12 text-4xl font-extrabold text-gray-900 lg:text-5xl">Example Pricing</h2>
                <p class="w-full my-1 text-base text-left text-gray-900 opacity-75 sm:my-2 sm:text-center sm:text-xl">It's easy to customize the pricing of your Software as a Service</p>
            </div>
            @include('theme::partials.plans')
            <p class="w-full my-8 text-left text-gray-500 sm:my-10 sm:text-center">All plans are fully configurable in the Admin Area.</p>
        </div>
</div> --}}
{{-- END OF PRICING SECTION --}}
{{-- Motivation --}}

<!-- Section 1 -->
<section class="w-full px-8 py-16 md:py-16 bg-whitexl:px-0" x-data="{ section: 'gather' }">
  <div class="flex flex-col max-w-6xl px-3 mx-auto md:px-0 lg:px-8 xl:px-0 md:flex-row">
    <div class="w-full pr-5 mb-6 space-y-1 md:mb-0 md:space-y-4 md:w-4/12 xl:pr-12">
        <h2 @click="section='gather'" class="pb-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'gather', 'text-gray-400 hover:text-gray-900' : section != 'gather' }">Gather</h2>
        <h2 @click="section='understand'" class="py-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'understand', 'text-gray-400 hover:text-gray-900' : section != 'understand' }">Understand</h2>
        <h2 @click="section='learn'" class="py-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'learn', 'text-gray-400 hover:text-gray-900' : section != 'learn' }">Learn</h2>
    </div>

    <div class="relative w-full mt-6 overflow-hidden md:mt-1 md:w-9/12">
        <div class="w-full space-y-6" x-show="section == 'gather'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>    
        <h3 class="text-2xl font-bold leading-7">Gathering feedback</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Starting every journey from the beginning is exciting, but understanding your clients is even better. This kind of adventure needs a great companion and be sure you have picked the right one.</p>
         </div>

        <div class="space-y-6" x-show="section == 'understand'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg>    
        <h3 class="text-2xl font-bold leading-7">Understand your clients</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Use our powerful dashboard to see what your customers want.</p>
          </div>

        <div class="space-y-6" x-show="section == 'learn'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
            <h3 class="text-2xl font-bold leading-7">Learn from experience</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Every step on your journey is getting you closer to your end goal, and the quickest way to get closer to that goal is by learning from your past experiences.</p>
            {{-- <a href="#_" class="flex items-center justify-start mt-8 text-lg font-medium tracking-wide text-gray-900 underline uppercase">Learn More <svg class="w-5 h-5 ml-1 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></a> --}}
        </div>
    </div>
  </div>
</section>

{{-- End of motivation --}}
{{--TOdo: Talking shark --}}

@endsection
