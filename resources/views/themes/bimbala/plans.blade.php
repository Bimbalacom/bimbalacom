@extends('theme::layouts.app')

@section('content')

<section class="w-full pb-12 bg-white lg:pb-24">
<div class="bg-white">
  <div class="bg-purple-900">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:max-w-7xl">
      <div class="px-0 sm:px-4 lg:px-0 lg:flex lg:justify-between lg:items-center">
        <div class="max-w-xl">
          <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Pricing Plans</h2>
          <p class="mt-5 text-xl text-indigo-300">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-2xl mx-auto bg-white py-16 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="space-y-24 lg:hidden">
      <section>
        <div class="px-4 mb-8">
          <h2 class="text-lg leading-6 font-medium text-gray-900">Basic</h2>
          <p class="mt-4">
            <span class="text-4xl font-extrabold text-gray-900">$9</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
          <a href="#" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Basic</a>
        </div>
        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Features
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited team members.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Reporting
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Support
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="border-t border-gray-200 px-4 pt-5">
          <a href="#" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Basic</a>
        </div>
      </section>

      <section>
        <div class="px-4 mb-8">
          <h2 class="text-lg leading-6 font-medium text-gray-900">Essential</h2>
          <p class="mt-4">
            <span class="text-4xl font-extrabold text-gray-900">$29</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
          <a href="#" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Essential</a>
        </div>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Features
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited team members.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
              <td class="py-5 pr-4">
                <span class="block text-sm text-gray-700 text-right">Up to 20 users</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Reporting
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Support
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/minus -->
                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">No</span>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="border-t border-gray-200 px-4 pt-5">
          <a href="#" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Essential</a>
        </div>
      </section>

      <section>
        <div class="px-4 mb-8">
          <h2 class="text-lg leading-6 font-medium text-gray-900">Enterprise</h2>
          <p class="mt-4">
            <span class="text-4xl font-extrabold text-gray-900">$59</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
          <a href="{{ route('contact') }}" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Contact us</a>
        </div>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Features
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited team members.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
              <td class="py-5 pr-4">
                <span class="block text-sm text-gray-700 text-right">Up to 50 users</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Reporting
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="w-full">
          <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
            Support
          </caption>
          <thead>
            <tr>
              <th class="sr-only" scope="col">Feature</th>
              <th class="sr-only" scope="col">Included</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>

            <tr class="border-t border-gray-200">
              <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
              <td class="py-5 pr-4">
                <!-- Heroicon name: solid/check -->
                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Yes</span>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="border-t border-gray-200 px-4 pt-5">
          <a href="{{ route('contact') }}" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Contact us</a>
        </div>
      </section>
    </div>

    <!-- lg+ -->
    <div class="hidden lg:block">
      <table class="w-full h-px table-fixed">
        <caption class="sr-only">
          Pricing plan comparison
        </caption>
        <thead>
          <tr>
            <th class="pb-4 pl-6 pr-6 text-sm font-medium text-gray-900 text-left" scope="col">
              <span class="sr-only">Feature by</span>
              <span>Plans</span>
            </th>

            <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Basic</th>

            <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Essential</th>

            <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Enterprise</th>
          </tr>
        </thead>
        <tbody class="border-t border-gray-200 divide-y divide-gray-200">
          <tr>
            <th class="py-8 pl-6 pr-6 align-top text-sm font-medium text-gray-900 text-left" scope="row">Pricing</th>

            <td class="h-full py-8 px-6 align-top">
              <div class="h-full flex flex-col justify-between">
                <div>
                  <p>
                    <span class="text-4xl font-extrabold text-gray-900">$X</span>
                    <span class="text-base font-medium text-gray-500">/mo</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">Ideal for Small Projects.</p>
                </div>
                <a href="#" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Basic</a>
              </div>
            </td>

            <td class="h-full py-8 px-6 align-top">
              <div class="h-full flex flex-col justify-between">
                <div>
                  <p>
                    <span class="text-4xl font-extrabold text-gray-900">$X</span>
                    <span class="text-base font-medium text-gray-500">/mo</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">Ideal for Medium to Large Projects</p>
                </div>
                <a href="#" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Essential</a>
              </div>
            </td>

            <td class="h-full py-8 px-6 align-top">
              <div class="h-full flex flex-col justify-between">
                <div>
                  <p>
                    <span class="text-4xl font-extrabold text-gray-900">$X</span>
                    <span class="text-base font-medium text-gray-500">/mo</span>
                  </p>
                  <p class="mt-4 text-sm text-gray-500">Ideal for everyone</p>
                </div>
                <a href="{{ route('contact') }}" class="mt-6 block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Contact us</a>
              </div>
            </td>
          </tr>

          <tr>
            <th class="py-3 pl-6 bg-gray-50 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Features</th>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Unlimited team members.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <span class="block text-sm text-gray-700">Up to 20 users</span>
            </td>

            <td class="py-5 px-6">
              <span class="block text-sm text-gray-700">Up to 50 users</span>
            </td>
          </tr>

          <tr>
            <th class="py-3 pl-6 bg-gray-50 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Reporting</th>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-3 pl-6 bg-gray-50 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Support</th>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>

          <tr>
            <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Basic</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/minus -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Not included in Essential</span>
            </td>

            <td class="py-5 px-6">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Included in Enterprise</span>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="border-t border-gray-200">
            <th class="sr-only" scope="row">Choose your plan</th>

            <td class="pt-5 px-6">
              <a href="#" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Basic</a>
            </td>

            <td class="pt-5 px-6">
              <a href="#" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Buy Essential</a>
            </td>

            <td class="pt-5 px-6">
              <a href="{{ route('contact') }}" class="block w-full bg-gradient-to-r bg-purple-900 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center">Contact us</a>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <div class="bg-gray-50">
    <!-- FAQ -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-gray-900 text-center">Frequently asked questions</h2>
      <div class="mt-12">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
            <dd class="text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">How do you make holy water?</dt>
            <dd class="text-base text-gray-500">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">Why do you never see elephants hiding in trees?</dt>
            <dd class="text-base text-gray-500">Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">What do you call someone with no body and no nose?</dt>
            <dd class="text-base text-gray-500">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">Why can&#039;t you hear a pterodactyl go to the bathroom?</dt>
            <dd class="text-base text-gray-500">Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div class="space-y-2">
            <dt class="text-lg leading-6 font-medium text-gray-900">Why did the invisible man turn down the job offer?</dt>
            <dd class="text-base text-gray-500">He couldn&#039;t see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <!-- Feature section with brand panel -->
  <div class="relative">
    <div class="absolute inset-0 flex flex-col" aria-hidden="true">
      <div class="flex-1 bg-gray-50"></div>
      <div class="flex-1"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-gradient-to-r from-purple-600 to-purple-900 rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
        <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
          <div class="lg:self-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
              <span class="block">Ready to dive in?</span>
            </h2>
            <p class="my-6 text-lg leading-6 text-orange-50">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
            <a href="https://calendly.com/bimbalacom/30min" class="py-3 px-6 text-lg text-center text-white transition duration-150 ease-in-out bg-transparent border border-white sm:ml-6 sm:w-auto sm:mt-0 focus:outline-none hover:bg-white hover:text-blue-700 rounded">Book a demo</a>
           </div>
        </div>
        <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
          <img class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="{{URL::asset('themes/bimbala/images/full.demo.png')}}" alt="Bimbala demo">
        </div>
      </div>
    </div>
  </div>

</div>

    
</section>

@endsection
