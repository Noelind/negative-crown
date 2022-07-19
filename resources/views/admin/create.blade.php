<x-admin::layout>

	<div class="mx-auto px-8 md:pt-28">
		<div class="container mx-auto">
			<main class="mx-auto max-w-lg">
				<h1>Register New User</h1>
				<form method="POST" action="{{ url('/tconadmin/create-new-user') }}"
					class="mt-10 flex flex-col">
					@csrf
					<label for="username">Username</label>
					<input class="border-2" type="text" name="username" id="username"
						value="{{ old('username') }}" required>
					@error('username')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<label for="name">Name</label>
					<input class="border-2" type="text" name="name" id="name"
						value="{{ old('name') }}" required>
					@error('name')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<label for="password">Password</label>
					<input class="border-2" type="password" name="password" id="password" required>
					@error('password')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<label for="email">Email</label>
					<input class="border-2" type="email" name="email" id="email"
						value="{{ old('email') }}" required>
					@error('email')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<button type="submit" class="mt-10 bg-gray-300 py-3">Submit</button>

					@if ($errors->any())
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					@endif
				</form>
			</main>

		</div>
	</div>

</x-admin::layout>
