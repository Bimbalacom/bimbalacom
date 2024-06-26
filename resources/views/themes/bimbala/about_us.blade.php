@extends('theme::layouts.app')

@section('content')
    {{--Contact--}}
    <section class="max-w-6xl mx-auto relative">
        <div class="px-12 pt-12 pb-20">
            <div class="space-y-12 text-justify">
                <div class="mb-20 space-y-5 sm:mx-auto sm:space-y-4">
                    <h2 class="relative text-3xl tracking-tight sm:text-4xl mt-4">Values</h2>
                    <p>
                        The first principle of our company is to be transparent. Honesty is something we value the most.
                        We are always aiming to show our customers the things as they are. We maintain open culture and believe that everyone is a contributor and has something to bring to the table.
                    </p>

                    <h2 class="relative text-3xl tracking-tight sm:text-4xl mt-4">Target</h2>
                    <p>
                        The product is carried mostly on the shoulders of two university students.
                         Our dream is to succeed in addressing the needs of each business that carries about its customers' feedback.
                         This includes easier work process for managers as well as all desperate employees from a support team.
                    </p>
                    <h2 class="relative text-3xl tracking-tight sm:text-4xl mt-4">Community</h2>
                    <p>
                        Understanding our <a href="/discord" class="text-purple-900 font-bold">community</a> will be the key to our success. We are always open to feedback and suggestions.
                        Every individual, team and organization has a different company setup. Sometimes they are internal and are not always accessible to others. That is why we are always trying to be flexible and adapt to the needs of our customers.
                    </p>
                     <h2 class="relative text-3xl tracking-tight sm:text-4xl mt-4">Privacy</h2>
                    <p>
                        We respect your privacy. None of the data is sold, and we don’t use it for advertisement. For more information, please read our <a href="/privacy-policy" class="font-semibold">Privacy Policy</a>.
                    </p>
                </div>
            </div>
            <h2 class="text-left pb-12 text-3xl tracking-tight sm:text-4xl mt-4">Part of our history</h2>
            <div class="max-w-6xl grid grid-cols-9 px-2">
                <!-- Stack 3 -->
            {{--<div class="col-span-4 w-full h-full ">
                <div class="w-full h-full bg-black rounded-md p-2 md:pl-4">
                    <h1 class="text-black text-2xl font-bold py-2">Title</h1>
                    <p class="text-gray-600 sm:text-md text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt corporis consequuntur voluptate nulla iusto quam ut quasi, eaque quas omnis vero totam ullam, reprehenderit ratione pariatur accusamus suscipit odit nostrum?</p>
                </div>
            </div>
            <div class="relative col-span-1 w-full h-full flex justify-center items-center">
                <div class="h-full w-1 bg-black"></div>
                <div class="absolute w-8 h-8 rounded-full bg-black z-10 text-center"></div>
            </div>
            <div class="col-span-4 w-full h-full"></div>--}}


                <!-- Stack 3 -->
                <div class="col-span-4 w-full h-full">
                    <div class="w-full h-full bg-gray-800 rounded-md p-2 md:pl-4">
                        <h3 class="text-white text-2xl font-bold py-2">01.08.2023</h3>
                        <p class="text-gray-200 sm:text-md text-sm">Our product arrived on the market. 🛍️</p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full flex justify-center items-center ">
                    <div class="h-full w-1 bg-white border-2 border-gray-400"></div>
                    <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-center border-2 border-gray-400"></div>
                </div>
                <div class="col-span-4 w-full h-full"></div>

                <!-- Stack 2 -->
                <div class="col-span-4 w-full h-full "></div>
                <div class="relative col-span-1 w-full h-full flex justify-center items-center ">
                    <div class="h-full w-1 bg-white border-2 border-gray-400"></div>
                    <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-center border-2 border-gray-400"></div>
                </div>
                <div class="col-span-4 w-full h-full">
                    <div class="w-full h-full bg-gray-800 rounded-md p-2 md:pl-4">
                        <h3 class="text-white text-2xl font-bold py-2">16.10.2021</h3>
                        <p class="text-gray-200 sm:text-md text-sm">
                            After a long product and website development we started our first alpha testers seeking 🔎
                        </p>
                    </div>
                </div>

                <!-- Stack 1 -->
                <div class="col-span-4 w-full h-full">
                    <div class="w-full h-full bg-gray-800 rounded-md p-2 md:pl-4">
                        <h3 class="text-white text-2xl font-bold py-2">31.07.2020</h3>
                        <p class="text-gray-200 sm:text-md text-sm">It all began with a coffee afternoon meeting between two students...
                            Later in local pub the waitress drew the lots and set the name of this company. That is how Bimbala was born!🎉
                        </p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full flex justify-center items-center ">
                    <div class="h-full w-1 bg-white border-2 border-gray-400"></div>
                    <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-center border-2 border-gray-400"></div>
                </div>
                <div class="col-span-4 w-full h-full"></div>
            </div>
        </div>
    </section>
@endsection
