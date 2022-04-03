{{-- Passing $posts array (populated from Post model which grabs data from 'posts' table in DB) from web.php --}}
{{-- Test commit from new Ubuntu Install --}}
<x-layout>
    @include ('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />      
        @else
            <p class="text-center">Check back later for new posts!</p>
        @endif

    </main>
</x-layout>
