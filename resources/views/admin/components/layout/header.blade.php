@props(['categories' => '.'])

<header class="flex flex-row items-center justify-center border-b bg-gray-200 px-8 py-8 duration-500 dark:border-neutral-600">>
	<div id="site-logo">
		<a href="/tconadmin">
			<x-admin::layout.icons :iconChoice="'logo-mb'" class="md:hidden" />
			<x-admin::layout.icons :iconChoice="'admin-logo-ds'" class="hidden md:block" />
		</a>
	</div>
</header>
