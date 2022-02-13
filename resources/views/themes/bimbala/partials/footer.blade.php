<!-- Footer -->
<footer>
<section class="pt-6 w-full bg-gray-900 ">
    <div class="px-6 mx-auto max-w-7xl xl:px-12">
        <div class="box-border flex flex-wrap pt-20 pb-0 text-base leading-tight text-gray-500 md:pb-12">
            <div class="flex-initial w-1/2 px-2 pb-12 leading-tight md:w-1/4">
                <div class="box-border text-base text-gray-500">
                @if(Voyager::image(theme('footer_logo')))
                    <img class="h-10" src="{{ Voyager::image(theme('footer_logo')) }}" alt="Company name">
                @else
                    <h2 class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl">Bimbala</h2>
                @endif
                  <ul class="p-0 m-0 text-base leading-tight list-none">
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('wave.home') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Home</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="https://board.bimbala.com/" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Demo</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('try-it') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Try it</a>
                        </li>
                          <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('use-case') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Use-Case</a>
                        </li>
                        {{--
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Integrations</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Changelog</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div width="6,3" class="flex-initial w-1/2 px-2 pb-12 leading-tight md:w-1/4">
                <div class="box-border text-base text-gray-500">
                    <h2 class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl">
                        Product
                    </h2>
                    <ul class="p-0 m-0 text-base leading-tight list-none">
                    {{--    <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Drag'n Drop Builder</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Developer Inspector</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Theme Configuration</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Template Customization</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Developer API</a>
                    --}} </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('integrations') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Integrations</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div width="6,3" class="flex-initial w-1/2 px-2 pb-12 leading-tight md:w-1/4">
                <div class="box-border text-base text-gray-500">
                    <h2 class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl">
                        Company
                    </h2>
                    <ul class="p-0 m-0 text-base leading-tight list-none">
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('about-us') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">About Us</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="{{ route('team') }}" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Our Team</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="https://uptime.bimbala.com/" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Uptime</a>
                        </li>
                         <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="/security" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Security</a>
                        </li>
                          <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="/legal" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Legal</a>
                        </li>
                        {{-- <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Jobs</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Technology</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Security</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="flex-initial w-1/2 px-2 pb-12 leading-tight md:w-1/4">
                <div class="box-border text-base text-gray-500">
                    <h2 class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl">
                        Support
                    </h2>
                {{--     <ul class="p-0 m-0 text-base leading-tight list-none">
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Getting started</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Suggest a feature</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Help center</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Server status</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Report a bug</a>
                        </li>
                        <li class="box-border py-2 text-sm font-normal text-left text-gray-500 md:text-base md:mb-1">
                            <a href="#_" class="text-base leading-tight no-underline bg-transparent cursor-pointer hover:text-gray-400">Press Kit</a>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-between w-full py-12 text-xs leading-none text-gray-500 border-t border-gray-800 lg:flex-row">
            <div class="flex self-start flex-grow-0 flex-shrink-0 w-full leading-none lg:w-auto">
                <span class="inline-flex justify-center w-full mt-4 space-x-5 sm:ml-auto sm:mt-0">
                    <a href="https://www.facebook.com/bimbalacom" class="text-gray-400 hover:text-gray-200">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/bimbalaapp/" class="text-gray-400 hover:text-gray-200">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="https://twitter.com/bimbalacom/" class="text-gray-400 hover:text-gray-200">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>

                    <a href="https://github.com/bimbalacom" class="text-gray-400 hover:text-gray-200">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://bimbala.com/discord" class="text-gray-400 hover:text-gray-200">
                        <span class="sr-only">Discord</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                     </a>

                </span>
            </div>
            <ul class="flex my-6 text-sm text-gray-500 list-none lg:flex-grow-0 lg:flex-shrink-0 lg:my-0">
                <li class="box-border block font-semibold text-left">
                    <a href="/privacy-policy" class="pr-5 mr-5 text-gray-500 no-underline bg-transparent border-r border-gray-700 cursor-pointer">Privacy Policy</a>
                </li>
                <li class="box-border block font-semibold text-left">
                    <a href="/disclaimers" class="pr-5 mr-5 text-gray-500 no-underline bg-transparent border-r border-gray-700 cursor-pointer">Disclaimers</a>
                </li>
                <li class="box-border block font-semibold text-left">
                    <a href="/terms-and-conditions" class="pr-5 mr-5 text-gray-500 no-underline bg-transparent border-r border-gray-700 cursor-pointer">Terms and Conditions</a>
                </li>
                <li class="box-border block font-semibold text-left">
                    <a href="/sitemap.xml" class="text-gray-500 no-underline bg-transparent cursor-pointer">Sitemap</a>
                </li>
            </ul>
            <p class="block m-0 text-base font-semibold text-gray-500">
            &copy; 2020 - {{ date('Y') }} {{ setting('site.title', 'Bimbala Ltd') }}, Ltd. All rights reserved.
            </p>
        </div>
    </div>
</section>

</footer>

@if(!auth()->guest() && auth()->user()->hasAnnouncements())
    @include('theme::partials.announcements')
@endif

<!-- Scripts -->
<script src="{{ asset('themes/' . $theme->folder . '/js/app.js') }}" defer></script>

@yield('javascript')

@if(setting('site.google_analytics_tracking_id', ''))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
    </script>

@endif
