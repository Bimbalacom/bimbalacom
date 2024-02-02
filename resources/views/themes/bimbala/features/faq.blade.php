@extends('theme::layouts.app')

@section('titlebar-content.right')
    <div class="mt-12 rounded-md shadow">
        <a href="{{ route('wave.pricing') }}"
           class="py-4 px-24 border border-transparent  border-solid cursor-pointer font-medium text-xl rounded-full text-white bg-green-400 select-none hover:bg-green-500 focus:shadow-xs focus:no-underline">
            Get started
        </a>
    </div>
@endsection

@section('titlebar-content.left')
    <div class="mt-9 w-full max-w-md">
        <img
            class="object-cover"
            src="{{ asset('themes/bimbala/images/features/cropped/faq.webp') }}"
            alt="The FAQ feature's screenshot"
        />
    </div>
@endsection

@section('content')
    <section class="w-full mx-auto py-12 lg:py-12 grid grid-cols-1 md:grid-cols-2 gap-8 xl:max-w-7xl">
        <div class="md:col-span-2">
            <h3 class="text-2xl text-center sm:text-xl md:text-4xl">Unload your support team from answering the same questions over and over again</h3>
        </div>
        <div>
            <img src="{{ asset('themes/bimbala/images/features/faq_helping.svg') }}" class="max-h-[28rem]" alt="Caring about users"/>
        </div>
        <div >
            <p class="font-bold text-3xl">Demonstrate reliability</p>
            <p class="text-xl">Caring about users' troubles is valuable and will make them come back to you.</p>
            <ul class="list-disc list-inside leading-loose">
                <li>Facilitate the onboarding process for new users, helping them get started seamlessly with your product</li>
                <li>Establish credibility by openly addressing common concerns and questions and build trust as users perceive the availability of helpful resources for their needs</li>
                <li>Adopting FAQ enhances user satisfaction by offering a self-help resource and minimizes frustration by addressing common concerns promptly</li>
            </ul>
        </div>
        <div >
            <p class="font-bold text-3xl">Automate question answering</p>
            <p class="text-xl">Your customers' curiosity should be satisfied, but you should probably save yourself the monotonous job of answering the same question from different users.</p>
            <ul class="list-disc list-inside leading-loose">
                <li>Group the questions and answers by topic</li>
                <li>Adding a new FAQ made easy</li>
                <li>Bring up the important spots of your product</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('themes/bimbala/images/features/cropped/faq/faq_add.webp') }}" class="max-h-80 mx-auto border" alt="List of upvote items" />
        </div>
    </section>
@endsection
