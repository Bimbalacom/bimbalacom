@extends('theme::layouts.app')

@section('content')
    {{--Contact--}}
    <section class="w-full relative">
        <div class="max-w-7xl px-12 py-12 lg:py-24  mx-auto text-center relative">
            <div class="grid grid-cols-6 sm:grid-cols-12 bg-white">
                <div class="w-full border border-gray-200  shadow-sm col-span-6 sm:col-span-8 p-5">
                <form
                        class="flex flex-col justify-center items-center my-auto h-full p-10 grid grid-cols-1 sm:grid-cols-2 gap-6 relative" action="{{ route('contact-send') }}" method="POST">
                        @if(session('success'))
                            <p class="col-span-1 sm:col-span-2 p-1 bg-green-600 text-white rounded-full text-center">{{session('success')}}</p>
                        @endif
                        <label class="block text-gray-600 focus-within:text-gray-700">
                            <span class="text-gray-700">Full name</span>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none w-6 h-6 absolute bottom-[47%] transform translate-y-[47%] left-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <input type="text" class="
                                        mt-0
                                        block
                                        w-full
                                        px-0.5
                                        pl-12
                                        border-0 border-b-2 border-gray-200
                                        focus:ring-0 focus:border-black
                                        @error('name') border-red-500 @enderror
                                      " placeholder="John Doe" name="name" minlength="3" required/>
                            </div>
                            @error('name')
                            <div class="text-bold text-red-500">{{$message}}</div>
                            @enderror
                        </label>
                        <label class="block text-gray-600 focus-within:text-gray-700">
                            <span class="text-gray-700">Email address</span>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none w-6 h-6 absolute bottom-[47%] transform translate-y-[47%] left-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
                                </svg>
                                <input type="email" class="
                                        mt-0
                                        block
                                        w-full
                                        px-0.5
                                        pl-12
                                        border-0 border-b-2 border-gray-200
                                        focus:ring-0 focus:border-black
                                        @error('email') border-red-500 @enderror
                                      " placeholder="john@example.com" name="email" required/>
                            </div>
                            @error('email')
                            <div class="text-bold text-red-500">{{$message}}</div>
                            @enderror
                        </label>
                        <label class="block text-gray-600 focus-within:text-gray-700">
                            <span class="text-gray-700">Phone</span>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none w-6 h-6 absolute bottom-[47%] transform translate-y-[47%] left-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <input type="tel" class="
                                        mt-0
                                        block
                                        w-full
                                        px-0.5
                                        pl-12
                                        border-0 border-b-2 border-gray-200
                                        focus:ring-0 focus:border-black
                                        @error('phone') border-red-500 @enderror
                                      "  name="phone" minlength="3"/>
                            </div>
                            @error('phone')
                            <div class="text-bold text-red-500">{{$message}}</div>
                            @enderror
                        </label>
                        <label class="block text-gray-600 focus-within:text-gray-700">
                            <span class="text-gray-700">Company</span>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none w-6 h-6 absolute bottom-[47%] transform translate-y-[47%] left-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                </svg>
                                <input type="text" class="
                                        mt-0
                                        block
                                        w-full
                                        px-0.5
                                        pl-12
                                        border-0 border-b-2 border-gray-200
                                        focus:ring-0 focus:border-black
                                        @error('company') border-red-500 @enderror
                                      "  name="company" minlength="3"/>
                            </div>
                            @error('company')
                            <div class="text-bold text-red-500">{{$message}}</div>
                            @enderror
                        </label>
                        <label class="block sm:col-span-2 relative text-gray-600 focus-within:text-gray-700">
                            <span class="text-gray-700">Message</span>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none w-6 h-6 absolute bottom-1/3 transform translate-y-1/3 left-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                <textarea class="
                                        mt-0
                                        block
                                        w-full
                                        px-0.5
                                        pl-12
                                        border-0 border-b-2 border-gray-200
                                        focus:ring-0 focus:border-black
                                        @error('message') border-red-500 @enderror
                                      " rows="2"  name="message" minlength="15" required></textarea>
                            </div>
                            @error('message')
                            <div class="text-bold text-red-500">{{$message}}</div>
                            @enderror
                        </label>
                        @csrf
                        <div class="block sm:col-start-2 text-right absolute bottom-5 right-7">
                            <button type="submit" class="rounded-full bg-purple-700 text-white hover:bg-purple-900 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-45 -skew-y-[15deg]" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <aside class="w-full shadow-sm col-span-6 sm:col-span-4 bg-gray-900 text-white text-center">
                    <div class="flex flex-col justify-center items-center p-10 h-full my-auto">
                        <p class="text-lg font-extrabold">Let's connect</p>

                        <div class="p-10"> </div>

                        <div class="flex justify-center w-full mt-10 space-x-5 sm:ml-auto sm:mt-0">
                            <a href="https://www.facebook.com/bimbalacom" class="text-gray-400 hover:text-gray-200">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/bimbalaapp/" class="text-gray-400 hover:text-gray-200">
                                <span class="sr-only">Instagram</span>
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>

                            <a href="https://twitter.com/bimbalacom/" class="text-gray-400 hover:text-gray-200">
                                <span class="sr-only">Twitter</span>
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>

                            <a href="https://github.com/bimbalacom" class="text-gray-400 hover:text-gray-200">
                                <span class="sr-only">GitHub</span>
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://bimbala.com/discord" class="text-gray-400 hover:text-gray-200">
                                <span class="sr-only">Discord</span>
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418z"/>
                                </svg>
                            </a>

                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </section>

@endsection
