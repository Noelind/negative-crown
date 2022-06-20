@if (Route::is('home'))
	@php
		$featuredArticle = $articles->first();
	@endphp
@endif

<x-layout :categories="$categories">



	<div class="mx-auto px-8 md:ml-[86px] md:pt-28">
		<div class="container mx-auto">
			@if (Route::is('home'))
				<x-article.featured :article="$featuredArticle" />
				<p class="tracking-widest-plus my-32 text-center text-xl font-bold text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400">comic strips</p>
				<p class="tracking-widest-plus my-32 text-center text-xl font-bold text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400">down the rabbit hole...</p>
			@endif

			@if (Route::is('author'))
				<h1 class="text-4xl text-black dark:text-white">This is author: {{ $articles[0]->author->name }}</h1>
			@endif

			@if (Route::is('category'))
				<h1 class="text-4xl text-black dark:text-white">This is category: {{ $articles[0]->category->name }}</h1>
			@endif

			@if (Route::is('search'))
				<h1 class="text-4xl text-black dark:text-white">Search results for: {{ request('search') }}</h1>
			@endif

			<div class="xsm:grid-cols-2 grid grid-cols-1 gap-32 sm:grid-cols-3">
				@if (Route::is('home'))
					@foreach ($articles->skip(1) as $article)
						<x-article.simple :article="$article" />
					@endforeach
				@else
					@foreach ($articles as $article)
						<x-article.simple :article="$article" />
					@endforeach
				@endif

			</div>
		</div>
	</div>

</x-layout>
