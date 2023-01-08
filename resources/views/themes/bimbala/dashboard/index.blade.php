@extends('theme::layouts.app')


@section('content')

    @subscriber
    @notsubscriber
    <div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
        <div class="flex flex-col justify-start flex-1 overflow-hidden bg-[#0077b3] border rounded-lg border-gray-150">
            <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
                <div class="relative flex-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-700">
                        Get started
                    </h3>
                </div>
            </div>
            <div class="relative p-5">
                <p class="text-4xl leading-loose text-white text-center ">Pick a plan and ignite your Bimbala workspace!</p>
                <span class="flex mt-5 rounded-md justify-center">
	                <a href="{{url('/pricing')}}" target="_blank" class="inline-flex items-center px-10 py-4 text-lg font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
						Ignite the engines
	                </a>
				</span>
            </div>
        </div>

    </div>
    @endsubscriber
	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
	    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
	                    Welcome to your Dashboard
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
	                    Learn More Below
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
				<center><img class="rounded-lg" src="{{ asset('bimbala\img\dashboard-meme.jpg') }}" alt=""></center>
			</div>
		</div>
		<div class="flex flex-col justify-start flex-1 overflow-hidden bg-white border rounded-lg lg:ml-3 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
						Learn more about us
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
						Are you more of a visual learner?
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
				<p class="text-base leading-loose text-gray-500">Make sure to head on over to our public Youtube channel to learn more how to use and customize Bimbala.<br><br>Click on the button below to checkout the video tutorials.</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="https://www.youtube.com/channel/UChe6dcq2IXt6BnTlRByAEXA" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
						Watch our videos
	                </a>
				</span>
			</div>
	    </div>

	</div>

@endsection
