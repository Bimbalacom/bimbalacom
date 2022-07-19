@extends('theme::layouts.app')

@section('content')
{{-- Content --}}

<section class="w-full py-12 bg-white lg:py-24">
{{--Mobile --}}
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex flex-col text-center justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pl-16">
                <h3 class="my-4 text-2xl sm:text-left md:text-4xl">Desktop application</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">
                  <a href="https://github.com/Bimbalacom/Desktop/releases/latest">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                        <span class="ml-4 flex items-start flex-col leading-none">
                          <span class="text-xs text-gray-600 mb-1">Download</span>
                          <span class="title-font font-medium">Windows</span>
                        </span>
                    </button>
                  </a>
                  <a href="https://github.com/Bimbalacom/Desktop/releases/latest">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"><path d="M15.612 3.448c.918.51 2.09.208 2.62-.676.529-.884.215-2.014-.702-2.524-.917-.51-2.09-.207-2.62.677-.529.883-.214 2.013.702 2.523m-3.925 11.95a5.76 5.76 0 0 1-2.36-.501l-1.333 2.3a8.63 8.63 0 0 0 5.92.539 2.588 2.588 0 0 1 1.31-1.831 2.779 2.779 0 0 1 2.3-.18c1.419-1.344 2.341-3.172 2.476-5.207l-2.733-.04c-.252 2.759-2.653 4.92-5.58 4.92m0-10.796c2.927 0 5.328 2.162 5.58 4.92L20 9.482c-.135-2.035-1.057-3.863-2.476-5.207a2.78 2.78 0 0 1-2.3-.18 2.594 2.594 0 0 1-1.312-1.832 8.667 8.667 0 0 0-2.226-.291c-1.325 0-2.578.3-3.692.83l1.334 2.302a5.744 5.744 0 0 1 2.36-.502M6.083 10c0-1.826.943-3.44 2.383-4.417L7.064 3.32C5.386 4.4 4.138 6.053 3.62 7.987c.606.476.993 1.2.993 2.013 0 .812-.387 1.537-.993 2.013.519 1.935 1.767 3.587 3.445 4.668l1.403-2.264c-1.44-.977-2.383-2.59-2.383-4.417m9.53 6.552c-.918.51-1.233 1.64-.703 2.524.529.884 1.702 1.187 2.62.676.916-.51 1.23-1.64.7-2.524-.529-.883-1.701-1.186-2.618-.676M1.92 8.152C.859 8.152 0 8.979 0 10c0 1.02.86 1.848 1.919 1.848 1.06 0 1.918-.827 1.918-1.848 0-1.021-.859-1.848-1.918-1.848" fill="#000" fill-rule="evenodd"/></svg>
                      <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Download</span>
                        <span class="title-font font-medium">Linux</span>
                      </span>
                    </button>
                  </a>
                  <a href="https://github.com/Bimbalacom/Desktop/releases/latest">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                        <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
                        <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
                      </svg>
                      <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Download</span>
                        <span class="title-font font-medium">Mac OS</span>
                      </span>
                    </button>
                  </a>
                </p>
            </div>
            {{-- Mobile part --}}
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pl-16">
                <h3 class="my-4 text-2xl sm:text-left md:text-4xl">Mobile</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">
                  <a href="https://github.com/Bimbalacom/Mobile/releases/latest">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                        <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                      </svg>
                      <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
                        <span class="title-font font-medium">Google Play</span>
                      </span>
                    </button>
                  </a>
                  <a href="https://github.com/Bimbalacom/Mobile/releases/latest">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                        <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
                        <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
                      </svg>
                      <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Download on the</span>
                        <span class="title-font font-medium">App Store</span>
                      </span>
                    </button>
                  </a>
                </p>
            </div>
        </div>
    </div>
</section>
{{-- Information --}}
<section class="w-full px-8 py-16 md:py-16 bg-whitexl:px-0" x-data="{ section: 'gather' }">
  <div class="flex flex-col max-w-6xl px-3 mx-auto md:px-0 lg:px-8 xl:px-0 md:flex-row">
    <div class="w-full pr-5 mb-6 space-y-1 md:mb-0 md:space-y-4 md:w-4/12 xl:pr-12">
        <h2 @click="section='gather'" class="pb-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'gather', 'text-gray-400 hover:text-gray-900' : section != 'gather' }">Gather</h2>
        <h2 @click="section='understand'" class="py-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'understand', 'text-gray-400 hover:text-gray-900' : section != 'understand' }">Understand</h2>
        <h2 @click="section='learn'" class="py-2 text-5xl font-extrabold cursor-pointer lg:text-6xl" :class="{ 'text-black' : section == 'learn', 'text-gray-400 hover:text-gray-900' : section != 'learn' }">Learn</h2>
    </div>

    <div class="relative w-full mt-6 overflow-hidden md:mt-1 md:w-9/12">
        <div class="w-full space-y-6" x-show="section == 'gather'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
        <svg class="w-12 h-12 text-purple-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>    
        <h3 class="text-2xl font-bold leading-7">Gathering feedback</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Starting every journey from the beginning is exciting, but understanding your clients is even better. This kind of adventure needs a great companion and be sure you have picked the right one.</p>
         </div>

        <div class="space-y-6" x-show="section == 'understand'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
        <svg class="w-12 h-12 text-purple-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg>    
        <h3 class="text-2xl font-bold leading-7">Understand your clients</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Use our powerful dashboard to see what your customers want.</p>
          </div>

        <div class="space-y-6" x-show="section == 'learn'" x-transition:enter="top-0 left-0 w-full h-full absolute transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-full">
            <svg class="w-12 h-12 text-purple-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
            <h3 class="text-2xl font-bold leading-7">Learn from experience</h3>
            <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Every step on your journey is getting you closer to your end goal, and the quickest way to get closer to that goal is by learning from your past experiences.</p>
            {{-- <a href="#_" class="flex items-center justify-start mt-8 text-lg font-medium tracking-wide text-gray-900 underline uppercase">Learn More <svg class="w-5 h-5 ml-1 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></a> --}}
        </div>
    </div>
  </div>
</section>
@endsection
