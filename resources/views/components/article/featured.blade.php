<article class="my-10 flex flex-col md:items-center lg:flex-row lg:items-start lg:gap-28">
	<a href="{{ route('article') }}" class="lg:shrink-0">
		<picture class="">
			<source media="(max-width: 399px)" srcset="/storage/images/blog-img-mb.avif" type="image/avif">
			<source media="(min-width: 400px)" srcset="/storage/images/blog-img-ds.avif" type="image/avif">
			<source media="(max-width: 399px)" srcset="/storage/images/blog-img-mb.jpg" type="image/jpg">
			<source media="(min-width: 400px)" srcset="/storage/images/blog-img-ds.jpg" type="image/jpg">
			<img class="eyelid-fx duration-1500 grayscale-50 article-img-shadow mb-5 ease-in-out hover:grayscale-0"
				src="/storage/images/blog-img-mb.jpg" alt="BLOG Image" width="600" height="400" sizes="(max-width: 399px) 350px, (min-width: 400px) 600px">

		</picture>
	</a>


	<div class="flex flex-col justify-between">
		<a href="{{ route('article') }}">
			<h2 class="leading-11 md:leading-13 mb-5 text-3xl font-medium transition duration-500 ease-in-out dark:text-white lg:mb-8 lg:text-4xl">Organising my bookshelf for the millionth
				time</h2>
		</a>
		{{-- <span class="mb-5 text-xl lg:text-xl font-normal md:tracking-widest-plus text-green-700">new read</span> --}}
		<div class="flex flex-row justify-between lg:mb-12">
			<x-article.date />
			{{-- <span class="vertical-line block lg:hidden"></span> --}}
			<div class="flex flex-row justify-between gap-10">
				<x-article.category />
			</div>
		</div>
		<p class="leading-11.5 obscure-text lg:line-clamp-10 relative hidden text-2xl font-light transition duration-500 ease-in-out dark:text-white">Τα παιδιά τις τελευταίες δεκαετίες
			έχουν γίνει ένα τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική» οπτική γωνία της εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία.
			Ειδικά όταν είναι κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης απολύτως σίγουρο ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι
			αντιπροσωπευτικές της κοινωνικής αντίληψης. Τα παιδιά τις τελευταίες δεκαετίες έχουν γίνει ένα τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική»
			οπτική γωνία της εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία. Ειδικά όταν είναι κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης
			απολύτως σίγουρο ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι αντιπροσωπευτικές της κοινωνικής αντίληψης.</p>
	</div>

</article>
