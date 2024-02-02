@extends('theme::layouts.app')

@section('content')
{{-- Content --}}
<section class="w-full py-12 bg-white lg:py-24">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">

  <div class="mx-auto max-w-8xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">Help your project grow, understand your users.</h2>
      <p class="text-muted-foreground mt-6 text-lg leading-8">Bimbala is a tool to help everyone gather and share feedback / information. Here's part of the use cases how our clients use us:</p>
    </div>
    <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-4 gap-y-12 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Prioritize customer feedback</dt>
        <dd class="text-muted-foreground mt-2">Consolidate all user feedback into a single location, address, prioritize, and create a roadmap for product development.</dd>
      </div>
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Keep a changelog</dt>
        <dd class="text-muted-foreground mt-2">Share your latest product updates. Enhance awareness of new features and boost customer engagement using a changelog.</dd>
      </div>
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Track customer satisfaction</dt>
        <dd class="text-muted-foreground mt-2">Continuously track customer satisfaction to gauge their experience. Collect feedback systematically to drive ongoing enhancements and improvements.</dd>
      </div>
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Public Roadmap Tool</dt>
        <dd class="text-muted-foreground mt-2">Gather user feedback through a simple form, allowing users to also vote on existing suggestions. Strategically prioritize this feedback to shape and develop your product roadmap.</dd>
      </div>
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Internal Feedback Tool</dt>
        <dd class="text-muted-foreground mt-2">Empower your team to seamlessly share and manage internal feedback, fostering improved communication and collaboration.</dd>
      </div>
      <div class="rounded-lg shadow-lg p-5">
        <dt class="font-semibold text-xl">Feature Tracking Software</dt>
        <dd class="text-muted-foreground mt-2">Bimbala serves as a tool that enables you and your team to log feature requests, bug reports, or suggestions directly from your application. Customers have the ability to contribute their feedback and vote on existing feature requests, facilitating the rapid improvement of product ideas and the enhancement of existing features.</dd>
      </div>
    </dl>
  </div>

  </div>
</section>
@endsection
