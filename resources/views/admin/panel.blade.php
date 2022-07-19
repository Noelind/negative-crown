<x-admin::layout>

	<div class="mx-auto px-8 md:pt-28">
		<div class="container mx-auto">
			<main class="mx-auto max-w-lg">
				<h1>Welcome to Admin Panel</h1>
				<a href="/tconadmin/create-new-user">Create New User</a>
				<form method="POST" action="/tconadmin/logout">
					@csrf
					<button type="submit">Log Out</button>
				</form>
			</main>

		</div>
	</div>

</x-admin::layout>
