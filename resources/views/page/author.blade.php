<x-layout>

	<h1>Authors Name</h1>
	<p>this is the author page</p>
	<p>Below are his/her articles</p>
	<div class="mx-auto px-8 md:ml-[86px] md:pt-28">
		<div class="container mx-auto">
			<div class="xsm:grid-cols-2 grid grid-cols-1 gap-32 sm:grid-cols-3">
				@foreach ($articles as $article)
					<x-article.simple :article="$article" />
				@endforeach
			</div>
		</div>
	</div>

</x-layout>
