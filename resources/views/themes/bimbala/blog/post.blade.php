@extends('theme::layouts.app')

@section('content')

    <div class="max-w-4xl px-5 mx-auto mt-20 lg:px-0">
        <a href="{{ route('wave.blog') }}" class="flex items-center mb-6 font-mono text-sm font-bold cursor-pointer text-wave-500 ">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            back to the blog
        </a>
    </div>
    <article id="post-{{ $post->id }}" class="max-w-4xl px-5 mx-auto prose prose-xl lg:prose-2xl lg:px-0">

        <meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">

        <div class="max-w-4xl mx-auto mt-6">
                <div class="text-center">
                    <h1 class="block text-3xl leading-8 font-extrabold tracking-tight sm:text-5xl">{{ $post->title}}</h1>
                    <span class="mt-4 block text-base text-indigo-600 font-semibold tracking-wide uppercase"><a href="{{ route('wave.blog.category', $post->category->slug) }}" rel="category">{{ $post->category->name }}</a></span>
                </div>
        </div>

        <div class="relative">
            <img class="w-full h-auto rounded-lg" src="{{ $post->image() }}" alt="{{ $post->title }}" srcset="{{ $post->image() }}">
        </div>

        <div class="text-base max-w-4xl mx-auto">
            {!! $post->body !!}
            <span class="my-6 text-base font-normal">Written on <time
                    datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">{{
                    Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</time></span>
        </div>

    </article>
    <div class="max-w-4xl mx-auto mt-6 pb-20"><div id="disqus_thread"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://bimbala.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
@endsection
