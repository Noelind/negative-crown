@props(['author' => '.'])

<div {{ $attributes->merge(['class' => 'flex flex-row items-center']) }}>

	<a href="/author/{{ $author->username }}" class="flex flex-row items-center gap-5 text-xl transition duration-500 ease-in-out lg:text-2xl"><img class="rounded-full"
			src="/storage/images/avatar.png"
			alt="User Avatar" width="50" height="50">{{ $author->name }}</a>
</div>
