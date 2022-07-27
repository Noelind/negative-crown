<x-admin::layout>

	<div class="w-full flex-auto">
		<div class="container mx-auto">
			<main class="mx-auto max-w-lg">
				{{-- Try and pass H1 through controllers instead of multiple ifs --}}
				@if (Route::is('admin.articles'))
					<h1 class="text-4xl text-black dark:text-white">All articles</h1>
				@endif
				@if (Route::is('admin.categories'))
					<h1 class="text-4xl text-black dark:text-white">All Categories</h1>
				@endif
				<a href="/tconadmin/create-new-user">Create New User</a>
				<form method="POST" action="/tconadmin/logout">
					@csrf
					<button type="submit">Log Out</button>
				</form>
			</main>

		</div>
	</div>


</x-admin::layout>
