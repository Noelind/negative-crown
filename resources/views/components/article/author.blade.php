@props(['author' => '.'])

<div class="flex flex-row items-center">
	<img class="rounded-full" src="/storage/images/avatar.png" alt="User Avatar" width="50">
	<span class="ml-5 text-xl transition duration-500 ease-in-out lg:text-2xl">{{ $author }}</span>
</div>
