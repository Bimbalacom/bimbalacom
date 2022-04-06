@extends('theme::layouts.app')

@section('content')
    {{-- Content --}}
    <section class="w-full py-12 bg-white lg:py-24">
    {{-- Integrations --}}
            <div class="max-w-7xl px-10 mx-auto sm:text-center">
                <h3 class="font-bold text-3xl sm:text-3xl lg:text-4xl mt-3">Connect with Your Favorite Apps.</h3>
                <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We're flexible.<br class="lg:hidden hidden sm:block"> Check out with who we are integrated  👇</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                    {{--First row --}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google-tag-manager.svg') }}" loading="lazy" alt="Google Tag Manager">
                        <p class="font-bold mt-4">Google Tag Manager</p>
                        <p class="mt-2 text-sm text-gray-500">Web Tag Manager</p>
                        <p class="mt-2 text-sm text-gray-500">Tag management system</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\mailchimp.svg') }}" loading="lazy" alt="Mailchimp">
                        <p class="font-bold mt-4">Mailchimp *</p>
                        <p class="mt2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-500">Marketing, Automation &amp; Email Platform</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\hubspot.svg') }}" loading="lazy" alt="Hubspot">
                        <p class="font-bold mt-4">Hubspot *</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\zendesk.svg') }}" loading="lazy" alt="Zendesk">
                        <p class="font-bold mt-4">Zendesk *</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Service Software &amp; Sales CRM</p>
                    </div>
                    {{--Second row--}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\disqus.svg') }}" loading="lazy" alt="Disqus">
                        <p class="font-bold mt-4">Disqus *</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">American blog comment hosting service</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\plausible-analytics.svg') }}" loading="lazy" alt="Plausible Analytics">
                        <p class="font-bold mt-4">Plausible Analytics</p>
                        <p class="mt2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-500">Оpen-source and privacy-friendly alternative to Google Analytics</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google_analytics.svg') }}" loading="lazy" alt="Google Analytics">
                        <p class="font-bold mt-4">Google Analytics</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\facebook-messanger.svg') }}" loading="lazy" alt="Facebook Messenger">
                        <p class="font-bold mt-4">Facebook Messenger</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">messaging app and platform. </p>
                    </div>
                    {{--Three row--}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\crisp.svg') }}" loading="lazy" alt="Crisp">
                        <p class="font-bold mt-4">Crisp</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Messaging Platform For Startups</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\tawkto.png') }}" loading="lazy" alt="TawkTo">
                        <p class="font-bold mt-4">TawkTo</p>
                        <p class="mt2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-500">100% FREE live chat software for your website!</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\tidio.svg') }}" loading="lazy" alt="Tidio">
                        <p class="font-bold mt-4">Tidio</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\matomo.svg') }}" loading="lazy" alt="Matomo">
                        <p class="font-bold mt-4">Matomo</p>
                        <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-500">Google Analytics alternative that protects your data and your customers' privacy</p>
                    </div>
                </div>
                <p class="pb-8 text-purple-900 font-medium uppercase">Want more integrations? Please tell us !</p>
                <a href="https://board.bimbala.com/" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out bg-white sm:w-auto focus:outline-none rounded">Our roadmap</a>
            </div>
{{--End of Integrations --}}
    </section>
@endsection
