<x-admin::layout>

	<div class="flex flex-col transition duration-500 ease-in-out dark:text-white lg:flex-row">
		<div class="relative flex h-screen flex-col items-center justify-center bg-gray-50 px-8 lg:basis-1/2">
			<img class="mb-20 block lg:hidden" src="{{ asset('storage/images/tcon-login-mb.svg') }}" alt="tcon-login">
			<h1 class="text-4xl font-bold lg:my-0 lg:text-7xl">Oh. It's you again.</h1>
			<form method="POST" action="{{ url('/tconadmin/login') }}"
				class="mt-10 flex flex-col gap-10">
				@csrf
				<input class="w-[300px] border p-5 text-2xl lg:w-[500px]" type="email" name="email" id="email" placeholder="Email Address"
					value="{{ old('email') }}" required>
				<input class="w-[300px] border p-5 text-2xl lg:w-[500px]" type="password" name="password" id="password" placeholder="Password" required>
				@error('password')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror

				<button type="submit" class="w-[300px] bg-black p-5 text-2xl font-bold text-white lg:w-[500px]">Log In</button>

				{{-- Maybe turn to errors component-bubble message --}}
				@if ($errors->any())
					<ul class="text-center lg:absolute lg:bottom-10 lg:left-10">
						@foreach ($errors->all() as $error)
							<li class="error-animate bg-red-900 p-5 text-white transition-all duration-1000 lg:text-2xl">{{ $error }}</li>
						@endforeach
					</ul>
				@endif
			</form>
			<img class="absolute inset-x-1/2 top-0 -top-44 max-h-80 rotate-180"
				src="{{ asset('storage/images/luci.png') }}" alt="Luci">
		</div>
		<div class="hidden bg-[url('/storage/images/tcon-crown.svg')] lg:flex lg:h-screen lg:basis-1/2 lg:flex-col lg:items-center lg:justify-center lg:bg-black">
			<img src="{{ asset('storage/images/tcon-login.svg') }}" alt="tcon-login">
		</div>
	</div>


	{{-- <div class="mx-auto px-8 md:pt-28">
		<div class="container mx-auto">
			<main class="mx-auto max-w-lg">
				<h1>Login to Admin Panel</h1>
				<form method="POST" action="{{ url('/tconadmin/login') }}"
					class="mt-10 flex flex-col">
					@csrf
					<label for="email">Email</label>
					<input class="border-2" type="email" name="email" id="email"
						value="{{ old('email') }}" required>
					@error('email')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<label for="password">Password</label>
					<input class="border-2" type="password" name="password" id="password" required>
					@error('password')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror

					<button type="submit" class="mt-10 bg-gray-300 py-3">Log In</button>

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
	</div> --}}

</x-admin::layout>
