@extends('theme::layouts.app')

@section('content')

    <div class="py-20">
        <div class="sm:mx-auto sm:w-full sm:max-w-5xl">

            <h1 class="max-w-md text-4xl font-extrabold text-gray-900 sm:mx-auto lg:max-w-none lg:text-5xl sm:text-center">Pricing Plans</h1>
            <p class="max-w-md mx-auto mt-5 text-lg text-gray-500 lg:max-w-none lg:text-xl sm:text-center">Simple transparent pricing to fit businesses of any size.</p>

        </div>

        @include('theme::partials.plans')

		<p class="mt-6 text-center">
			Want to migrate from another platform? Email
			<a class="text-purple-900 font-bold" href="mailto:contact@bimbala.com">contact@bimbala.com</a>
      	</p>
    </div>


<section class="pb-24">
	<div class="container mx-auto px-8">
		<h2 class="mb-4 text-xl font-bold md:text-3xl">Features</h2>
		<table class="w-full">
			<thead>
				<tr>
					<th scope="col">
						<h2 class="px-2 text-lg font-medium">Basic Plan</h2>
					</th>
				</tr>
			</thead>
			<tbody class="space-y-6 text-center divide-y divide-gray-900">
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Unlimited team members</h3>
            <span class="text-xm">Don’t worry the portal has a seat for each of your team members. 👨🏼‍💼</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Product roadmap </h3>
            <span class="text-xm">For those who want to make their pipeline fully transparent. Be sure - it is worth trying. 🏗️</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Roadmap Prioritization</h3>
            <span class="text-xm">The plans always change, so we will not stop you from being agile. 🔃</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">FAQ</h3>
            <span class="text-xm">A fundamental part of autonomous customer support. 💭</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Change log</h3>
            <span class="text-xm">Let the users know what awesome work you’ve done. 🗒️</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Custom subdomain</h3>
            <span class="text-xm">Bimbala portal personalized for you 🏡</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">API Access</h3>
            <span class="text-xm">We are happy to share data with other services. 🧑🏻‍💻</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Over <a class="text-purple-900 font-bold" href="{{ route('integrations') }}">20+ integrations</a></h3>
            <span class="text-xm">Your convenience is important. ☕</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">User permissions</h3>
            <span class="text-xm">The granular control is always a must. 🛠️</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Desktop application</h3>
            <span class="text-xm">For the hard work outside the browser 🖥️ 🛠️</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Mobile application</h3>
            <span class="text-xm">Commuting is a great time to do some work too 📱</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
				<tr>
					<th scope="row" class="text-left">
						<h3 class="py-3">Email & Chat Support</h3>
            <span class="text-xm">After all, we will always be there for you and happy to help! ✉️</span>
					</th>
					<td>
						<svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
						</svg>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
    <section class="pb-24">
        <div class="container mx-auto px-8">
            <h2 class="mb-4 text-xl font-bold md:text-3xl">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-16">
                <div>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Can I cancel my subscription?</h5>
                    <p>We designed to be a long term investment for your business. We don't lock you into a contract. You can cancel at any time. Without any penalties and questions asked.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Can I change plans?</h5>
                    <p>For now no. Until the end of our Beta, there will be only one plan.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">When will the beta end?</h5>
                    <p>We can't give you an exact answer, but don't worry. All our active clients will be "grandfathered in".</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is "grandfathered in"?</h5>
                    <p>You will countinue to pay the same price for your account and countinue to receive all of the new features.</p>
                </div>
                <div>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Is my data safe?</h5>
                    <p>We don't need to sell your data to third parties. We don't need to show you ads. We don't need to compromise on your privacy. We are a bootstrapped company. We are here to help you grow your business.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">What does unlimited with fair usage mean?</h5>
                    <p>Fair usage policies exist in order to stabilize the servers/network and ensure all other customers within the area are receiving equal service and speed.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">How do I implement into my project?</h5>
                    <p>Implementation in your project is very simple. You add our link to your menu or iframe it.</p>
                    <h5 class="mt-10 mb-3 font-semibold text-gray-900">Do you offer refunds?</h5>
                    <p>Short answer: Yes but it depends - we check it case by case.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
