                <ul class="flex flex-col flex-1 w-full pt-10 pb-6 space-y-4 text-lg font-semibold text-gray-500 lg:w-auto sm:max-w-md lg:max-w-none lg:p-0 lg:flex-row lg:items-center lg:justify-center lg:space-y-0 lg:space-x-8 lg:text-sm 2xl:text-white">
                    <li><a href="{{ route('wave.home') }}" @click="menu = false" class="transition duration-200 hover:text-indigo-500">Home</a></li>
                    <li class=""><a href="{{ route('wave.pricing') }}" @click="menu = false" class="transition duration-200 hover:text-indigo-500">Pricing</a></li>
                    <li class=""><a href="{{ route('wave.blog') }}" @click="menu = false" class="transition duration-200 hover:text-indigo-500">Blog</a></li>
                    <li class=""><a href="{{ route('contact') }}" @click="menu = false" class="transition duration-200 hover:text-indigo-500">Contact us</a></li>
                </ul>
                <div class="flex items-center justify-end w-full pt-1 pb-6 space-x-4 lg:w-1/4 sm:max-w-md lg:max-w-none lg:py-0 lg:pl-0 lg:pr-4">
                    <a href="#_" class="flex items-center justify-center w-full px-4 py-3 text-indigo-600 transition duration-200 transform border border-indigo-600 rounded-lg lg:w-auto hover:shadow-lg hover:scale-105">
                        <span class="text-lg font-semibold lg:text-sm whitespace-nowrap 2xl:text-white">Sign in</span>
                    </a>
                    <a href="#_" class="flex items-center justify-center w-full px-4 py-3 text-white transition duration-200 transform bg-indigo-600 rounded-lg lg:w-auto hover:bg-indigo-500 hover:shadow-lg hover:scale-105">
                        <span class="text-lg font-semibold lg:text-sm whitespace-nowrap">Sign up</span>
                    </a>
                </div>