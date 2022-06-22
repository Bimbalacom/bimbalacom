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

    <link rel="icon" href="{{ setting('site.favicon', 'https://bimbala.com/themes/bimbala/favicon.ico') }}" type="image/x-icon">
    {{-- Social Share Open Graph Meta Tags --}}
    @if(isset($seo['seo_title'], $seo['seo_description'], $seo->image))
        <meta property="og:title" content="{{ $seo['seo_title'] }}">
        <meta property="og:url" content="{{ \Illuminate\Http\Request::url() }}">
        <meta property="og:image" content="{{ $seo->image }}">
        <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
        <meta property="og:description" content="{{ $seo['seo_description'] }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo['seo_title'] }}">
        <meta itemprop="description" content="{{ $seo['seo_description'] }}">
        <meta itemprop="image" content="{{ $seo->image }}">

        @if(isset($seo->image_w) && isset($seo->image_h))
        <meta property="og:image:width" content="{{ $seo->image_w }}">
        <meta property="og:image:height" content="{{ $seo->image_h }}">
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

    <meta name="keywords" content="{{ setting('site.keywords', 'product development, customer feedback, customers, integrations, bimbala, SaaS, support, roadmap, knowledge board, FAQ, feedback-based product') }}">
    <meta name="google-site-verification" content="173vXOSU7DHgNz9UkFqBkQ1_yThKQPBGvoZrIKoEm6U" />
    {{-- Styles --}}
    <link href="{{ mix('css/app.css', 'themes/' . $theme->folder) }}" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">

    @include('theme::partials.header')

    <main class="flex-grow overflow-x-hidden">
        @unless (Request::path() == '/' ||  Request::path() == 'login' || Request::path() == 'register' ||Request::path() == 'dashboard' || Request::is('account/*')|| Request::is('password/*') || Request::is('@*') || Request::is('blog*'))
            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">
                    <div class="max-w-xl">
                    <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">{{ $seo['seo_title']}}</h2>
                    <p class="mt-5 text-xl text-gray-300">{{ $seo['seo_description'] }}</p>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    @include('theme::partials.footer')

    {{-- Full Screen Loader --}}
    <div id="fullscreenLoader" class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
        <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
    </div>
    {{-- End Full Loader --}}


    @include('theme::partials.toast')
    @if(session('message'))
        <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
    @endif
    @waveCheckout

</body>
</html>
