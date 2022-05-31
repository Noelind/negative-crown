@props(['author'])

<div class="flex flex-col transition duration-500 ease-in-out dark:text-white md:ml-[86px] lg:flex-row">
	<div class="lg:basis-1/2">
		<picture class="">
			<source media="(min-width: 0px)" srcset="/storage/images/article-hero-img.avif" type="image/avif">
			<img class="mb-5"
				src="/storage/images/article-hero-img.png" alt="BLOG Image" width="1000" height="800" sizes="(max-width: 399px) 350px, (min-width: 400px) 600px">

		</picture>
	</div>
	<div class="flex flex-col items-center justify-center px-8 lg:basis-1/2">
		<div class="max-w-5xl">
			<div class="my-5 flex flex-row items-center justify-between lg:my-10">
				<div class="flex flex-row items-center">
					<img class="rounded-full" src="/storage/images/avatar.png" alt="User Avatar" width="50">
					<span class="ml-5 text-xl lg:text-2xl">Yota Bakopoulou</span>
				</div>

				<x-article.category />
			</div>

			<h1 class="leading-12 mb-10 mt-10 text-4xl font-bold lg:my-0">The Age of Extinction Is Here — Some of Us Just Don’t Know It Yet</h1>
			<div class="mt-8 flex justify-between lg:flex-col">
				<x-article.date {{ $attributes->merge(['class' => 'mb-4']) }} />
				<span class="font-color font-serif text-lg font-normal text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400 lg:text-xl">
					Estimated Read: <strong>4 minutes</strong>
				</span>

			</div>
		</div>

	</div>
</div>
