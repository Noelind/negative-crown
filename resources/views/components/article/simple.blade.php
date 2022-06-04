@props(['article'])

<article class="my-10 flex flex-col">
	<a href="{{ route('article', ['article' => $article->id]) }}">
		<picture class="">
			<source srcset="/storage/images/blog-img-mb.avif" type="image/avif">
			<img class="eyelid-fx duration-1500 grayscale-50 article-img-shadow mb-10 ease-in-out hover:grayscale-0"
				src="/storage/images/blog-img-mb.jpg" alt="BLOG Image" width="350" height="350" sizes="(max-width: 350px) 350px">

		</picture>
	</a>

	<div class="flex max-w-[350px] flex-col justify-between dark:text-white">
		<a href="{{ route('article', ['article' => $article->id]) }}">
			<h2 class="mb-8 text-2xl font-medium leading-9 transition duration-500 ease-in-out dark:text-white">{{ $article->title }}</h2>
		</a>
		<x-article.author :author="$article->author" />
		<div class="flex flex-row justify-between">
			<x-article.date :date="$article->published_at" />
			{{-- <span class="vertical-line sm:w-5"></span> --}}
			<x-article.category :category="$article->category" />
		</div>
		<p class="text-2.5xl leading-40 obscure-text relative hidden font-light transition duration-500 ease-in-out dark:text-white">{{ $article->excerpt }}</p>
	</div>

</article>
