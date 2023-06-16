@extends('theme::layouts.app')

@section('content')

    <div class="py-20">
        <div class="sm:mx-auto sm:w-full sm:max-w-5xl">

            <h1 class="max-w-md text-4xl font-extrabold text-gray-900 sm:mx-auto lg:max-w-none lg:text-5xl sm:text-center">Pricing Plans</h1>
            <p class="max-w-md mx-auto mt-5 text-lg text-gray-500 lg:max-w-none lg:text-xl sm:text-center">Simple transparent pricing to fit businesses of any size.</p>

        </div>

        @include('theme::partials.plans')
    </div>

    <section class="pb-24">
        <div class="px-8 mx-auto max-w-7xl lg:px-16">
            <h2 class="mb-4 text-xl font-bold md:text-3xl">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 gap-0 text-gray-600 md:grid-cols-2 md:gap-16">
                <div>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">How many users, faq, roadmaps do I have?</h5>
                    <p>We operate on the fair usage policies. Typical companies don't overstep it, but if you do, we will contact you and figure it out. </p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Can I change plans?</h5>
                    <p>For now no. Until the end of our Beta, there will be only one plan.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">When will the beta end?</h5>
                    <p>We can't give you an exact answer, but don't worry. All our active clients will be "grandfathered in".</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is "grandfathered in"?</h5>
                    <p>You will countinue to pay the same price for your account and countinue to receive all of the new features.</p>
                </div>
                <div>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">What does unlimited with fair usage mean?</h5>
                    <p>Fair usage policies exist in order to stabilise the servers / network and ensure all other customers within the area are receiving equal service and speed.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">How do I implement into my project?</h5>
                    <p>Implementation in your project is very simple. You just add our link to your menu and that is it.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Do you offer refunds?</h5>
                    <p>Short answer: Yes but it depends - we check it case by case.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Do you offer discounts?</h5>
                    <p>Not on our beta pricing.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
