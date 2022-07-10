@props(['date' => '.'])

<span
	{{ $attributes->merge(['class' => 'font-color font-serif font-normal text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400']) }}>Published
	{{ \Carbon\Carbon::parse($date)->diffForHumans() }}
	{{-- Parse in Carbon form first to return diffForHumans --}}
</span>
