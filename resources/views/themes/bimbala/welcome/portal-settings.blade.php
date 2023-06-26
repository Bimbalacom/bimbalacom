@extends('theme::layouts.app')

@section('content')
<x-welcome-wizard current-step="2">
    <div class="flex flex-col justify-center py-10 sm:py-5 sm:px-6 lg:px-8">
        <div class="mt-8 text-left sm:mx-auto sm:w-full sm:max-w-xl">
            <div class="px-4 py-8 bg-white border shadow border-gray-50 sm:rounded-lg sm:px-10">
                <form role="form" method="POST" action="{{ route('create-portal') }}">
                    @csrf

                    <div class="pb-3 sm:border-b sm:border-gray-200">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Bimbala workspace
                        </h3>
                        <p class="max-w-2xl mt-1 text-sm leading-5 text-gray-500">
                            Choose a Bimbala subdomain.
                        </p>
                    </div>

                    <div class="mt-6" x-data="spotlightExistenceChecker">
                        <div class="flex">
                            <div class="w-full">
                                <!-- Search Input Div -->
                                <div class="flex"  @click.outside="closeSearchBar">
                                    <!-- Input -->
                                    <input
                                        x-ref="input"
                                        @input.debounce.1000ms="setQueryTerm"
                                        id="subdomain"
                                        name="subdomain"
                                        class="rounded-none rounded-l-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="acme"
                                        value="{{ old('subdomain') }}"
                                        autofocus
                                        type="text"
                                        required
                                    />
                                    <!-- Search Icon -->
                                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-r-md border border-l-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        .bimbala.com
                                    </span>
                                    <span
                                        x-show="query && queryFilter === 0"
                                        class="inline-flex items-center px-3 text-sm"
                                    >
                                        ✅ Available
                                    </span>
                                    <span
                                        x-show="query && queryFilter !== 0"
                                        class="inline-flex items-center px-3 text-sm">
                                        😕 Already in use
                                    </span>
                                </div>
                            </div>
                        </div>
                        @error('subdomain')
                            <div class="mt-1 text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex flex-col items-center justify-center text-sm leading-5">
                        <span class="block w-1/2 mt-5 rounded-md shadow-sm">
                            <button type="submit"  class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700">
                                Submit
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-welcome-wizard>

@endsection
