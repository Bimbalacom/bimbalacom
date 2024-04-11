@extends('theme::layouts.app')

@section('content')
    <div>
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
                    <!-- Popular Tools -->
                    <section class="space-y-6">
                        <nav class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                            <!-- Tool -->
                            <a
                                href="{{route('tools.responsive-images')}}"
                                class="group aspect-h-10 aspect-w-16 relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-indigo-500/50 active:opacity-75 active:ring-indigo-500/25"
                            >
                                <img
                                    class="object-cover rounded-b-3xl"
                                    src="{{ asset('themes/bimbala/images/tools/responsive-images.webp') }}"
                                    alt="Same image in different sizes"
                                    width="100%"
                                    height="100%"
                                />
                                <div
                                    class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-black/10 to-black"
                                >
                                    <div class="flex flex-1 items-end justify-between gap-2 px-4 py-5">
                                        <div class="space-y-1">
                                            <h2 class="text-xl font-semibold text-white">
                                                Responsive images generator
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- END Tool -->
                        </nav>
                    </section>
                    <!-- END Popular Tools -->
                </div>
            </main>
            <!-- END Page Content -->
        </div>
        <!-- END Page Container -->
    </div>
@endsection
