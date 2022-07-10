@props(['article'])

<article class="my-10 flex flex-col md:items-center lg:flex-row lg:items-start lg:gap-28">
	<a href="{{ route('article', ['article' => $article->slug]) }}" class="lg:shrink-0">
		<picture class="">
			<source media="(max-width: 399px)" srcset="/storage/images/blog-img-mb.avif" type="image/avif">
			<source media="(min-width: 400px)" srcset="/storage/images/blog-img-ds.avif" type="image/avif">
			<source media="(max-width: 399px)" srcset="/storage/images/blog-img-mb.jpg" type="image/jpg">
			<source media="(min-width: 400px)" srcset="/storage/images/blog-img-ds.jpg" type="image/jpg">
			<img class="eyelid-fx duration-1500 grayscale-50 article-img-shadow mb-5 ease-in-out hover:grayscale-0"
				src="/storage/images/blog-img-mb.jpg" alt="BLOG Image" width="600" height="400" sizes="(max-width: 399px) 350px, (min-width: 400px) 600px">

		</picture>
	</a>


	<div class="flex flex-col justify-between dark:text-white">
		<a href="{{ route('article', ['article' => $article->slug]) }}">
			<h2 class="leading-12 mb-5 mt-10 text-4xl font-bold lg:mt-0">{{ $article->title }}</h2>
		</a>
		{{-- <span class="mb-5 text-xl lg:text-xl font-normal md:tracking-widest-plus text-green-700">new read</span> --}}
		<x-front::article.author {{ $attributes->merge(['class' => 'mb-5']) }} :author="$article->author" />
		<div class="flex flex-row justify-between lg:mb-12">
			<x-front::article.date {{ $attributes->merge(['class' => 'text-lg']) }} :date="$article->published_at" />
			{{-- <span class="vertical-line block lg:hidden"></span> --}}
			<div class="flex flex-row justify-between gap-10">
				<x-front::article.category :category="$article->category" />
			</div>
		</div>
		<p class="leading-11.5 obscure-text lg:line-clamp-10 relative hidden text-2xl font-light transition duration-500 ease-in-out dark:text-white">{{ $article->excerpt }}</p>
	</div>

</article>
