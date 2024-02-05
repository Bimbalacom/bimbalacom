@extends('theme::layouts.app')

@section('content')
    {{-- Content --}}
    <section class="w-full py-12 lg:py-24">
    {{-- Integrations --}}
            <div class="max-w-7xl px-10 mx-auto sm:text-center">
                <p class="mt-4 text-gray-600 text-base sm:text-xl lg:text-2xl">We're flexible.<br class="lg:hidden hidden sm:block"> Check out with who we are integrated  👇</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                    {{--First row --}}
                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\google-tag-manager.svg', 'title' => 'Google Tag Manager', 'category' => 'Web Tag Manager', 'description' => 'Web Tag Manager'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\mailchimp.svg', 'title' => 'Mailchimp', 'category' => 'Customer Relations', 'description' => 'WMarketing, Automation & Email Platform'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\hubspot.svg', 'title' => 'Hubspot', 'category' => 'Customer Relations', 'description' => 'Inbound Marketing, Sales, and Service Software'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\zendesk.svg', 'title' => 'Zendesk', 'category' => 'Customer Relations', 'description' => 'Customer Service Software & Sales CRM'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\disqus.svg', 'title' => 'Disqus', 'category' => 'Customer Relations', 'description' => 'Blog comment hosting service'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\plausible-analytics.svg', 'title' => 'Plausible Analytics', 'category' => 'Customer Relations', 'description' => 'Оpen-source and privacy-friendly alternative to Google Analytics'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\google_analytics.svg', 'title' => 'Google Analytics', 'category' => 'Customer Relations', 'description' => 'Inbound Marketing, Sales, and Service Software'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\facebook-messanger.svg', 'title' => 'Facebook Messenger', 'category' => 'Customer Relations', 'description' => 'Messaging app and platform'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\crisp.svg', 'title' => 'Crisp', 'category' => 'Customer Relations', 'description' => 'Messaging Platform For Startups'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\tawkto.png', 'title' => 'TawkTo', 'category' => 'Customer Relations', 'description' => '100% FREE live chat software for your website'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\tidio.svg', 'title' => 'Tidio', 'category' => 'Customer Relations', 'description' => 'Inbound Marketing, Sales, and Service Software'])
                    @endcomponent

                    @component('theme::components.integration-card', ['image' => 'themes\bimbala\images\integrations\matomo.svg', 'title' => 'Matomo', 'category' => 'Customer Relations', 'description' => 'Google Analytics alternative that protects your data and your customers privacy'])
                    @endcomponent
                    
                </div>
                <p class="pb-8 text-purple-900 font-medium uppercase">Want more integrations? Please tell us !</p>
                <a href="https://board.bimbala.com/" class="w-full px-8 py-3 text-lg text-center bg-purple-900 text-white transition duration-150 ease-in-out bg-white sm:w-auto focus:outline-none rounded">Our roadmap</a>
            </div>
{{--End of Integrations --}}
    </section>
@endsection
