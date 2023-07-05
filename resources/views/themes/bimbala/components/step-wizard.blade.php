<div class="flex">
    {{--I know the following is stupid but until tailwind detect the classes it will not include them in the final css
https://tailwindcss.com/docs/content-configuration#class-detection-in-depth--}}
    @php
        $widths = [
           2 => 'w-1/2',
           3 => 'w-1/3',
           4 => 'w-1/4',
           5 => 'w-1/5',
           6 => 'w-1/6',
           7 => 'w-1/7',
           8 => 'w-1/8',
           9 => 'w-1/9',
           10 => 'w-1/10'
       ];
    @endphp
    @foreach($steps as $position => $stepDetails)
        @php
            $current = $currentStep === ($position+1);
        @endphp
        <div class="w-1/{{count($steps)}}">
            <div class="relative mb-2">
                @if($position !== 0)
                    <div class="absolute flex align-center items-center align-middle content-center"
                         style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-indigo-300 py-1 rounded" style="width: @if($currentStep >= $position+1) 100% @else 0% @endif;"></div>
                        </div>
                    </div>
                @endif
                <div class="w-10 h-10 mx-auto @if($currentStep >= $position+1) bg-indigo-500 @else bg-white border-2 border-gray-200 @endif rounded-full text-lg text-white flex items-center">
                      <span class="text-center @if($currentStep >= $position+1) text-white @else text-gray-600 @endif w-full">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24"
                               fill="currentColor" class="w-full fill-current">
                              {!! $stepDetails['svgIconContent'] !!}
                          </svg>
                      </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-base">{{$stepDetails['title']}}</div>
        </div>
    @endforeach
</div>
