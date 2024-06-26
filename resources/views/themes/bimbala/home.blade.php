@extends('theme::layouts.app')

@section('content')

    <div class=" bg-gray-900">
        <div class="w-full z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
            <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
                <h1 class="text-4xl font-bold text-white lg:text-6xl xl:text-6xl">{{ theme('home_headline') }}</h1>
                <p class="text-base text-blue-200 lg:text-xl">{{ theme('home_subheadline') }} {{-- -  {{ theme('home_description') }} --}}</p>
                <div class="flex flex-col items-center w-full mb-10 sm:flex-row sm:mb-20">
                    <a href="{{ theme('home_cta_url') }}" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out sm:w-auto focus:outline-none rounded">{{ theme('home_cta') }}</a>
                    <a href="https://board.bimbala.com" class="w-full px-8 py-3 mt-5 ml-3 text-lg text-center text-white transition duration-150 ease-in-out bg-transparent border border-white sm:ml-6 sm:w-auto sm:mt-0 focus:outline-none hover:bg-white hover:text-blue-700 rounded">Demo</a>
                </div>
            </div>
            <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
                <svg class="absolute top-0 right-0 z-0 hidden w-32 h-32 -mt-12 -mr-12 text-blue-300 fill-current md:block" viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g fill-rule="nonzero"><g><g><circle cx="3.261" cy="3.445" r="2.72"></circle><circle cx="15.296" cy="3.445" r="2.719"></circle><circle cx="27.333" cy="3.445" r="2.72"></circle><circle cx="39.369" cy="3.445" r="2.72"></circle><circle cx="51.405" cy="3.445" r="2.72"></circle><circle cx="63.441" cy="3.445" r="2.72"></circle><circle cx="75.479" cy="3.445" r="2.72"></circle><circle cx="87.514" cy="3.445" r="2.719"></circle></g><g transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"></circle><circle cx="15.296" cy="3.525" r="2.719"></circle><circle cx="27.333" cy="3.525" r="2.72"></circle><circle cx="39.369" cy="3.525" r="2.72"></circle><circle cx="51.405" cy="3.525" r="2.72"></circle><circle cx="63.441" cy="3.525" r="2.72"></circle><circle cx="75.479" cy="3.525" r="2.72"></circle><circle cx="87.514" cy="3.525" r="2.719"></circle></g><g transform="translate(0 24)"><circle cx="3.261" cy="3.605" r="2.72"></circle><circle cx="15.296" cy="3.605" r="2.719"></circle><circle cx="27.333" cy="3.605" r="2.72"></circle><circle cx="39.369" cy="3.605" r="2.72"></circle><circle cx="51.405" cy="3.605" r="2.72"></circle><circle cx="63.441" cy="3.605" r="2.72"></circle><circle cx="75.479" cy="3.605" r="2.72"></circle><circle cx="87.514" cy="3.605" r="2.719"></circle></g><g transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"></circle><circle cx="15.296" cy="3.686" r="2.719"></circle><circle cx="27.333" cy="3.686" r="2.72"></circle><circle cx="39.369" cy="3.686" r="2.72"></circle><circle cx="51.405" cy="3.686" r="2.72"></circle><circle cx="63.441" cy="3.686" r="2.72"></circle><circle cx="75.479" cy="3.686" r="2.72"></circle><circle cx="87.514" cy="3.686" r="2.719"></circle></g><g transform="translate(0 49)"><circle cx="3.261" cy="2.767" r="2.72"></circle><circle cx="15.296" cy="2.767" r="2.719"></circle><circle cx="27.333" cy="2.767" r="2.72"></circle><circle cx="39.369" cy="2.767" r="2.72"></circle><circle cx="51.405" cy="2.767" r="2.72"></circle><circle cx="63.441" cy="2.767" r="2.72"></circle><circle cx="75.479" cy="2.767" r="2.72"></circle><circle cx="87.514" cy="2.767" r="2.719"></circle></g><g transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"></circle><circle cx="15.296" cy="2.846" r="2.719"></circle><circle cx="27.333" cy="2.846" r="2.72"></circle><circle cx="39.369" cy="2.846" r="2.72"></circle><circle cx="51.405" cy="2.846" r="2.72"></circle><circle cx="63.441" cy="2.846" r="2.72"></circle><circle cx="75.479" cy="2.846" r="2.72"></circle><circle cx="87.514" cy="2.846" r="2.719"></circle></g><g transform="translate(0 73)"><circle cx="3.261" cy="2.926" r="2.72"></circle><circle cx="15.296" cy="2.926" r="2.719"></circle><circle cx="27.333" cy="2.926" r="2.72"></circle><circle cx="39.369" cy="2.926" r="2.72"></circle><circle cx="51.405" cy="2.926" r="2.72"></circle><circle cx="63.441" cy="2.926" r="2.72"></circle><circle cx="75.479" cy="2.926" r="2.72"></circle><circle cx="87.514" cy="2.926" r="2.719"></circle></g><g transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"></circle><circle cx="15.296" cy="3.006" r="2.719"></circle><circle cx="27.333" cy="3.006" r="2.72"></circle><circle cx="39.369" cy="3.006" r="2.72"></circle><circle cx="51.405" cy="3.006" r="2.72"></circle><circle cx="63.441" cy="3.006" r="2.72"></circle><circle cx="75.479" cy="3.006" r="2.72"></circle><circle cx="87.514" cy="3.006" r="2.719"></circle></g></g></g></g></svg>
                <div class="relative cursor-pointer group">
                    <img
                        src="{{URL::asset('themes/bimbala/images/hero-photo/hero-photo-sm.webp')}}"
                        srcset="
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-xs.webp') }} 320w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-sm.webp') }} 375w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-md.webp') }} 768w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-lg.webp') }} 1024w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-lg.webp') }} 1024w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-xl.webp') }} 1500w,
                           {{ asset('themes/bimbala/images/hero-photo/hero-photo-2xl.webp') }} 2000w,
                       "
                        sizes="(max-height: 768px) 80vw, 30vw"
                        class="rounded-lg"
                        fetchpriority="high"
                        alt="{{ theme('home_subheadline') }}"
                        width="600"
                        height="400"
                    />
                </div>
            </div>
        </div>
    </div>

{{--End header--}}

{{-- Features with images --}}
<section class="relative box-border w-full border-0 border-solid leading-6 md:px-8">
  <div class="mx-auto box-border flex max-w-7xl flex-col items-center border-solid md:px-8 leading-6 md:items-stretch md:justify-center xl:px-16">
    <div class="relative">
      <h2 class="my-6 md:my-16 lg:my-20 w-full border-0 border-gray-200 text-center text-4xl font-bold leading-loose tracking-wide sm:text-5xl">Key Features</h2>
    </div>
    <div
      x-data="{
            openTab: 1,
            activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
            inactiveClasses: 'text-blue-500 hover:text-blue-700'
        }"
      class="p-3 md:p-6 w-full"
    >
      <div class="text-gray-700 lg:pt-0 lg:flex lg:flex-row">
        <ul class="relative z-10 whitespace-nowrap lg:mx-0 lg:block lg:whitespace-normal flex justify-center">
          <li @click="openTab = 1" :class="{ ' bg-purple-700/10': openTab === 1 }" class="group relative mr-1 rounded-full px-2 md:px-4 py-1 hover:bg-purple-700/10 lg:rounded-l-xl lg:rounded-r-none lg:p-6 lg:hover:bg-purple-700/5">
            <h3>
              <button class="font-display ui-not-focus-visible:outline-none md:text-2xl font-bold  hover:text-purple-700" type="button" :class="{ 'text-purple-700' : openTab == 1}">
                <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>
                Roadmap
              </button>
            </h3>
            <p class="mt-2 text-sm font-medium leading-loose group-hover:text-purple-700 lg:block hidden" :class="{ 'text-purple-700' : openTab == 1}">It is your shared source of truth that outlines the vision, direction, priorities, and progress of a product over time.</p>
          </li>

          <li @click="openTab = 2" :class="{ 'bg-purple-700/10': openTab === 2 }" class="group relative mr-1 rounded-full px-2 md:px-4 py-1 hover:bg-purple-700/10 lg:rounded-l-xl lg:rounded-r-none lg:p-6 lg:hover:bg-purple-700/5">
            <h3>
              <button class="font-display ui-not-focus-visible:outline-none md:text-2xl font-bold hover:text-purple-700" type="button" :class="{ 'text-purple-700' : openTab == 2}">
                <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>
                FAQ
              </button>
            </h3>
            <p class="mt-2 text-sm font-medium leading-loose group-hover:text-purple-700 lg:block hidden" :class="{ 'text-purple-700' : openTab == 2}">Is the collections of the most common questions and brief, easy-to-understand answers about a particular product, service, or topic.</p>
          </li>

          <li @click="openTab = 3" :class="{ 'bg-purple-700/10': openTab === 3 }" class="group relative mr-1 rounded-full px-2 md:px-4 py-1 hover:bg-purple-700/10 lg:rounded-l-xl lg:rounded-r-none lg:p-6 lg:hover:bg-purple-700/5">
            <h3>
              <button class="font-display ui-not-focus-visible:outline-none md:text-2xl font-bold hover:text-purple-700" type="button" :class="{ 'text-purple-700' : openTab == 3}">
                <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>
                Upvotes
              </button>
            </h3>
            <p class="mt-2 text-sm font-medium leading-loose group-hover:text-purple-700 lg:block hidden" :class="{ 'text-purple-700' : openTab == 3}">Allow them to submit their ideas for new features and participate in voting on all feedback. You'll gain valuable insights into what to prioritize for your next developments.</p>
          </li>
          <li @click="openTab = 4" :class="{ 'bg-purple-700/10': openTab === 4 }" class="group relative mr-1 rounded-full px-2 md:px-4 py-1 hover:bg-purple-700/10 lg:rounded-l-xl lg:rounded-r-none lg:p-6 lg:hover:bg-purple-700/5">
            <h3>
              <button class="font-display ui-not-focus-visible:outline-none md:text-2xl font-bold hover:text-purple-700" type="button" :class="{ 'text-purple-700' : openTab == 4}">
                <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>
                Changelog
              </button>
            </h3>
            <p class="mt-2 text-sm font-medium leading-loose group-hover:text-purple-700 lg:block hidden" :class="{ 'text-purple-700' : openTab == 4}">Documented record of all the changes that a software undergoes. Changes made are then chronologically recorded for users to easily spot the evolution of the product.</p>
          </li>
        </ul>
        <div class="md:h-96 lg:w-2/4 w-full">
          <div x-show="openTab === 1">
            <div class="mt-4 md:mt-10 overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 lg:mt-0 lg:w-[45rem]">
                  <img alt="Roadmap demonstation image" class="w-full"
                       src="{{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-sm.webp') }}"
                       srcset="
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-xs.webp') }} 320w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-sm.webp') }} 375w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-md.webp') }} 768w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-lg.webp') }} 1024w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-lg.webp') }} 1024w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-xl.webp') }} 1500w,
                           {{ asset('themes/bimbala/images/features/full-res/roadmap/roadmap-2xl.webp') }} 2000w,
                       "
                       loading="lazy"
                       width="100%"
                  />
                </div>
              </div>
              <div x-show="openTab === 2">
                <div class="mt-4 md:mt-10 overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 lg:mt-0 lg:w-[45rem]">
                  <img alt="FAQ demonstation image" class="w-full" src="{{ asset('themes/bimbala/images/features/full-res/faq.webp') }}" loading="lazy" />
                </div>
              </div>
              <div x-show="openTab === 3">
                <div class="mt-4 md:mt-10 overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 lg:mt-0 lg:w-[45rem]">
                  <img alt="Upvote demonstation image" class="w-full" src="{{ asset('themes/bimbala/images/features/full-res/upvotes.webp') }}" loading="lazy" />
                </div>
              </div>
                <div x-show="openTab === 4">
                <div class="mt-4 md:mt-10 overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 lg:mt-0 lg:w-[45rem]">
                  <img alt="Changelog demonstation image" class="w-full" src="{{ asset('themes/bimbala/images/features/full-res/changelog.webp') }}" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End of Features with images --}}


{{-- FEATURES SECTION --}}
<section class="relative box-border w-full border-0 border-solid border-gray-200 bg-white leading-6 text-gray-700">
  <div class="mx-auto box-border flex max-w-7xl flex-col items-center border-solid px-8 py-20 leading-6 md:items-stretch md:justify-center md:py-24 xl:px-16">
    <div class="relative pb-10">
      <h2 class="w-full text-center text-2xl font-bold tracking-wide sm:text-2xl">We also provide</h2>
    </div>
    <div class="text-bold z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
      @foreach(config('features') as $feature)
      <div class="col-span-3 rounded-3xl bg-gray-50">
        <div class="sm: mx-4 box-border flex h-full flex-col items-start border-solid px-2 py-8 text-center leading-6 sm:flex-row sm:items-start">
          <div class="flex-shrink-0 rounded-full border border-gray-200 p-3">
            <img src="{{ $feature->image }}" class="h-7 w-7 stroke-current text-center align-middle leading-6 text-gray-700" loading="lazy" alt="{{ $feature->title }} - {{ $feature->description }}" width="28" height="28" />
          </div>
          <div class="mt-4 border-0 border-gray-200 sm:ml-4 sm:mt-2">
            <h3 class="box-border border-solid text-left text-2xl font-bold leading-none tracking-wide">{{ $feature->title }}</h3>
            <p class="mx-0 mb-0 mt-1 box-border border-solid text-left font-medium leading-loose text-gray-600 sm:mt-4">{{ $feature->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- Blobs --}} {{-- Blob Left --}}
  <div class="absolute left-0 top-0 -ml-56 h-96 w-96 opacity-25">
    <svg class="w-88 h-88 fill-current text-pink-500 opacity-50" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path d="M25.5,-24.7C35.8,-15.2,48.9,-7.6,50.6,1.7C52.3,11,42.6,22,32.3,31.2C22,40.4,11,47.8,-1.9,49.8C-14.9,51.7,-29.7,48.1,-41.1,38.9C-52.5,29.7,-60.5,14.9,-60.3,0.3C-60,-14.3,-51.5,-28.6,-40,-38.1C-28.6,-47.6,-14.3,-52.3,-3.4,-48.9C7.6,-45.5,15.2,-34.2,25.5,-24.7Z" transform="translate(100 100)"></path>
    </svg>
  </div>
</section>


 {{-- Clients --}}
{{-- @include('theme::partials.clients') --}}

{{-- Weekly mails --}}
<section class="py-16 overflow-hidden">
    <div class="px-8 mx-auto max-w-7xl lg:px-12 xl:px-16 ">
        <div class="flex flex-col lg:flex-row ">

            <!-- Left Content -->
            <div class="w-full lg:w-1/2 lg:pr-10">
                <div class="relative max-w-lg mx-auto leading-6 text-center text-gray-700 border-gray-200 lg:text-left">
                    <h2 class="m-0 text-3xl font-bold leading-tight text-left text-gray-900 border-solid sm:text-4xl md:text-5xl">
                        Sign up for our
                        <span class="block text-left text-purple-700" data-primary="purple-700">newsletter</span>
                    </h2>
                    <p class="pr-5 mx-0 my-5 text-base text-lef lg:my-8 xl:text-lg">
                        Subscribe to the newsletter to get product updates
                    </p>
                    <form action="https://bimbala.us17.list-manage.com/subscribe/post?u=118b625f8f6bac41ebe6c7be3&amp;id=e974cbc9ee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" >
                        <div class="relative flex items-center max-w-md leading-6 text-center lg:mx-0">
                                <input type="hidden" name="b_118b625f8f6bac41ebe6c7be3_e974cbc9ee" tabindex="-1" value="">
                                <input type="email" name="EMAIL" placeholder="Your E-mail" class="w-full py-4 pr-0 m-0 overflow-visible font-medium duration-300 border-2 border-gray-200 rounded-full outline-none sm:py-5 sm:pr-48 cursor-text pl-7 focus:outline-none focus-within:border-purple-700 hover:border-gray-400" data-rounded="rounded-full">
                            <x-recaptcha-submit formId="mc-embedded-subscribe-form" action="newsletter-subscription" id="mc-embedded-subscribe" class="absolute right-0 h-12 px-8 mr-3 text-white bg-purple-700 rounded-full" data-rounded="rounded-full" data-primary="purple-700">Get Started</x-recaptcha-submit>
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
                <img src="{{URL::asset('themes/bimbala/images/demo.bimbala.webp')}}" class="relative z-10 p-0 mt-10 transform shadow-2xl rounded-xl lg:scale-110 w-100" data-rounded="rounded-xl" data-rounded-max="rounded-full" loading="lazy" alt="Upvote demo image">

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
<section class="py-16">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> Level Up Your Support</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center intro sm:max-w-3xl">Helping your clients while, giving the needed tools for your support / marketing teams.</p>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-6/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes/bimbala/images/features/organize-feedback.jpg') }}" loading="lazy" alt="Gathering your client feedback">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-purple-700 uppercase">Gather your feedback</p>
                <h3 class="mt-2 text-2xl md:text-4xl">An easy way to collect and organize feedback</h3>
                <p class="mt-5 text-lg text md:">Gathering feedback is a big hassle. You receive it from everywhere and it gets lost in woords. That is why Bimbala is here to help and adapt to your way of thinking.</p>
            </div>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-6/12">
                    <div class="relative w-full">
                        <img src="{{ asset('themes/bimbala/images/features/collecting-feedback.png') }}" class="relative z-10 p-0 transform rounded-xl lg:scale-110" data-rounded="rounded-xl" data-rounded-max="rounded-full"  loading="lazy" alt="Make an optimized dedicated support portal">

                        <div class="absolute top-0 right-0 w-full h-full mt-4 -mr-5 transform scale-125 rotate-45">
                            <svg class="absolute top-0 w-full h-full transform fill-current lg:scale-x-150 text-purple-50" data-primary="purple-600" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.5,-76.5C55.9,-68.2,65.2,-55.6,71.9,-42.1C78.5,-28.6,82.7,-14.3,81.3,-0.8C79.8,12.7,72.8,25.3,64.7,36.3C56.5,47.2,47.2,56.3,36.2,63.3C25.2,70.2,12.6,75,-1.1,76.9C-14.8,78.9,-29.7,78,-43.7,72.8C-57.7,67.6,-70.9,58.1,-79.3,45.2C-87.7,32.4,-91.2,16.2,-90.7,0.3C-90.3,-15.7,-85.9,-31.4,-76.4,-42.3C-66.9,-53.1,-52.3,-59.2,-38.7,-66.9C-25.1,-74.5,-12.6,-83.7,1.5,-86.3C15.6,-88.8,31.1,-84.8,43.5,-76.5Z" transform="translate(100 100)" />
                            </svg>
                        </div>
                    </div>
                </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-purple-700 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Analyze and use the users' feedback</h3>
                <p class="my-3 text-lg text-gray-700 text md:text-left">Prioritize your product roadmap with data directly from your feedback board. Share your roadmap with others.</p>
                <p>
                    <ul class="list-disc ml-5">
                    <li>Real time input from users</li>
                    <li>Data-Driven work approach</li>
                </ul>
            </p>
            </div>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-6/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset('themes/bimbala/images/features/better-desicion-making.jpg') }}" loading="lazy" alt="Better decision making">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none  text-purple-700 uppercase">Better decisions</p>
                <h3 class="mt-2 text-2xl md:text-4xl">Better decision making</h3>
                <p class="mt-5 text-lg text-gray-700">Asking your community is on of the best ways to know if you are going in the right path.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Features with images --}}
{{-- Integrations --}}
<section class="py-12 sm:py-16 text-gray-700">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <h3 class="font-bold text-3xl sm:text-3xl lg:text-4xl mt-3">Connect with Your Favorite Apps</h3>
        <p class="mt-4 text-base sm:text-xl lg:text-2xl">We have integrate with 10+ other popular software.<br class="lg:hidden hidden sm:block"> <a href="{{ route('integrations') }}" class="text-purple-900 font-bold">Check them out</a>  👇</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
          @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\google-tag-manager.svg', 'title' => 'Google Tag Manager', 'category' => 'Web Tag Manager', 'description' => 'Web Tag Manager'])
          @endcomponent

          @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\mailchimp.svg', 'title' => 'Mailchimp', 'category' => 'Customer Relations', 'description' => 'WMarketing, Automation & Email Platform'])
          @endcomponent

          @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\hubspot.svg', 'title' => 'Hubspot', 'category' => 'Customer Relations', 'description' => 'Inbound Marketing, Sales, and Service Software'])
          @endcomponent

          @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\zendesk.svg', 'title' => 'Zendesk', 'category' => 'Customer Relations', 'description' => 'Customer Service Software & Sales CRM'])
          @endcomponent
        </div>
    </div>
</section>
{{--End of Integrations --}}

@endsection
