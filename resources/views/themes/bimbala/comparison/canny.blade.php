@extends('theme::layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row w-full px-8 md:mx-auto py-12 xl:max-w-7xl items-center">
        <h2 class="text-3xl font-semibold md:w-1/4">Overview: Why people choose Bimbala over Canny</h2>
        <div class="flex md:w-2/3 mx-auto">
            <div class="w-1/2 border p-4 text-center">
                <img
                    src="{{URL::asset('bimbala/img/logo/logo-sm.webp')}}"
                    srcset="
                        {{ asset('bimbala/img/logo/logo-xs.webp') }} 320w,
                        {{ asset('bimbala/img/logo/logo-sm.webp') }} 375w,
                        {{ asset('bimbala/img/logo/logo-md.webp') }} 768w,
                        {{ asset('bimbala/img/logo/logo-lg.webp') }} 1024w,
                        {{ asset('bimbala/img/logo/logo-xl.webp') }} 1500w,
                        {{ asset('bimbala/img/logo/logo-2xl.webp') }} 2000w,
                    "
                    alt="Bimbala logo"
                    class="mx-auto mb-4 h-12 hover:animate-spin"
                >
                <div class="flex-col text-left">
                    <div class="border-b-2 border-indigo-200 py-2">
                        <p class="text-lg font-semibold whitespace-nowrap">Affordable</p>
                        <p class="text-gray-600 h-72 md:h-36 xl:h-20 overflow-clip">We offer lower <a href="{{ route('wave.pricing') }}" class="text-indigo-600">plans' prices</a> for our customers. Using one of our plans, you get all pillar features that Canny does and more.</p>
                    </div>
                    <div class="py-2">
                        <p class="text-lg font-semibold whitespace-nowrap">Universal</p>
                        <p class="text-gray-600 h-72 md:h-36 xl:h-20 overflow-clip">Each kind of product company may leverage our product. Software companies are welcome, but physical products are awesome as well.</p>
                    </div>
                </div>
            </div>

            <div class="w-1/2 border p-4 text-center">
                <img
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNjAgNzEuOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjYwIDcxLjkiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwYXRoIGQ9Ik05Ny44IDEuOEg5MGMtLjggMC0xLjQuNi0xLjQgMS40djQuM2MtMS0xLTIuNC0yLjUtMy4zLTMuMi0zLjYtMi43LTcuOC0zLjktMTMtMy43LTUuMi4yLTEwLjEgMi0xMy45IDUuMi01LjIgNC40LTguMSAxMC4yLTguNiAxNy4zLS41IDYuNyAxLjEgMTIuNiA0LjggMTcuOCA0LjIgNS45IDExLjIgOS4zIDE4LjEgOS4zIDEuNyAwIDMuNS0uMiA1LjEtLjcgNC40LTEuMiA3LjctMy4yIDEwLjMtNi4zLjEtLjIuMy0uNC41LS43djVjMCAuOC42IDEuNCAxLjQgMS40aDcuN2MuOCAwIDEuNC0uNiAxLjQtMS40VjMuMmMuMS0uOC0uNS0xLjQtMS4zLTEuNHpNNjAuNyAyOC4yYy0uOC00LjUuMS04LjUgMi42LTExLjggMi44LTMuOCA2LjQtNS43IDEwLjctNS43LjYgMCAxLjMgMCAxLjkuMSA2LjcuOCAxMi4yIDYuOCAxMi41IDEzLjUuMyA1LjUtMS44IDEwLTYuMiAxMy4yLTIuMiAxLjYtNy43IDMuMS0xMi40IDEuNi00LjctMS42LTguMi01LjYtOS4xLTEwLjl6TTI1OS40IDIuNGMtLjMtLjQtLjctLjYtMS4yLS42aC04LjRjLS42IDAtMS4xLjMtMS4zLjktMS40IDMuNS04LjggMjEuNS0xMi42IDMwLjYgMCAwIDAtLjEtLjEtLjFsLTIuMy01LjVjLTMuNC04LjMtNi44LTE2LjYtMTAuMy0yNC45LS4yLS41LS43LS45LTEuMy0uOWgtOC40Yy0uNSAwLS45LjItMS4yLjYtLjMuNC0uMy45LS4xIDEuMyAyLjkgNy4xIDE2LjcgNDAgMTcuOCA0Mi44bC05LjQgMjMuMWMtLjIuNC0uMS45LjEgMS4zLjMuNC43LjYgMS4yLjZoOC4zYy42IDAgMS4xLS4zIDEuMy0uOWw2LTE0LjVjOC42LTIwLjcgMTkuMy00Ni40IDIxLjgtNTIuNC40LS41LjQtMSAuMS0xLjR6bS01MiAxMS42Yy0xLjYtNS44LTQuOC05LjctOS42LTExLjgtNS0yLjEtMTAuMi0yLjItMTUuNS0uMy0zLjIgMS4yLTUuNiAzLTcuNSA1LjVWMy4yYzAtLjgtLjYtMS40LTEuNC0xLjRoLTcuOGMtLjggMC0xLjQuNi0xLjQgMS40djQ0LjNjMCAuOC42IDEuNCAxLjQgMS40aDcuOGMuNCAwIC43LS4xIDEtLjQuMy0uMy40LS42LjQtMSAwLTIuNS0uMS0yMiAwLTI1IC4xLTQuNyAyLjQtOC4yIDYuNi0xMC4yIDEuOC0uOSAzLjctMS4zIDYtMS4zIDMuNS0uMSA2LjMgMS40IDguMiA0LjIgMS40IDIuMSAyIDQuNSAyIDcuOHYyNC41YzAgLjQuMS43LjQgMSAuMy4zLjYuNCAxIC40aDcuOGMuOCAwIDEuNC0uNiAxLjQtMS40VjIyLjNjLjEtMy4zLS4yLTUuOS0uOC04LjN6bS01NC43LS4zYy0yLjItNy45LTguMS0xMi42LTE2LjUtMTMuMS0yLjMtLjEtNC42LjEtNy4xLjktMy44IDEuMS02LjQgMi44LTguOSA1LjlWMy4yYzAtLjgtLjYtMS40LTEuNC0xLjRIMTExYy0uOCAwLTEuNC42LTEuNCAxLjR2NDQuM2MwIC44LjYgMS40IDEuNCAxLjRoNy43Yy40IDAgLjctLjEgMS0uNC4zLS4zLjQtLjYuNC0xIDAtMi45LS4xLTE3LjYgMC0yNC44LjEtNC45IDIuMy04LjQgNi43LTEwLjQgMS43LS44IDMuNi0xLjIgNS45LTEuMiAzLjUgMCA2LjMgMS40IDguMiA0LjIgMS40IDIuMSAyIDQuNSAyIDcuOXYyNC40YzAgLjQuMS43LjQgMSAuMy4zLjYuNCAxIC40aDcuOGMuOCAwIDEuNC0uNiAxLjQtMS40VjIyLjVjLjItMy40LS4xLTYuMi0uOC04Ljh6bS0xMTQgMjIuNy0uNC0uNGMtLjYtLjUtMS40LS41LTIgMC02LjggNi40LTE3IDQuMi0yMS4yLS4zLTUuMS01LjMtNS42LTE0LTEtMTkuOEMxNi40IDEzIDIwLjYgMTEgMjUgMTAuNmM0LjMtLjMgOC40IDEuMSAxMS4zIDMuOS42LjUgMS40LjYgMiAwbDUtNC43Yy4zLS4zLjQtLjYuNC0xcy0uMS0uNy0uNC0xYy0uNi0uNi0xLjYtMS43LTIuNS0yLjRDMzkgNC4xIDM2LjkgMyAzNC42IDIuMiAyNy41LS4zIDIwLjQuMSAxMy40IDMuNSA4LjIgNi4xIDQuMyAxMC4yIDIgMTUuOC40IDE5LjgtLjEgMjQuMS41IDI4LjljLjYgNC4zIDIuMiA4LjIgNC42IDExLjQgNC43IDYuMSAxMS4yIDkuNCAxOS4zIDkuOGgxLjVjNS4zIDAgMTAuMS0xLjUgMTQuNC00LjYgMS4zLS45IDIuMy0xLjggMy4xLTIuOC41LS42LjUtMS41LS4xLTIgMCAuMS0zLjktMy42LTQuNi00LjN6IiBzdHlsZT0iZmlsbDojNTI1ZGY5Ii8+PC9zdmc+"
                    alt="Canny's logo"
                    class="mx-auto mb-4 h-12"
                >
                <div class="flex-col text-left">
                    <div class="border-b-2 border-indigo-200 py-2 ">
                        <p class="text-lg font-semibold whitespace-nowrap">Too expensive</p>
                        <p class="text-gray-600 h-72 md:h-36 xl:h-20 overflow-clip">While the free version is really limited, their paid plans start at $79 per month. This makes their starter plan unaffordable for startups.</p>
                    </div>
                </div>
                <div class="flex-col text-left">
                    <div class="py-2">
                        <p class="text-lg font-semibold whitespace-nowrap">Software vendors only</p>
                        <p class="text-gray-600 h-72 md:h-36 xl:h-20 overflow-clip">Their features are tied to software vendors' needs. It's hard to onboard and make full use of it if you are a non-software company.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row w-full px-8 md:mx-auto py-12 xl:max-w-7xl items-center">
        <h2 class="text-3xl font-semibold md:w-1/4">Bimbala's features vs Canny's features</h2>
        <div class="flex md:w-2/3 mx-auto">
            <div class="relative overflow-x-auto overflow-y-hidden lg:overflow-hidden">
                <div class="absolute inset-x-4 inset-y-0 -z-10 hidden lg:flex">
                    <div class="flex w-1/3 px-4 ml-[33.33%]" aria-hidden="true"><div class="w-full rounded-xl border border-gray-600/50 bg-gray-300/25"></div></div>
                </div>
                <table class="w-full border-collapse border-spacing-x-8 text-left lg:table-fixed table-auto">
                    <caption class="sr-only">
                        Features comparison
                    </caption>
                    <colgroup>
                        <col class="w-full lg:w-1/3" />
                        <col class="w-full lg:w-1/3" />
                        <col class="w-full lg:w-1/3" />
                    </colgroup>
                    <thead>
                    <tr>
                        <th scope="colgroup" class="pb-4 pt-8 text-sm font-semibold leading-6">
                            Feature
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <th scope="col" class="pb-4 pt-8 text-sm font-semibold leading-6">
                            <div class="flex items-center justify-center text-lg font-semibold leading-7">
                                <div class="relative z-20 flex items-center justify-between">
                                    <a href="https://bimbala.com" class="relative flex items-center">
                                        <img class="h-8 w-8"
                                             src="{{URL::asset('bimbala/img/logo/logo-sm.webp')}}"
                                             srcset="
                                                {{ asset('bimbala/img/logo/logo-xs.webp') }} 320w,
                                                {{ asset('bimbala/img/logo/logo-sm.webp') }} 375w,
                                                {{ asset('bimbala/img/logo/logo-md.webp') }} 768w,
                                                {{ asset('bimbala/img/logo/logo-lg.webp') }} 1024w,
                                                {{ asset('bimbala/img/logo/logo-xl.webp') }} 1500w,
                                                {{ asset('bimbala/img/logo/logo-2xl.webp') }} 2000w,
                                            "
                                             alt="Bimbala logo"
                                             width="32" height="32"
                                        >
                                    </a>
                                </div>
                            </div>
                        </th>
                        <th scope="col" class="pb-4 pt-8 text-sm font-semibold leading-6">
                            <div class="flex items-center justify-center text-lg font-semibold leading-7"><span>Canny</span></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b border-indigo-400">
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            <a href="{{ route('features.faq') }}" class="text-indigo-600">FAQ</a>
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <img src="{{ asset('themes/bimbala/images/comparison/dash.svg') }}" class="text-indigo-500 mx-auto h-5 w-5" alt="Missing" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            <a href="{{ route('apps') }}" class="text-indigo-600">Mobile application</a>
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <img src="{{ asset('themes/bimbala/images/comparison/dash.svg') }}" class="text-indigo-500 mx-auto h-5 w-5" alt="Missing" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            <a href="{{ route('apps') }}" class="text-indigo-600">Desktop application</a>
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <img src="{{ asset('themes/bimbala/images/comparison/dash.svg') }}" class="text-indigo-500 mx-auto h-5 w-5" alt="Missing" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            Dedicated custom subdomain
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            {{--<a href="{{ route('features.changelog') }}" class="text-indigo-600">--}}Changelog{{--</a>--}}
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            <a href="{{ route('features.roadmap') }}" class="text-indigo-600">Product roadmap</a>
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            <a href="{{ route('features.upvote') }}" class="text-indigo-600">Feedback board</a>
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4 xl:px-8">
                            <svg viewBox="0 0 24 24" fill="none" class="text-indigo-500 mx-auto h-5 w-5" aria-hidden="true">
                                <path opacity="0.12" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="py-4 text-sm font-normal leading-6">
                            Billing base
                            <div class="absolute inset-x-8 mt-4 h-px"></div>
                        </th>
                        <td class="px-6 py-4 xl:px-8 text-center">
                            Features set
                        </td>
                        <td class="px-6 py-4 xl:px-8 text-center">
                            User seats
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row w-full px-8 md:mx-auto py-12 xl:max-w-7xl items-center">
        <h2 class="text-3xl font-semibold md:w-1/4">Conclusion</h2>
        <div class="flex md:w-2/3 mx-auto">
            <div class="prose text-xl">
                <p>Canny is a simple to use tool with all essential functionalities in one place. It also offers a lot of integrations which would ideally fit your workflow.</p>
                <p>However, while being the most used, it is expensive for the small companies. What is more, it is even more hard-to-use for non-software products.</p>
                <p>Bimbala is a great alternative to Canny due to its simplicity and cost-effectiveness. It is also accessible on different platforms and offers not less than Canny.</p>
            </div>
        </div>
    </div>
@endsection
