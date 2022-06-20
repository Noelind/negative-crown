@props(['categories' => '.'])

<header id="site-header"
	class="flex flex-row items-center justify-between border-b px-8 py-8 duration-500 dark:border-neutral-600 md:ml-[86px] md:grid md:auto-cols-[1fr] md:grid-flow-col">
	<form action="{{ route('search') }}" method="GET" class="hidden md:flex md:flex-row md:gap-4">
		<div class="relative">

			<input type="text" name="search" id="search" class="peer w-full bg-transparent pl-12 text-2xl text-white outline-none"
				@if (Route::is('search')) value="{{ request('search') }} @endif">
			<label for="search"
				class="absolute left-0 w-full text-transparent transition-all duration-300 before:absolute before:h-[20px] before:w-[20px] before:bg-[url('//localhost:3000/assets/icons/search.svg')] before:opacity-50 before:transition-opacity before:duration-300 after:absolute after:left-0 after:-bottom-5 after:h-[1px] after:w-0 after:bg-white after:transition-all after:duration-300 peer-focus:before:opacity-100 peer-focus:after:w-full">Search</label>
		</div>
	</form>

	@if (Route::is('home'))
		<h1>
			<a href="{{ route('home') }}">
				<x-layout.icons :iconChoice="'logo-mb'" class="md:hidden" />
				<x-layout.icons :iconChoice="'logo-ds'" class="hidden md:block" />
				<span class="hidden">The Crown Of Negativity</span>
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
	<a href="#instagram" class="hidden justify-end text-xl italic text-white md:flex">@tcon</a>



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
