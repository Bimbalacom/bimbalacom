@extends('theme::layouts.app')

@section('content')

    <x-welcome-wizard current-step="3">
        <div class="flex flex-col justify-center py-10 sm:py-5 sm:px-6 lg:px-8">
            <div class="mt-8 text-center sm:mx-auto sm:w-full sm:max-w-2xl">
                <div class="px-4 py-8 bg-white border shadow border-gray-50 sm:rounded-lg sm:px-10">
                    <h1 class="md:text-4xl">Thanks for your efforts!</h1>
                    <p class="md:text-md md:mt-8">Your workspace is being initialized. We are going to notify by email when your Bimbala portal is configured.</p>
                </div>
            </div>
        </div>
    </x-welcome-wizard>

@endsection
