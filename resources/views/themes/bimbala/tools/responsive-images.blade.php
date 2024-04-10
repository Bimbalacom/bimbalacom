@extends('theme::layouts.app')

@section('content')
    <div class="bg-gray-100 h-screen overflow-hidden">
        <div class="pt-12">
            <p class="text-center text-xl prose-sm">Upload your picture (preferranbly large) and we will generate you images for different breakpoints with optimal dimensions.</p>
        </div>
        <iframe src="https://bimbala-responsive-images.netlify.app" width="100%" height="100%" frameborder="0" loading="eager" class="overflow-hidden focus:outline-none" scrolling="no" fetchpriority="high">Your browser doesn't support iframes.</iframe>
    </div>
@endsection
