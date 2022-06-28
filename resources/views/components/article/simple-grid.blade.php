@props(['articles'])

<div class="xsm:grid-cols-2 grid grid-cols-1 gap-32 sm:grid-cols-3">
	@foreach ($articles as $article)
		<x-article.simple :article="$article" />
	@endforeach
</div>
