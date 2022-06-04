@php
$featuredArticle = $articles->first();
@endphp

<x-layout>

	<div class="mx-auto px-8 md:ml-[86px] md:pt-28">
		<div class="container mx-auto">
			<x-article.featured :article="$featuredArticle" />

			<p class="tracking-widest-plus my-32 text-center text-xl font-bold text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400">comic strip</p>

			<p class="tracking-widest-plus my-32 text-center text-xl font-bold text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400">down the rabbit hole...</p>

			<div class="xsm:grid-cols-2 grid grid-cols-1 gap-32 sm:grid-cols-3">
				@foreach ($articles->skip(1) as $article)
					<x-article.simple :article="$article" />
				@endforeach

			</div>
		</div>
	</div>

</x-layout>
