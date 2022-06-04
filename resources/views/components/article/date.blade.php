@props(['date' => '.'])

<span
	{{ $attributes->merge(['class' => 'font-color font-serif text-xl font-normal text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400 lg:text-xl']) }}>Published<strong>
		{{ \Carbon\Carbon::parse($date)->diffForHumans() }}</strong>
	{{-- Parse in Carbon form first to return diffForHumans --}}
</span>