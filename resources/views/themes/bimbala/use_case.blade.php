@extends('theme::layouts.app')

@section('content')
{{-- Content --}}
<section class="w-full py-12 bg-white lg:py-24">
    {{--Section 1 --}}
    
<section class="py-20 bg-blueGray-50">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap items-center justify-between max-w-2xl lg:max-w-full mb-12">
        <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
          <h2 class="text-3xl md:text-4xl font-bold font-heading">
            <span data-config-id="03_header1">Make your</span>
            <span class="text-blue-600" data-config-id="03_header2">life easier</span>
            <span data-config-id="03_header3">for marketing sales and customer support</span>
          </h2>
        </div>
        <div class="w-full lg:w-1/2 lg:pl-16">
          <p class="text-blueGray-400 leading-loose" data-config-id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis. Quisque vitae nulla malesuada, auctor arcu vitae, luctus nisi. Sed elementum vitae ligula id imperdiet.</p>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 -mb-6 text-center">
        <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
          <div class="p-12 bg-white shadow rounded">
            <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">1</div>
            <img class="h-48 mx-auto my-4" src="metis-assets/illustrations/work-tv.png" alt="" data-config-id="image1">
            <h3 class="mb-2 font-bold font-heading" data-config-id="header1">Donec fermentum</h3>
            <p class="text-sm text-blueGray-400 leading-relaxed" data-config-id="desc1">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
          <div class="p-12 bg-white shadow rounded">
            <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">2</div>
            <img class="h-48 mx-auto my-4" src="metis-assets/illustrations/people-watching.png" alt="" data-config-id="image2">
            <h3 class="mb-2 font-bold font-heading" data-config-id="header2">Donec fermentum</h3>
            <p class="text-sm text-blueGray-400 leading-relaxed" data-config-id="desc2">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
          </div>
        </div>
        <div class="w-full lg:w-1/3 px-3 mb-6">
          <div class="p-12 bg-white shadow rounded">
            <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">3</div>
            <img class="h-48 mx-auto my-4" src="metis-assets/illustrations/financial-report.png" alt="" data-config-id="image3">
            <h3 class="mb-2 font-bold font-heading" data-config-id="header3">Donec fermentum</h3>
            <p class="text-sm text-blueGray-400 leading-relaxed" data-config-id="desc3">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    {{--End Section 1--}}
    
<section class="py-20">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4 items-center mb-12 lg:mb-16">
        <div class="w-full lg:w-1/2 px-4">
          <div class="max-w-lg">
            <span class="text-xs font-bold text-gray-200 uppercase" data-config-id="label">Lorem ipsum</span>
            <h2 class="mt-2 mb-4 text-4xl lg:text-5xl font-bold font-heading" data-config-id="header">Lorem ipsum dolor sit amet consectutar domor at elis</h2>
            <div class="max-w-sm">
              <p class="mb-6 lg:mb-0 text-lg text-gray-500 leading-loose" data-config-id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.</p>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <img class="w-full max-h-80 object-cover rounded-lg" src="mockup-assets/images/gray-500-horizontal.png" alt="" data-config-id="02_image">
        </div>
      </div>
      <div class="flex flex-wrap -mx-4 -mb-12">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">1</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc1">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">2</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc2">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">3</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc3">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">4</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc4">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">5</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc5">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 flex items-start">
          <span class="flex-shrink-0 inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full font-bold text-gray-50">6</span>
          <div class="max-w-xs px-4">
            <p class="text-lg text-gray-500 leading-loose" data-config-id="desc6">Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
@endsection
