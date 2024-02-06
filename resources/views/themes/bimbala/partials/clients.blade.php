<div class="relative max-w-lg mx-auto text-center my-16">
    <div class="items-center">
    @component('theme::components.title', [
      'title' => 'Part of our clients',
      'description' => ' '])
    @endcomponent
        <div class="flex flex-wrap items-center justify-center gap-10 my-8">
          <span>
            <img src="{{URL::asset('themes/bimbala/clients/nda-1.png')}}" data-rounded="rounded-xl" data-rounded-max="rounded-full" class="lazyload" alt="Client logo number 1">
          </span>
          <span>
            <img src="{{URL::asset('themes/bimbala/clients/nda-2.png')}}" data-rounded="rounded-xl" data-rounded-max="rounded-full" class="lazyload" alt="Client logo number 2">
          </span>
          <span>
            <img src="{{URL::asset('themes/bimbala/clients/nda-3.svg')}}"  data-rounded="rounded-xl" data-rounded-max="rounded-full" class="lazyload" alt="Client logo number 3">
          </span>
        </div>
    </div>
</div>

