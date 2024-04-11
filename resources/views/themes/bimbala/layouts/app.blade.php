<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if(isset($seo['seo_title']))
        <title>{{ $seo['seo_title'] . ' | '. setting('site.title', 'Bimbala')}}</title>
    @else
        <title>{{ setting('site.title', 'Bimbala') . ' - ' . setting('site.description', 'Bimbala is a SaaS helping companies upgrade their support team. Integration of roadmaps, knowledge boards and etc. made easy. Make your customers see you work for them and make them part of your business!') }}</title>
    @endif
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#05070c"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">
    <meta name="facebook-domain-verification" content="i8nvt9l8tdw2jqc1t55cdoq3c6znvi" />
    <meta name="msvalidate.01" content="C0A3EBD94A574266297F779F912F41C6" />
    @if(isset($seo['canonical_url']))
        <link rel="canonical" href="{{ $seo['canonical_url'] }}" />
    @else
        <link rel="canonical" href="{{ url()->current() }}" />
    @endif
    <link rel="preconnect" href="https://client.crisp.chat">
    <link rel="preconnect" href="https://analytics.bimbala.com">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('themes/bimbala/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('themes/bimbala/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('themes/bimbala/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('themes/bimbala/images/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('themes/bimbala/images/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">

    {{-- Social Share Open Graph Meta Tags --}}
    @if(isset($seo['seo_title'], $seo['seo_description']))
        <meta property="og:title" content="{{ $seo['seo_title'] }}">
        <meta property="og:url" content="{{ request()->url() }}">
        @if(isset($seo['image']))
            <meta property="og:image" content="{{ $seo['image'] }}">
        @endif
        @if(isset($seo['author']))
        <meta name="author" content="{{ $seo['author'] }}">
        @endif
        <meta property="og:type" content="website">
        <meta property="og:description" content="{{ $seo['seo_description'] }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo['seo_title'] }}">
        <meta itemprop="description" content="{{ $seo['seo_description'] }}">
        @if(isset($seo['image']))
            <meta itemprop="image" content="{{ $seo['image'] }}">
        @endif

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['seo_title'] }}">
        <meta name="twitter:description" content="{{ $seo['seo_description'] }}">
        @if(isset($seo['image']))
            <meta name="twitter:image" content="{{ $seo['image'] }}">
        @endif
    @endif
    {!! \Spatie\SchemaOrg\Schema::organization()->url(route('wave.home'))->name('Bimbala')->toScript() !!}
    @if(isset($schema))
    {!! $schema !!}
    @endif

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    @if(isset($seo['seo_description']))
        <meta name="description" content="{{ $seo['seo_description'] }}">
    @else
        <meta name="description" content="{{ setting('site.description', 'Bimbala is a SaaS helping companies upgrade their support team. Integration of roadmaps, knowledge boards and etc. made easy. Make your customers see you work for them and make them part of your business!') }}">
    @endif

    <meta name="keywords" content="{{ $seo['keywords'] ?? setting('site.keywords', 'product development, customer feedback, customers, integrations, bimbala, SaaS, support, roadmap, knowledge board, FAQ, feedback-based product') }}">
    <meta name="google-site-verification" content="173vXOSU7DHgNz9UkFqBkQ1_yThKQPBGvoZrIKoEm6U" />
    {{-- Styles --}}
    <link href="{{ mix('css/app.css', 'themes/' . $theme->folder) }}" rel="preload" as="style" fetchpriority="low" onload="this.rel='stylesheet'">
</head>
<body>

@include('theme::partials.header')

<main class="flex-grow overflow-x-hidden">
    @unless (Request::is(['/', 'login', 'announcement*', 'pricing', 'register', 'dashboard', 'account/*', 'password/*', '@*', 'blog/*']))
        <div class="bg-gray-900">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:px-8 lg:flex lg:justify-between">
                <div class="max-w-xl">
                    <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">{{ $seo['seo_title']}}</h1>
                    @if($seo['seo_title'] !== $seo['seo_description'] && !empty($seo['seo_description']))
                        <p class="mt-5 text-xl text-gray-300">{{ $seo['seo_description'] }}</p>
                    @endif
                    @yield('titlebar-content.right')
                </div>
                @if(Request::is(['blog', 'use-case', 'about-us', 'apps', 'integrations']))
                    <div class="mt-3 w-full max-w-md">
                        <p class="mb-3 block text-base font-medium text-gray-300">Stay ahead of the game with insider tips and resources!</p>
                        <form
                            action="https://bimbala.us17.list-manage.com/subscribe/post?u=118b625f8f6bac41ebe6c7be3&amp;id=e974cbc9ee"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            target="_blank" novalidate class="sm:flex">
                            <input type="hidden" name="b_118b625f8f6bac41ebe6c7be3_e974cbc9ee" tabindex="-1" value="">
                            <label for="email" name="EMAIL" class="sr-only">Email address</label>
                            <input id="email" name="EMAIL" name="email-address" type="email" autocomplete="email"
                                   required
                                   class="w-full px-5 py-3 border border-gray-300 shadow-sm placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs rounded-md"
                                   placeholder="Enter your email">
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit"
                                        class="w-full flex items-center justify-center py-3 px-5 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Notify me
                                </button>
                            </div>
                        </form>
                        <p class="mt-3 text-sm text-white">
                            We care about the protection of your data. Read our
                            <a href="/privacy-policy" class="font-medium underline">
                                Privacy Policy.
                            </a>
                        </p>
                    </div>
                @else
                    @yield('titlebar-content.left')
                @endif
            </div>
        </div>
    @endif
    @yield('content')
</main>

@include('theme::partials.footer')

{{-- Full Screen Loader --}}
<div id="fullscreenLoader"
     class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
    <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
         viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
</div>
{{-- End Full Loader --}}


@include('theme::partials.toast')
@if(session('message'))
    <script>setTimeout(function () {
            popToast("{{ session('message_type') }}", "{{ session('message') }}");
        }, 10);</script>
@endif
@waveCheckout

</body>
</html>
