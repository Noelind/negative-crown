<aside id="admin-menu"
	class="fixed top-0 z-30 flex h-screen w-3/12 shrink-0 -translate-x-full flex-col overflow-y-auto bg-black transition dark:bg-gray-800 lg:visible lg:sticky lg:z-10 lg:translate-x-0 lg:border-r lg:border-gray-100 lg:shadow-none lg:transition-none lg:dark:border-gray-900">
	<x-admin-info />
	<ul class="pt-5">
		<li class="my-5 ml-10 text-3xl text-white"><a class="underline-fx relative" href="{{ route('admin.articles') }}">Articles</a></li>
		<li class="my-5 ml-10 text-3xl text-white"><a class="underline-fx relative" href="{{ route('admin.categories') }}">Categories</a></li>
		<li class="ml-10 mt-40 text-3xl text-white">
			<form method="POST" action="{{ route('admin.logout') }}">
				@csrf
				<button type="submit">Piss off -></button>
			</form>
	</ul>
</aside>
