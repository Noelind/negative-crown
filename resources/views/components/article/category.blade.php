{{-- @props(['category' => '.']) --}}

{{-- <a href="{{ route('category', ['category' => $category->slug]) }}"
	class="md:tracking-widest-plus text-lg font-bold text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400 lg:text-xl">{{ $category->name }}</a> --}}


<a href="/category/{{ $category->slug }}"
	class="md:tracking-widest-plus text-lg lowercase text-neutral-600 transition duration-500 ease-in-out dark:text-neutral-400 lg:text-lg">{{ $category->name }}</a>
