@extends('theme::layouts.app')

@section('titlebar-content.right')
    <div class="mt-12 rounded-md shadow">
        <a href="{{ route('wave.pricing') }}"
           class="py-4 px-24 border border-transparent border-solid cursor-pointer font-medium text-xl rounded-full text-white bg-green-400 select-none hover:bg-green-500 focus:shadow-xs focus:no-underline">
            Get started
        </a>
    </div>
@endsection

@section('titlebar-content.left')
    <div class="mt-9 w-full max-w-md">
        <img
            class="object-cover"
            src="{{ asset('themes/bimbala/images/features/cropped/roadmap.webp') }}"
            alt="The roadmap feature's screenshot"
        />
    </div>
@endsection

@section('content')
<section class="w-full mx-auto py-12 lg:py-12 grid grid-cols-1 md:grid-cols-2 gap-8 xl:max-w-7xl">
    <div class="md:col-span-2">
        <h2 class="text-2xl text-center sm:text-xl md:text-4xl">Provide transparency over your product evolvement</h2>
    </div>
    <div>
        <img src="{{ asset('themes/bimbala/images/features/cropped/roadmap/roadmap_conversion.webp') }}" class="max-h-80 border" alt="List of upvote items" />
    </div>
    <div>
        <p class="font-bold text-3xl">Provide visibility over your progress to your customers</p>
        <p class="text-xl">The advance on your user's feedback should not be a black box. Keep your users informed about when their expectations will come true.</p>
        <ul class="list-disc list-inside leading-loose">
            <li>Let your users know when will their feature arrive</li>{{-- TODO: Hint for the changelog and add a link to its page when it's built --}}
            <li>Easy moving of <a href="{{ route('features.upvote') }}" class="text-gray-500 hover:text-gray-400 font-bold">upvote items</a> to the product roadmap</li>
            <li>Show what your priorities are</li>
        </ul>
    </div>
    <div>
        <p class="font-bold text-3xl">Build a loyal user base</p>
        <p class="text-xl">Impress your customers making them familiar with how you do your job.</p>
        <ul class="list-disc list-inside leading-loose">
            <li>Be transparent about your company's workflow and what the process is. This will prove your quality of work and will help you build brand identity</li>
            <li>Easy integration of Bimbala with other task management tools</li>
            <li>Encrouge your users to give their feedback by making their requests to work-in-progress tasks</li>
        </ul>
    </div>
    <div>
        <img src="{{ asset('themes/bimbala/images/features/workflow.svg') }}" class="max-h-[28rem]  mx-auto" alt="Transparent about company's workflow" />
    </div>
</section>
@endsection
