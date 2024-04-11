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
            src="{{ asset('themes/bimbala/images/features/cropped/upvote.webp') }}"
            alt="The upvote feature's screenshot"
        />
    </div>
@endsection

@section('content')
<section class="w-full mx-auto py-12 lg:py-12 grid grid-cols-1 md:grid-cols-2 gap-8 xl:max-w-7xl">
    <div class="md:col-span-2">
        <h2 class="text-2xl text-center sm:text-xl md:text-4xl">Why use forms when upvote gives you tons of rated customer feedback all in one place?</h2>
    </div>
    <div class="">
        <img src="{{ asset('themes/bimbala/images/features/cropped/upvotes/upvotes_list.webp') }}" class="max-h-80 mx-auto" alt="List of upvote items" />
    </div>
    <div class="">
        <p class="font-bold text-3xl">User feedback collection, organization, and voting made easy</p>
        <p class="text-xl">A board made for you and improvement suggestions for your product. The best ideas always go first.</p>
        <ul class="list-disc list-inside leading-loose">
            <li>Comments feature for each item</li>
            <li>Convert the best requests to workable <a href="{{ route('features.roadmap') }}" class="text-gray-500 hover:text-gray-400 font-bold">product roadmap tickets</a></li>
            <li>Make your own categories</li>
        </ul>
    </div>
    <div class="">
        <p class="font-bold text-3xl">Build stronger relationships with your customers</p>
        <p class="text-xl">The faithful customers are worth their weight in gold. That is why you should take care of their needs and make them feel valued.</p>
        <ul class="list-disc list-inside leading-loose">
            <li>Get a sight over users' pain points and discuss ideas with them, showing that you work on their requests</li>
            <li>Let the other users vote for an idea that is already posted, expressing their feelings</li>
            <li>Boost your product</li>
        </ul>
    </div>
    <div class="">
        <img src="{{ asset('themes/bimbala/images/features/cropped/upvotes/item_preview.webp') }}" class="max-h-[28rem] mx-auto" alt="Preview of an upvote item" />
    </div>
</section>
@endsection
