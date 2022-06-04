<x-layout>

	<x-article.meta :article="$article" />

	<x-article.body :body="$article->body" />

	{{-- <div class="container mx-auto">
		<div class="xsm:grid-cols-2 grid grid-cols-1 gap-32 sm:grid-cols-3">
			@foreach ($articles as $article)
				<x-article.simple :article="$article" />
			@endforeach
		</div>
	</div> --}}

</x-layout>
