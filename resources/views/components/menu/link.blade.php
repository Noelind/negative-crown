@props(['text', 'href'])

<li {{ $attributes->merge(['class' => 'relative underline-fx tracking-widest-plus']) }}><a href="{{ $href }}">{{ $text }}</a></li>
