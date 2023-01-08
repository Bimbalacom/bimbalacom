<div class="py-20 mx-auto text-center max-w-7xl">
    <div class="w-full space-y-2">
        @if(Request::get('complete'))<h1 class="mb-5 text-5xl font-medium">Let's configure your Bimbala portal!</h1>@endif
        @if($currentStep !== 3)
        <p class="py-0 my-0">
            Thanks for subscribing and welcome aboard.@if(Request::get('complete')){{ 'Please finish completing your profile information below.' }} @endif
        </p>
        @endif
    </div>
    <!-- component -->
    @if(Request::get('complete'))
        @php
            $steps = [
                ['title' => 'Profile information', 'svgIconContent' => '<path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />'],
                ['title' => 'Bimbala portal', 'svgIconContent' => '<path fill-rule="evenodd" d="M6.111 11.89A5.5 5.5 0 1115.501 8 .75.75 0 1017 8a7 7 0 10-11.95 4.95.75.75 0 001.06-1.06zm2.121-5.658a2.5 2.5 0 000 3.536.75.75 0 11-1.06 1.06A4 4 0 1114 8a.75.75 0 01-1.5 0 2.5 2.5 0 00-4.268-1.768zm2.534 1.279a.75.75 0 00-1.37.364l-.492 6.861a.75.75 0 001.204.65l1.043-.799.985 3.678a.75.75 0 001.45-.388l-.978-3.646 1.292.204a.75.75 0 00.74-1.16l-3.874-5.764z" clip-rule="evenodd" />'],
                ['title' => 'Finished', 'svgIconContent' => '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />']
            ];
        @endphp
        <x-step-wizard current-step="{{$currentStep}}" :steps="$steps" />
        {{ $slot }}
    @else
        <div class="items-center justify-center w-full mt-12 text-center">
            <a href="{{ route('wave.dashboard') }}" class="inline-block w-auto px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700">
                Go to my Dashboard
            </a>
        </div>
    @endif

</div>
