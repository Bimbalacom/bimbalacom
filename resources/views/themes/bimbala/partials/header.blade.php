
    <section class="relative w-full bg-black">
    <div class="px-8 pb-12 mx-auto max-w-7xl">
        <nav x-data="{ menu: false }" class="relative top-0 z-20 flex flex-wrap items-center justify-between w-full p-6">
            <div class="flex items-center flex-shrink-0 mr-6 text-white">
               <a href="{{ route('wave.home') }}" class="relative flex items-center">
                    <img class="h-8 w-8" src="../../bimbala/img/logo-small.png" alt="Bimbala's logo"> 
                    <h2 class="mx-2 text-lg font-semibold md:text-xl">Bimbala</h2>
                </a>
            </div>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg cursor-pointer lg:hidden hover:bg-gray-100" @click="menu = !menu">
                <svg x-show="!menu" class="text-gray-500 fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20V8H4V6ZM4 11H20V13H4V11ZM4 16H20V18H4V16Z"></path></svg>
                <svg x-show="menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path d="M16.192 6.34399L11.949 10.586L7.70697 6.34399L6.29297 7.75799L10.535 12L6.29297 16.242L7.70697 17.656L11.949 13.414L16.192 17.656L17.606 16.242L13.364 12L17.606 7.75799L16.192 6.34399Z" fill="black"></path></svg>
            </button>
            <div class="relative flex-grow w-full lg:flex lg:items-center lg:w-auto bg-black hidden" :class="{ 'block z-50': menu, 'hidden': !menu }" @click.away="menu = false" x-show.transition="true">
                  @if(auth()->guest())
                    @include('theme::menus.guest')
                @else 
                {{-- Otherwise we want to show the menu for the logged in user --}}
                    @include('theme::menus.authenticated')
                @endif

            </div>
        </nav>

    </div>
</section>
{{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
