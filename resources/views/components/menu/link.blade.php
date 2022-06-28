@props(['name', 'slug', 'isCategory' => '.'])

@if ($isCategory == 'true')
	<li {{ $attributes->merge(['class' => 'relative underline-fx tracking-widest-plus']) }}><a
			href="{{ route('category', ['category' => $slug]) }}">{{ $name }}</a></li>
@else
	<li {{ $attributes->merge(['class' => 'relative underline-fx tracking-widest-plus']) }}><a
			href="{{ $slug }}">{{ $name }}</a></li>
@endif
