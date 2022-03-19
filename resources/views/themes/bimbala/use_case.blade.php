@extends('theme::layouts.app')

@section('content')
{{-- Content --}}
<section class="w-full py-12 bg-white lg:py-24">

  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div>
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
        Use cases
      </h2>
      <p class="mt-3 text-xl text-gray-500 sm:mt-4">
        Discover a few use cases from us and our customers. Learn how to understand your customers by gathering their feedback.
      </p>
    </div>
    <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
      <div class="mb-6 mr-4">
        <div>
            <span
              class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
              Being open
            </span>
        </div>
        <a href="#" class="block mt-4">
          <p class="text-xl font-semibold text-gray-900">
            UpVotes
          </p>
          <p class="mt-3 text-base text-gray-500">
            Upvotes are the easiest way to gather user feedback on your problems. A simple way to add everything you need to
            understand your problems and a simple process for validating them. (Yes just voting.)
          </p>
        </a>
      </div>
      <div class="mb-6 mr-4">
        <div>
          <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
            Being open
          </span>
        </div>
        <a href="#" class="block mt-4">
          <p class="text-xl font-semibold text-gray-900">
            Changelog
          </p>
          <p class="mt-3 text-base text-gray-500">
            Changelog is a simple way of showing how your project is going and what you are changing every release. It is common for
            clients to miss a feature update.
          </p>
        </a>
      </div>
      <div class="mb-6 mr-4">
        <div>
          <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
            Being closed
          </span>
        </div>
        <a href="#" class="block mt-4">
          <p class="text-xl font-semibold text-gray-900">
            Internal feedback
          </p>
          <p class="mt-3 text-base text-gray-500">
            Not everyone wants to show everything off from the start. That is why, you can limit who see the updates.
          </p>
        </a>
      </div>
      <div class="mb-6 mr-4">
        <div>
          <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
            Being open
          </span>
        </div>
        <a href="#" class="block mt-4">
          <p class="text-xl font-semibold text-gray-900">
            Customization your workflow
          </p>
          <p class="mt-3 text-base text-gray-500">
            Automating your work process can be a hassle every time. Adding new integrations is one of our "must" -s.
          </p>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
