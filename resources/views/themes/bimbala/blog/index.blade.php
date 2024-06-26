@extends('theme::layouts.app')

@section('content')


<div class="relative  mx-auto xl:px-5 max-w-7xl sm:px-6 lg:pt-10 lg:pb-28">
    <div class="relative mx-auto max-w-7xl">
		<div class="flex flex-col justify-start">
			<ul class="flex self-start px-3 py-1 my-6 text-xs font-medium text-gray-600 bg-blue-100 rounded-md">
				<li class="mr-4 font-bold  text-blue-600 uppercase">Categories:</li>
				@foreach($categories as $cat)
					<li class="@if(isset($category) && isset($category->slug) && ($category->slug == $cat->slug)){{ 'text-blue-700' }}@endif"><a href="{{ route('wave.blog.category', $cat->slug) }}">{{ $cat->name }}</a></li>
					@if(!$loop->last)
						<li class="mx-2">|</li>
					@endif
				@endforeach
			</ul>
		</div>
        <div class="grid gap-5 mx-auto mt-12 sm:grid-cols-2 lg:grid-cols-3">
			<!-- Loop Through Posts Here -->
            @foreach($posts as $post)
			<article id="post-{{ $post->id }}" class="flex flex-col overflow-hidden rounded-lg shadow-lg">
				<meta property="name" content="{{ $post->title }}">
				<meta name="author" content="admin">
				<meta property="dateModified" content="{{ Carbon\Carbon::parse($post->updated_at)->toIso8601String() }}">
				<meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">

                <div class="flex-shrink-0">
					<a href="{{ $post->link() }}">
                        @php
                            $dimensions = $post->getThumbnailSizes[$post->thumbnail('medium', 'image')];
                        @endphp
                    	<img class="object-cover w-full h-48"
                             src="{{ Voyager::image($post->thumbnail('medium', 'image')) }}"
                             srcset="
                             @foreach($post->getThumbnailSizes as $key => $value)
                             {{ Voyager::image($key) }} {{ $value['width'] }}w,
                             @endforeach
                             "
                             alt="{{ $post->title }} - blog post cover image"
                             width="{{ $dimensions['width'] }}" height="{{ $dimensions['height'] }}" />
					</a>
                </div>
                <div class="relative flex flex-col justify-between flex-1 p-6 bg-white">
                    <div class="flex-1">
                        <a href="{{ $post->link() }}" class="block">
                            <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900">
                                {{ $post->title }}
                            </h3>
                        </a>
                        <a href="{{ $post->link() }}" class="block">
                            <p class="mt-3 text-base leading-6 text-gray-600">
								{{ substr(strip_tags($post->body), 0, 200) }}@if(strlen(strip_tags($post->body)) > 200){{ '...' }}@endif
                            </p>
                        </a>
                    </div>
                    <p class="relative self-start inline-block px-2 py-1 mt-4 text-xs font-medium leading-5 text-gray-400 uppercase bg-gray-100 rounded">
                            <a href="{{ route('wave.blog.category', $post->category->slug) }}" class="text-gray-700 hover:underline" rel="category">
								{{ $post->category->name }}
                            </a>
                        </p>
                </div>

                <div class="flex items-center p-6 bg-gray-50">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <img class="w-10 h-10 rounded-full" src="{{ $post->user->avatar() }}" alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium leading-5 text-gray-900">
                                Written by <a href="#" class="hover:underline">{{ $post->user->name }}</a>
                            </p>
                            <div class="flex text-sm leading-5 text-gray-600">
								on <time datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}" class="ml-1">{{ Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</time>
                            </div>
                        </div>
                    </div>

            </article>
			@endforeach
			<!-- End Post Loop Here -->
        </div>
    </div>
	<div class="flex justify-center my-10">
		{{ $posts->links('theme::partials.pagination') }}
	</div>
</div>
@endsection
