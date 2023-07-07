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
	<div class="container mx-auto p-6 overflow-x-auto">
		<table class="w-full">
			<caption class="sr-only">Pricing plan comparison</caption>
			<thead>
				<tr>
					<th></th>
					<th scope="col">
						<h2 class="px-2 text-lg font-medium">Basic</h2>
					</th>
				</tr>
			</thead>
			<tbody class="space-y-6 text-center divide-y divide-gray-900">
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Unlimited team members</h3>
            <span class="text-sm">Don’t worry the portal has a seat for each of your team members. 👨🏼‍💼</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Product roadmap </h3>
            <span class="text-sm">For those who want to make their pipeline fully transparent. Be sure - it is worth trying. 🏗️</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Roadmap Prioritization</h3>
            <span class="text-sm">The plans always change, so we will not stop you from being agile. 🔃</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">FAQ</h3>
            <span class="text-sm">A fundamental part of autonomous customer support. 💭</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Change log</h3>
            <span class="text-sm">Let the users know what awesome work you’ve done. 🗒️</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Custom subdomain</h3>
            <span class="text-sm">Bimbala portal personalized for you 🏡</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">API Access</h3>
            <span class="text-sm">We are happy to share data with other services. 🧑🏻‍💻</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3"><a href="#">Over 20+ integrations</a></h3>
            <span class="text-sm">Your convenience is important. ☕</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">User permissions</h3>
            <span class="text-sm">The granular control is always a must. 🛠️</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Desktop application</h3>
            <span class="text-sm">For the hard work outside the browser 🖥️ 🛠️</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Mobile application</h3>
            <span class="text-sm">Commuting is a great time to do some work too 📱</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Email & Chat Support</h3>
            <span class="text-sm">After all, we will always be there for you and happy to help! ✉️</span>
					</th>
					<td>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-label="Included in Free plan" class="w-5 h-5 mx-auto dark:text-purple-700">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

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
