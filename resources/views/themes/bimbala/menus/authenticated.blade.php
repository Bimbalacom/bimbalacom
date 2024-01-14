<!-- Mobile menu button -->
<div @click="mobile = !mobile" class="flex absolute right-32 md:hidden md:static lg:static ">
                <button type="button" class="text-gray-200 hover:text-gray-100 focus:outline-none focus:text-gray-100" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="{ 'hidden' : !mobile, 'flex': mobile }" class="left-0 z-10 items-center w-full font-semibold select-none md:flex md:justify-center lg:absolute">
            <div>
                <div class="flex flex-col justify-center w-full mt-4 space-y-2 md:mt-0 md:flex-row md:space-x-6 lg:space-x-10 xl:space-x-16 md:space-y-0">
                    <a href="{{ route('wave.home') }}" class="py-3 text-white hover:text-gray-100 hover:underline">Home</a>
                    <a href="{{ route('wave.pricing') }}" class="py-3 text-white hover:text-gray-100 hover:underline">Pricing</a>
                    <a href="{{ route('wave.blog') }}" class="py-3 text-white hover:text-gray-100 hover:underline">Blog</a>
                    <a href="{{ route('contact') }}" class="py-3 text-white hover:text-gray-100 hover:underline">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="flex sm:ml-6 sm:items-center z-20 absolute top-6 right-6 md:static lg:static">

            @if( auth()->user()->onTrial() )
                <div class="relative items-center justify-center hidden h-full md:flex">
                    <span class="px-3 py-1 text-xs text-red-600 bg-red-100 border border-gray-200 rounded-md">You have {{ auth()->user()->daysLeftOnTrial() }} @if(auth()->user()->daysLeftOnTrial() > 1){{ 'Days' }}@else{{ 'Day' }}@endif left on your Trial</span>
                </div>
            @endif

            @include('theme::partials.notifications')

            <!-- Profile dropdown -->
            <div @click.away="open = false" class="relative flex items-center h-full md:ml-3 ml-10" x-data="{ open: false }">
                <div>
                    <button @click="open = !open" class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                        <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->avatar() . '?' . time() }}" alt="{{ auth()->user()->name }}'s Avatar">
                    </button>
                </div>

                <div
                    x-show="open"
                    x-transition:enter="duration-100 ease-out scale-95"
                    x-transition:enter-start="opacity-50 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition duration-50 ease-in scale-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute top-0 right-0 w-56 mt-20 origin-top-right transform rounded-xl" x-cloak>

                    <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-3 text-gray-700 hover:text-gray-800">

                            <span class="block text-sm font-medium leading-tight truncate">
                                {{ auth()->user()->name }}
                            </span>
                            <span class="text-xs leading-5 text-gray-600">
                                View Profile
                            </span>
                        </a>
                        @impersonating
                                <a href="{{ route('impersonate.leave') }}" class="block px-4 py-2 text-sm leading-5 text-blue-900 border-t border-gray-100 bg-blue-50 hover:bg-blue-100 focus:outline-none focus:bg-blue-200">Leave impersonation</a>
                        @endImpersonating
                        <div class="border-t border-gray-100"></div>
                        <div class="py-1">

                            <div class="block px-4 py-1">
                                <span class="inline-block px-2 my-1 -ml-1 text-xs font-medium leading-5 text-gray-600 bg-gray-200 rounded">{{ auth()->user()->role->display_name }}</span>
                            </div>
                            @trial
                                <a href="{{ route('wave.settings', 'plans') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Upgrade My Account</a>
                            @endtrial
                            @if( !auth()->guest() && auth()->user()->can('browse_admin') )
                                <a href="{{ route('voyager.dashboard') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><i class="fa fa-bolt"></i> Admin</a>
                            @endif
                            <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">My Profile</a>
                            <a href="{{ route('wave.settings') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Settings</a>

                        </div>
                        <div class="border-t border-gray-100"></div>
                        <div class="py-1">
                            <a href="{{ route('wave.logout') }}" class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">
                                Sign out
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</div>
