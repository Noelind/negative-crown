<article class="my-10 flex flex-col">
	<a href="/article">
		<picture class="">
			<source srcset="/storage/images/blog-img-mb.avif" type="image/avif">
			<img class="eyelid-fx duration-1500 grayscale-50 article-img-shadow mb-10 ease-in-out hover:grayscale-0"
				src="/storage/images/blog-img-mb.jpg" alt="BLOG Image" width="350" height="350" sizes="(max-width: 350px) 350px">

		</picture>
	</a>

	<div class="flex max-w-[350px] flex-col justify-between">
		<a href="/article">
			<h2 class="mb-8 text-2xl font-medium leading-9 transition duration-500 ease-in-out dark:text-white">Τίτλος Άρθρου με ελληνικά γράμματα που πιάνει 2 γραμμές</h2>
		</a>
		<div class="flex flex-row justify-between">
			<x-article.date />
			{{-- <span class="vertical-line sm:w-5"></span> --}}
			<x-article.category />
		</div>
		<p class="text-2.5xl leading-40 obscure-text relative hidden font-light transition duration-500 ease-in-out dark:text-white">Τα παιδιά τις τελευταίες δεκαετίες έχουν γίνει ένα
			τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική» οπτική γωνία της εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία. Ειδικά όταν είναι
			κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης απολύτως σίγουρο ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι αντιπροσωπευτικές
			της κοινωνικής αντίληψης. Τα παιδιά τις τελευταίες δεκαετίες έχουν γίνει ένα τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική» οπτική γωνία της
			εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία. Ειδικά όταν είναι κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης απολύτως σίγουρο
			ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι αντιπροσωπευτικές της κοινωνικής αντίληψης.</p>
	</div>

</article>
