@props(['categories' => [1, 2]])

<div class="dark:bg-neutral-1000 fixed top-0 left-0 z-10 h-0 w-screen bg-white opacity-50 transition-all duration-700 peer-checked:h-full">
</div>
<nav role="navigation"
	class="bg-neutral-1000 fixed top-0 -right-full z-20 flex h-full w-[90vw] items-center justify-center text-center transition-all duration-500 peer-checked:right-0 dark:bg-white">
	<svg class="close-icon absolute right-[27px] top-[24px] z-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path class="dark:fill-black" d="M1.74432 0L4.87803e-05 1.74427L18.2557 19.9999L19.9999 18.2556L1.74432 0Z" fill="white" />
		<path class="dark:fill-black" d="M4.87803e-05 1.74427L1.74432 0L19.9999 18.2556L18.2557 19.9999L4.87803e-05 1.74427Z" fill="white" />
		<path class="dark:fill-black" d="M18.2556 0.00010915L19.9999 1.74438L1.74427 20L0 18.2557L18.2556 0.00010915Z" fill="white" />
		<path class="dark:fill-black" d="M19.9999 1.74438L18.2556 0.00010915L0 18.2557L1.74427 20L19.9999 1.74438Z" fill="white" />
	</svg>

	<ul class="flex flex-col items-center justify-center gap-10 dark:text-black">
		@foreach ($categories as $category)
			{{-- {{ $category }} --}}
			<x-menu.link {{ $attributes->merge(['class' => 'text-3xl text-white pointer-events-auto mobile-menu-links']) }} :name="$category->name" :slug="$category->slug" />
		@endforeach
		<x-layout.icons :iconChoice="'theme'" :mobileMenu="'true'" />
	</ul>

</nav>
