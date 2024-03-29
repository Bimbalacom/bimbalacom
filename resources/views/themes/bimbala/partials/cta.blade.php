
{{-- CTA --}}
<section class="relative block pt-16 overflow-hidden leading-6 text-left text-white bg-purple-950 bg-no-repeat bg-cover sm:pt-20 md:pt-24">
    <div class="w-full max-w-5xl px-8 mx-auto leading-6 text-left xl:px-0">
        <div class="flex flex-wrap items-center justify-center flex-1 text-center text-white lg:text-left">
            <div class="relative w-full px-4 leading-6 text-left lg:w-7/12 xl:w-1/2">
                <h2 class="mx-0 mt-0 mb-5 font-sans text-4xl font-bold text-white">
                    Designed with your client in mind.
                </h2>
                <div class="pr-10 text-left">
                    Beautifully crafted HQ which provides your customers with an alternative to the boring old feedback hub / help desk.
                </div>
            </div>
            <div class="relative flex flex-col w-full px-4 mt-10 leading-6 text-left md:flex-row lg:w-5/12 xl:w-1/2 justifty-end">
                <a href="https://board.bimbala.com/" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 mb-8 text-xl font-semibold text-center text-white no-underline align-middle bg-green-400 border border-transparent border-solid rounded-full cursor-pointer select-none md:mb-0 md:mr-8 md:w-auto lg:px-7 xl:px-10 hover:bg-green-500 focus:shadow-xs focus:no-underline">
                    Our Board
                </a>
                <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 text-xl font-semibold text-center text-white no-underline align-middle bg-transparent border-2 border-purple-600 border-solid rounded-full cursor-pointer select-none md:w-auto lg:px-7 xl:px-10 hover:border-white hover:text-white focus:shadow-xs focus:no-underline">
                    Get started
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
{{-- End CTA --}}
