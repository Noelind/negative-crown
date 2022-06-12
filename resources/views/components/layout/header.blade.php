@props(['categories' => '.'])

<header id="site-header"
	class="flex flex-row items-center justify-between border-b px-8 py-8 duration-500 dark:border-neutral-600 md:ml-[86px] md:justify-center">
	@if (Route::is('home'))
		<h1>
			<a href="{{ route('home') }}">
				<x-layout.icons :iconChoice="'logo-mb'" class="md:hidden" />
				<x-layout.icons :iconChoice="'logo-ds'" class="hidden md:block" />
			</a>
		</h1>
	@else
		<div>
			<a href="{{ route('home') }}">
				<x-layout.icons :iconChoice="'logo-mb'" class="md:hidden" />
				<x-layout.icons :iconChoice="'logo-ds'" class="hidden md:block" />
			</a>
		</div>
	@endif
	<x-layout.icons :iconChoice="'burger-menu'" :categories="$categories" />
	<div
		class="w-vscreen origin-top-center dark:bg-neutral-1000 fixed left-0 top-1/2 z-10 hidden -translate-x-1/2 -rotate-90 border-b border-solid bg-white pr-6 transition duration-500 ease-in-out dark:border-neutral-600 dark:text-white md:flex">
		<div class="container py-7" id="vertical-header">
			<nav class="flex items-center justify-end gap-16">
				<ul class="flex flex-row-reverse gap-20 text-xl" id="vertical-menu">
					@foreach ($categories as $category)
						<x-menu.link {{ $attributes->merge(['class' => 'text-lg']) }} :name="$category->name" :slug="$category->slug" />
					@endforeach
					{{-- <x-menu.link {{ $attributes->merge(['class' => 'text-lg']) }} :text="'crown thoughts'" :href="'/crown-thoughts'" />
					<x-menu.link {{ $attributes->merge(['class' => 'text-lg']) }} :text="'books'" :href="'/books'" />
					<x-menu.link {{ $attributes->merge(['class' => 'text-lg']) }} :text="'comics'" :href="'/comics'" />
					<x-menu.link {{ $attributes->merge(['class' => 'text-lg']) }} :text="'photo gallery'" :href="'/photo-gallery'" /> --}}
				</ul>
				<x-layout.icons :iconChoice="'theme'" />
			</nav>
		</div>
	</div>
</header>
