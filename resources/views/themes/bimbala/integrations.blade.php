@extends('theme::layouts.app')

@section('content')
    {{-- Content --}}
    <section class="w-full py-12 lg:py-24">
    {{-- Integrations --}}
            <div class="max-w-7xl px-10 mx-auto sm:text-center">
                <h2 class="mt-4 text-gray-600 text-base sm:text-xl lg:text-2xl">We're flexible.<br class="lg:hidden hidden sm:block"> Check out with who we are integrated  👇</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                    {{--First row --}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google-tag-manager.svg') }}" loading="lazy" alt="Google Tag Manager" width="64px" height="64px">
                        <p class="font-bold mt-4">Google Tag Manager</p>
                        <p class="mt-2 text-sm text-gray-600">Web Tag Manager</p>
                        <p class="mt-2 text-sm text-gray-600">Tag management system</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\mailchimp.svg') }}" loading="lazy" alt="Mailchimp" width="64px" height="64px">
                        <p class="font-bold mt-4">Mailchimp</p>
                        <p class="mt2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-600">Marketing, Automation &amp; Email Platform</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\hubspot.svg') }}" loading="lazy" alt="Hubspot" width="64px" height="64px">
                        <p class="font-bold mt-4">Hubspot</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\zendesk.svg') }}" loading="lazy" alt="Zendesk" width="64px" height="64px">
                        <p class="font-bold mt-4">Zendesk</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Service Software &amp; Sales CRM</p>
                    </div>
                    {{--Second row--}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\disqus.svg') }}" loading="lazy" alt="Disqus" width="64px" height="64px">
                        <p class="font-bold mt-4">Disqus</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">American blog comment hosting service</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\plausible-analytics.svg') }}" loading="lazy" alt="Plausible Analytics" width="64px" height="64px">
                        <p class="font-bold mt-4">Plausible Analytics</p>
                        <p class="mt2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-600">Оpen-source and privacy-friendly alternative to Google Analytics</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\google_analytics.svg') }}" loading="lazy" alt="Google Analytics" width="64px" height="64px">
                        <p class="font-bold mt-4">Google Analytics</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\facebook-messanger.svg') }}" loading="lazy" alt="Facebook Messenger" width="64px" height="64px">
                        <p class="font-bold mt-4">Facebook Messenger</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">messaging app and platform. </p>
                    </div>
                    {{--Three row--}}
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\crisp.svg') }}" loading="lazy" alt="Crisp" width="64px" height="64px">
                        <p class="font-bold mt-4">Crisp</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Messaging Platform For Startups</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\tawkto.png') }}" loading="lazy" alt="TawkTo" width="64px" height="64px">
                        <p class="font-bold mt-4">TawkTo</p>
                        <p class="mt2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt2 text-sm text-gray-600">100% FREE live chat software for your website!</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\tidio.svg') }}" loading="lazy" alt="Tidio" width="64px" height="64px">
                        <p class="font-bold mt-4">Tidio</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Inbound Marketing, Sales, and Service Software</p>
                    </div>
                    <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <img class="w-16 h-auto" src="{{ asset('themes\bimbala\images\integrations\matomo.svg') }}" loading="lazy" alt="Matomo" width="64px" height="64px">
                        <p class="font-bold mt-4">Matomo</p>
                        <p class="mt-2 text-sm text-gray-600">Customer Relations</p>
                        <p class="mt-2 text-sm text-gray-600">Google Analytics alternative that protects your data and your customers' privacy</p>
                    </div>
                </div>
                <p class="pb-8 text-purple-900 font-medium uppercase">Want more integrations? Please tell us !</p>
                <a href="https://board.bimbala.com/" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out bg-white sm:w-auto focus:outline-none rounded">Our roadmap</a>
            </div>
{{--End of Integrations --}}
    </section>
@endsection
