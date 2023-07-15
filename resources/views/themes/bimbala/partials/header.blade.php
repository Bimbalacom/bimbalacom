{{-- Header --}}
@subscriber
@if (Auth::check() && !Auth::user()->subdomain_url)
    <div class="py-4 text-center bg-indigo-500 lg:px-4">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-indigo-800 lg:rounded-full lg:inline-flex"
             role="alert">
            <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-indigo-500 rounded-full">Notice</span>
            <span class="flex-auto mr-2 font-semibold text-left">You haven't configured your domain yet.</span>
            <a href="{{ url('checkout/portal') }}?complete=true" class="font-bold underline text-purple-400">Follow this link to do that >></a>

        </div>
    </div>
@endif
@endsubscriber
<section class="relative bg-gray-900">

    <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
        <div class="relative z-20 flex items-center justify-between">
            <a href="{{ route('wave.home') }}" class="relative flex items-center">
                    <img class="h-8 w-8" src="../../bimbala/img/logo-small.png" alt="Bimbala's logo" width="32" height="32">
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
</section>   
</header>
