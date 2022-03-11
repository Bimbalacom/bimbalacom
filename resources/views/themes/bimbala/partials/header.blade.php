{{-- Header --}}
<section class="relative overflow-hidden">

    @if (Route::getCurrentRoute()->uri() == '/')
    {{-- Background Layer --}}
    <div class="absolute z-10 w-1/2 h-full bg-gradient-to-tr from-gray-900 via-gray-900 to-black">
        <div class="absolute right-0 w-32 h-full -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
    </div>
    <div class="absolute z-20 w-1/2 h-full bg-gradient-to-tl left-1/2 from-gray-900 via-gray-900 to-black">
        <div class="absolute left-0 w-full h-full bg-white opacity-25 bg-opacity-10"></div>
    </div> 
    {{-- End Background Layer --}}
    @else 
    <div class="absolute z-10 w-1/2 h-24 px-8 mx-auto bg-gradient-to-tr from-gray-900 via-gray-900 to-black">
        <div class="absolute right-0 w-32h-24 px-8 mx-auto -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
    </div>
    <div class="absolute z-20 w-1/2 h-24 px-8 mx-auto bg-gradient-to-tl left-1/2 from-gray-900 via-gray-900 to-black">
        <div class="absolute left-0 w-full h-24 px-8 mx-auto bg-white opacity-25 bg-opacity-10"></div>
    </div> 
    @endif
    

    <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
        <div class="relative z-20 flex items-center justify-between">
            <a href="{{ route('wave.home') }}" class="relative flex items-center">
                    <img class="h-8 w-8" src="../../bimbala/img/logo-small.png" alt="Bimbala's logo"> 
                    <h2 class="mx-2 text-lg font-semibold text-white md:text-xl">Bimbala</h2>
                </a>
                {{-- This is the homepage nav when a user is not logged in --}}
                @if(auth()->guest())
                    @include('theme::menus.guest')
                @else 
                {{-- Otherwise we want to show the menu for the logged in user --}}
                    @include('theme::menus.authenticated')
                @endif
        </div>
    </nav>
</header>