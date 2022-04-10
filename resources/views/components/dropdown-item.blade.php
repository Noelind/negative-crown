@props(['active' => false])

@php
    $classes = "block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white";
    if ($active) $classes .= ' bg-blue-300 text-white'; 
    // Leave whitespace character when appending classes to not conflict with previous declarations
@endphp 

<a {{ $attributes(['class' => $classes]) }}> {{$slot}}</a>