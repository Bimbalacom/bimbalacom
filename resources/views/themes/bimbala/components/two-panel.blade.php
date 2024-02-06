<section class="py-16">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl">{{ $title }}</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center intro sm:max-w-3xl">{{ $subtitle }}</p>
        </div>
        <div class="flex flex-col mb-12 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-6/12 sm:order-last">
                <img class="rounded-lg" src="{{ asset($image) }}" loading="lazy" alt="Gathering your client feedback">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-6/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-purple-700 uppercase">Gather your feedback</p>
                <h3 class="mt-2 text-2xl md:text-4xl">An easy way to collect and organize feedback</h3>
                <p class="mt-5 text-lg">{{ $description }}</p>
            </div>
        </div>
    </div>
</section>