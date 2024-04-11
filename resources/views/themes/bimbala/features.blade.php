@extends('theme::layouts.app')

@section('content')
    <div
        x-data="{ darkMode: false, userDropdownOpen: false }"
        x-bind:class="{ 'dark': darkMode }"
    >
        <!-- Page Container -->
        <div
            id="page-container"
            class="mx-auto flex w-full min-w-[320px] flex-col"
        >
            <!-- Page Content -->
            <main id="page-content" class="flex max-w-full flex-auto flex-col">
                <div
                    class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-24 xl:max-w-7xl"
                >
                    <!-- Popular Features -->
                    <section class="space-y-6">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold">
                                Popular Features
                            </h2>
                        </div>
                        <nav class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                            <!-- Feature -->
                            <a
                                href="{{route('features.roadmap')}}"
                                class="group aspect-h-10 aspect-w-16 relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25"
                            >
                                <img
                                    class="object-cover rounded-b-3xl"
                                    src="{{ asset('themes/bimbala/images/features/cropped/roadmap.webp') }}"
                                />
                                <div
                                    class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/10 to-black"
                                >
                                    <div class="flex flex-1 items-end justify-between gap-2 px-4 py-5">
                                        <div class="space-y-1">
                                            <h3 class="text-xl font-semibold text-white">
                                                Roadmap
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- END Feature -->

                            <!-- Feature -->
                            <a
                                href="{{route('features.upvote')}}"
                                class="group aspect-h-10 aspect-w-16 relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75"
                            >
                                <img
                                    class="object-cover rounded-b-3xl"
                                    src="{{ asset('themes/bimbala/images/features/cropped/upvote.webp') }}"
                                />
                                <div
                                    class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/10 to-black"
                                >
                                    <div class="flex flex-1 items-end justify-between gap-2 px-4 py-5">
                                        <div class="space-y-1">
                                            <h3 class="text-xl font-semibold text-white">
                                                Upvote
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- END Feature -->

                            <!-- Feature -->
                            <a
                                href="{{route('features.faq')}}"
                                class="group aspect-h-10 aspect-w-16 relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25 lg:col-span-2"
                            >
                                <img
                                    class="h-full w-full rounded-b-3xl"
                                    src="{{ asset('themes/bimbala/images/features/cropped/faq.webp') }}"
                                />
                                <div
                                    class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/10 to-black"
                                >
                                    <div class="flex flex-1 items-end justify-between gap-2 px-4 py-5">
                                        <div class="space-y-1">
                                            <h3 class="text-xl font-semibold text-white">
                                                FAQ
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- END Feature -->
                        </nav>
                    </section>
                    <!-- END Popular Features -->
                </div>
            </main>
            <!-- END Page Content -->
        </div>
        <!-- END Page Container -->
    </div>
@endsection

