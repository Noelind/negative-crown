@props(['name' => '.', 'slug' => '.'])
<li {{ $attributes->merge(['class' => 'relative underline-fx tracking-widest-plus']) }}><a
		href="{{ route('category', ['category' => $slug]) }}">{{ $name }}</a></li>
