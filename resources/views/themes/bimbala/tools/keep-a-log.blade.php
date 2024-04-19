@extends('theme::layouts.app')

@section('content')
    <div class="bg-gray-100 h-screen overflow-hidden">
        <div class="pt-12">
            <p class="text-center text-xl prose-sm">Outline what has been changed in your product and we will convert it to a Markdown changelog. It would make the product management much easier.</p>
        </div>
        <iframe src="https://bimbalacom.github.io/keep-a-log" frameborder="0" loading="eager" class="overflow-hidden focus:outline-none md:mx-auto md:w-[70%] w-full h-full" scrolling="no" fetchpriority="high">Your browser doesn't support iframes.</iframe>
    </div>
@endsection
